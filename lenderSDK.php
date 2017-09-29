<?php
/**
 * Created by PhpStorm.
 * User: ndolgopolov
 * Date: 26.09.17
 * Time: 11:18
 */
require 'vendor/autoload.php';
require 'config.php';
require_once "Model/Orders.php";
require_once "Model/Options.php";
require_once "Model/OrderStatus.php";
require_once "Model/Country.php";
require_once "Model/Currency.php";

use GuzzleHttp\Client;

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
    private $debug;


    public function __construct($id, $token, $debug = false)
    {
        $this->id = $id;
        $this->token = $token;
        $this->debug = $debug;
        $this->config = new config($debug);
        $this->apiClient = new Client(['base_uri' => $this->config->getApiURL()]);
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

        return $URI.$param?http_build_query($param):"";

    }

    private function getResponse($URI){

        $res = $this->apiClient->get($URI,['headers' => $this->getHeaders()]);
        try  {
            return $res->getBody();
        }
        catch(exception $e){

            //

        }

    }

    private function sendPost($URI, $param){
        $result = $this->apiClient->request("POST", $URI, ['headers' => $this->getHeaders(), 'body'=>json_encode($param), 'debug' => $this->debug]);
        return json_decode($result->getBody());
    }

    private function mapResponse($response, $mappingObj){

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

        return $this->getResponse(options, new Options());

    }
    public function getOrders($from, $to, $limit, $skip){

        $res = $this->getResponse($this->buildURI(orders,["from"=>$from, "to"=>$to, "limit"=>$limit, "skip"=>$skip]));

        return $this->mapResponse($res, new Orders());
    }

    public function postNewOrder($order){

        return $this->sendPost(newOrder, $order);

    }

    public function getOrderStatus($orderId){

        $res = $this->getResponse($this->buildURI(statusOrder, ['id'=>$orderId]));
        return $this->mapResponse($res, new OrderStatus());
    }

    public function postOrderStop($orderId){

        return $this->sendPost(stopOrder, ["id"=>$orderId]);
}

    public function getContract($orderId){

        return $this->getResponse($this->buildURI(getContract, ['id'=>$orderId]));

    }

    public function postContractAccept($orderId){

        return $this->sendPost(acceptContract, ["id"=>$orderId]);

    }

    public function postOrderIssued($orderId){

        return $this->sendPost(orderIssued, ["id"=>$orderId]);

    }

    public function postOrderPaid($orderId){

        return $this->sendPost(orderPaid, ["id"=>$orderId]);

    }

    public function postOrderPartialPaid($orderId, $sum){

        return $this->sendPost(orderPartialPaid, ["id"=>$orderId, "sum"=>$sum]);

    }
    public function postOrderUnpaid($orderId){

        return $this->sendPost(orderUnpaid, ["id"=>$orderId]);

    }

}
?>