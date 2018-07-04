<?php

namespace Suretly\LenderApi\Model;

/**
 * Валюта
 *
 * Class Currency
 * @package Suretly\LenderApi\Model
 */
class Currency
{
    /**
     * @var string $code Код валюты
     */
    public $code;

    /**
     * @var string $name Название валюты
     */
    public $name;

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
}