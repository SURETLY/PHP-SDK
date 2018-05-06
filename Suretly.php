<?php

require 'vendor/autoload.php';
require 'config.php';
require_once "Model/NewOrder.php";
require_once "Model/Orders.php";
require_once "Model/Options.php";
require_once "Model/OrderStatus.php";
require_once "Model/Country.php";
require_once "Model/Currency.php";
require_once "Model/APIMessage.php";
require_once "Model/Error.php";

use GuzzleHttp\Client;
use GuzzleHttp\Exception\BadResponseException;
const countries = "/countries";
const currencies = "/currencies";
const options = "/options";
const orders = "/orders";
const newOrder = "/order/new";
const statusOrder = "/order/status";
const stopOrder = "/order/stop";
const getContract = "/contract/get";
const acceptContract = "/contract/accept";
const orderIssued = "/order/issued";
const orderPaid = "/order/paid";
const orderPartialPaid = "/order/partialpaid";
const orderUnpaid = "/unpaid";


class Suretly
{
    private $apiClient;
    private $jsonMapper;
    private $config;
    private $id;
    private $token;


    /**
     * Suretly constructor.
     */
    public function __construct(){}

    /**
     * @param $id
     * @param $token
     * @return Suretly
     * конструктор SDK для демонстрации работы методов
     */
    public static function ClientDemo($id, $token){
        $sdk = new Suretly();
        $sdk->id = $id;
        $sdk->token = $token;
        $sdk->config = new config($debug = true);
        $sdk->apiClient = new Client(['base_uri' => $sdk->config->getApiURL()]);
        $sdk->jsonMapper = new JsonMapper();
        return $sdk;
    }
    /**
     * @param $id
     * @param $token
     * @return Suretly
     * конструктор SDK для использования на production
     */
    public static function ClientProduction($id, $token){
        $sdk = new Suretly();
        $sdk->id = $id;
        $sdk->token = $token;
        $sdk->config = new config();
        $sdk->apiClient = new Client(['base_uri' => $sdk->config->getApiURL()]);
        $sdk->jsonMapper = new JsonMapper();
        return $sdk;
    }
    /**
     * @return string
     * генерируем токен авторизации
     */
    private function getAuthToken(){
        $randomID = bin2hex(random_bytes(4));
        return $this->id."-".$randomID."-".md5($randomID.$this->token);
    }

    /**
     * @return array
     * генерируем header для запроса
     */
    private function getHeaders(){
        return [
            'User-Agent' => $this->config->SDK_NAME."/".$this->config->SDK_VERSION,
            'Accept'     => 'application/json',
            '_auth'      => $this->getAuthToken()
        ];
    }

    /**
     * @param string $URI
     * @param null $param
     * @return string
     * генерируем URI для запроса
     */
    private function buildURI($URI, $param = null){

        if ($param)$paramStr = "?".http_build_query($param);
        return $URI.$paramStr;
    }

    /**
     * @param $URI
     * @return \Psr\Http\Message\StreamInterface|string
     * функция осуществляет Get-запросы к API
     */
    private function getResponse($URI){

        try  {
            $result = $this->apiClient->get($URI,['headers' => $this->getHeaders()])->getBody();
        } catch (BadResponseException $exception) {
            $result = (string)$exception->getResponse()->getBody()->getContents();
        }
            return $result;
    }

    /**
     * @param $URI
     * @param null $param
     * @return \Psr\Http\Message\StreamInterface|string
     * функция осуществляет Post-запросы к АПИ
     */
    private function sendPost($URI, $param=null){

        try {
            $result = $this->apiClient->request("POST", $URI, ['headers' => $this->getHeaders(), 'body'=>json_encode($param)])->getBody();
        } catch (BadResponseException $exception) {
            $result = (string)$exception->getResponse()->getBody()->getContents();
        }
        return $result;
    }

    /**
     * @param $response
     * @param $mappingObj
     * @return object
     * Маппинг объекта по модели
     */
    public function mapToObject($response, $mappingObj){

        return $this->jsonMapper->map(json_decode($response), $mappingObj);

    }

    /**
     * @return Country[]
     * Функция возвращает список стран
     */
    public function getCountries(){
        $res = $this->apiClient->get(countries)->getBody();
        return $this->jsonMapper->mapArray(json_decode($res), Array(), 'Country');
    }

    /**
     * @return Currency[]
     * Функция возвращает список валют
     */
    public function getCurrencies(){
        $res = $this->apiClient->get(currencies)->getBody();
        return $this->jsonMapper->mapArray(json_decode($res), Array(), 'Currency');
    }

    /**
     * @return object/Options
     * Функция возвращает лимиты на заявку
     */
    public function getOptions(){

        $res = $this->getResponse(options);

        return $this->mapToObject($res, new Options());
    }

    /**
     * @param integer $from
     * @param integer $to
     * @param integer $limit
     * @param integer $skip
     * @return object/Orders
     * Функция возвращает список заявок
     */
    public function getOrders($from, $to, $limit, $skip){

        $res = $this->getResponse($this->buildURI(orders,["from"=>$from, "to"=>$to, "limit"=>$limit, "skip"=>$skip]));

        return $this->mapToObject($res, new Orders());
    }

    /**
     * @param string $order
     * @return object/Order
     * Функция отправляет новую заявку
     */
    public function postNewOrder($order){

        $res = $this->sendPost(newOrder, $order);
        return $this->mapToObject($res, new Order());

    }

    /**
     * @param string $orderId
     * @return object|OrderStatus
     * проверяем статус выбранной заявки
     */
    public function getOrderStatus($orderId){

        $res = $this->getResponse($this->buildURI(statusOrder, ['id'=>$orderId]));
        return $this->mapToObject($res, new OrderStatus());
    }

    /**
     * @param $orderId
     * @return object/APIMessage
     * Функция вызывает метод остановки выбранной заявки
     */
    public function postOrderStop($orderId){

        $rsp = $this->sendPost($this->buildURI(stopOrder, ['id'=>$orderId]));
        return $this->mapToObject(json_encode($rsp), new APIMessage());
}

    /**
     * @param string $orderId
     * @return \Psr\Http\Message\StreamInterface|string
     * Функция возвращает агентский договор по выбранной заявки
     */
    public function getContract($orderId){

        return $this->getResponse($this->buildURI(getContract, ['id'=>$orderId]));

    }

    /**
     * @param string $orderId
     * @return \Psr\Http\Message\StreamInterface|string
     * Функция отправляет согласие Заёмщика с условиями контракта
     */
    public function postContractAccept($orderId){

        return $this->sendPost($this->buildURI(acceptContract, ['id'=>$orderId]));

    }

    /**
     * @param string $orderId
     * @return \Psr\Http\Message\StreamInterface|string
     * Функция отпраляет подтверждение оплаты и выдачи заявки
     */
    public function postOrderIssued($orderId){

        return $this->sendPost($this->buildURI(orderIssued, ['id'=>$orderId]));

    }

    /**
     * @param string $orderId
     * @return \Psr\Http\Message\StreamInterface|string
     * Функция отправляет подтверждение полного погашения заявки
     */
    public function postOrderPaid($orderId){

        return $this->sendPost($this->buildURI(orderPaid, ['id'=>$orderId]));

    }

    /**
     * @param string $orderId
     * @param integer $sum
     * @return \Psr\Http\Message\StreamInterface|string
     */
    public function postOrderPartialPaid($orderId, $sum){

        return $this->sendPost($this->buildURI(orderPartialPaid, ['id'=>$orderId, "sum"=>$sum]));

    }

    /**
     * @param string $orderId
     * @return \Psr\Http\Message\StreamInterface|string
     * Функция отправляет подтверждение не оплаты заявки
     */
    public function postOrderUnpaid($orderId){

        return $this->sendPost($this->buildURI(orderUnpaid, ['id'=>$orderId]));

    }

}
?>