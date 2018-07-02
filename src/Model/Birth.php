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
     * @deprecated Do not use a public variable. Will be removed in version v0.4. Use getter/setters methods.
     * @var string $date Дата рождения
     */
    public $date;

    /**
     * @deprecated Do not use a public variable. Will be removed in version v0.4. Use getter/setters methods.
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