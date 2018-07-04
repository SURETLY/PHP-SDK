<?php

namespace Suretly\LenderApi\Model;

/**
 * Страна
 *
 * Class Country
 * @package Suretly\LenderApi\Model
 */
class Country
{
    /**
     * @var string $code Код страны
     */
    public $code;

    /**
     * @var string $name Название страны
     */
    public $name;

    /**
     * @var string $currency_code Код валюты страны
     */
    public $currency_code;

    /**
     * @return string
     */
    public function getCode()
    {
        return $this->code;
    }

    /**
     * @param string $code
     */
    public function setCode($code)
    {
        $this->code = $code;
    }

    /**
     * @return string
     */
    public function getName()
    {
        return $this->name;
    }

    /**
     * @param string $name
     */
    public function setName($name)
    {
        $this->name = $name;
    }

    /**
     * @return string
     */
    public function getCurrencyCode()
    {
        return $this->currency_code;
    }

    /**
     * @param string $currency_code
     */
    public function setCurrencyCode($currency_code)
    {
        $this->currency_code = $currency_code;
    }
}