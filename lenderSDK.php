<?php
/**
 * Created by PhpStorm.
 * User: ndolgopolov
 * Date: 26.09.17
 * Time: 11:18
 */
require 'vendor/autoload.php';
require 'config.php';
require_once "Model/NewOrder.php";
require_once "Model/Orders.php";
require_once "Model/Options.php";
require_once "Model/OrderStatus.php";
require_once "Model/Country.php";
require_once "Model/Currency.php";
require_once "Model/APIMessage.php";

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


class lenderSDK
{
    private $apiClient;
    private $jsonMapper;
    private $config;
    private $id;
    private $token;

    public function __construct($id,//Lender id
                                $token, //Lender token
                                $debug = false) //Переключение dev/prod
    {
        $this->id = $id;
        $this->token = $token;
        $this->config = new config($debug);
        $this->apiClient = new Client(['base_uri' => $this->config->getApiURL(),
                                        'debug' => false]);
        $this->jsonMapper = new JsonMapper();
    }

    private function getAuthToken(){
        $randomID = bin2hex(random_bytes(4));
        return $this->id."-".$randomID."-".md5($randomID.$this->token);
    }
    private function getHeaders(){
        return [
            'User-Agent' => $this->config->SDK_NAME."/".$this->config->SDK_VERSION,
            'Accept'     => 'application/json',
            '_auth'      => $this->getAuthToken()
        ];
    }

    private function buildURI($URI, $param = null){

        if ($param)$paramStr = "?".http_build_query($param);
        return $URI.$paramStr;
    }

    private function getResponse($URI){

        try  {
            $result = $this->apiClient->get($URI,['headers' => $this->getHeaders()])->getBody();
        } catch (BadResponseException $exception) {
            $result = (string)$exception->getResponse()->getBody()->getContents();
        }
            return $result;
    }

    private function sendPost($URI, $param=null){

        try {
            $result = $this->apiClient->request("POST", $URI, ['headers' => $this->getHeaders(), 'body'=>json_encode($param)])->getBody();
        } catch (BadResponseException $exception) {
            $result = (string)$exception->getResponse()->getBody()->getContents();
        }
        return $result;
    }

    public function mapToObject($response, $mappingObj){

        return $this->jsonMapper->map(json_decode($response), $mappingObj);

    }

    public function getCountries(){
        $res = $this->apiClient->get(countries)->getBody();
        return $this->jsonMapper->mapArray(json_decode($res), Array(), 'Country');
    }

    public function getCurrencies(){
        $res = $this->apiClient->get(currencies)->getBody();
        return $this->jsonMapper->mapArray(json_decode($res), Array(), 'Currency');
    }
    public function getOptions(){

        $res = $this->getResponse(options);

        return $this->mapToObject($res, new Options());
    }
    public function getOrders($from, $to, $limit, $skip){

        $res = $this->getResponse($this->buildURI(orders,["from"=>$from, "to"=>$to, "limit"=>$limit, "skip"=>$skip]));

        return $this->mapToObject($res, new Orders());
    }

    public function postNewOrder($order){

        $res = $this->sendPost(newOrder, $order);
        return $this->mapToObject($res, new Order());

    }

    public function getOrderStatus($orderId){

        $res = $this->getResponse($this->buildURI(statusOrder, ['id'=>$orderId]));
        return $this->mapToObject($res, new OrderStatus());
    }

    public function postOrderStop($orderId){

        $rsp = $this->sendPost($this->buildURI(stopOrder, ['id'=>$orderId]));
        return $this->mapToObject(json_encode($rsp), new APIMessage());
}

    public function getContract($orderId){

        return $this->getResponse($this->buildURI(getContract, ['id'=>$orderId]));

    }

    public function postContractAccept($orderId){

        return $this->sendPost($this->buildURI(acceptContract, ['id'=>$orderId]));

    }

    public function postOrderIssued($orderId){

        return $this->sendPost($this->buildURI(orderIssued, ['id'=>$orderId]));

    }

    public function postOrderPaid($orderId){

        return $this->sendPost($this->buildURI(orderPaid, ['id'=>$orderId]));

    }

    public function postOrderPartialPaid($orderId, $sum){

        return $this->sendPost($this->buildURI(orderPartialPaid, ['id'=>$orderId, "sum"=>$sum]));

    }
    public function postOrderUnpaid($orderId){

        return $this->sendPost($this->buildURI(orderUnpaid, ['id'=>$orderId]));

    }

}
?>