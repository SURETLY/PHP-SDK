<?php

class config
{
    private $URL_SCHEME;
    private $API_HOST;
    private $API_PORT;
    public $SDK_NAME = "lenderSDK-PHP";
    public $SDK_VERSION = "0.1";

    public function __construct($debug = false)
    {
        if ($debug){
            $this->URL_SCHEME = "https";
            $this->API_HOST = "dev.suretly.io";
            $this->API_PORT = "3000";
        } else{
            $this->URL_SCHEME = "https";
            $this->API_HOST = "api.suretly.io";
            $this->API_PORT = "3000";
        }
    }

    public function getApiURL(){

        return $this->URL_SCHEME."://".$this->API_HOST.":".$this->API_PORT;
    }
}