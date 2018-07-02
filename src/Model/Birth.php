<?php

namespace Suretly\LenderApi\Model;

/**
 * Дата и место рождения
 *
 * Class Birth
 * @package Suretly\LenderApi\Model
 */
class Birth implements \JsonSerializable
{
    /**
     * @var string $date Дата рождения
     */
    public $date;

    /**
     * @var string $place Место
     */
    public $place;

    /**
     * @inheritdoc
     */
    public function jsonSerialize()
    {
        return get_object_vars($this);
    }

    /**
     * @return string
     */
    public function getDate()
    {
        return $this->date;
    }

    /**
     * @param string $date
     */
    public function setDate($date)
    {
        $this->date = $date;
    }

    /**
     * @return string
     */
    public function getPlace()
    {
        return $this->place;
    }

    /**
     * @param string $place
     */
    public function setPlace($place)
    {
        $this->place = $place;
    }
}