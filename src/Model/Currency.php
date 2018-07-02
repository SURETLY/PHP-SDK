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
     * @var string $id
     */
    public $id;

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

    /**
     * @deprecated Do not use a public variable. Will be removed in version v0.4.
     * @return string
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * @deprecated Do not use a public variable. Will be removed in version v0.4.
     * @param string $id
     */
    public function setId($id)
    {
        $this->id = $id;
    }
}