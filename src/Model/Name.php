<?php

namespace Suretly\LenderApi\Model;

/**
 * Имя
 *
 * Class Name
 * @package Suretly\LenderApi\Model
 */
class Name implements \JsonSerializable
{
    /**
     * @deprecated Do not use a public variable. Will be removed in version v0.4. Use getter/setters methods.
     * @var string $first Имя
     */
    public $first;

    /**
     * @deprecated Do not use a public variable. Will be removed in version v0.4. Use getter/setters methods.
     * @var string $middle Отчество
     */
    public $middle;

    /**
     * @deprecated Do not use a public variable. Will be removed in version v0.4. Use getter/setters methods.
     * @var string $last Фамилия
     */
    public $last;

    /**
     * @deprecated Do not use a public variable. Will be removed in version v0.4. Use getter/setters methods.
     * @var string $maiden Фамилия до брака
     */
    public $maiden;

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
    public function getFirst()
    {
        return $this->first;
    }

    /**
     * @param string $first
     */
    public function setFirst($first)
    {
        $this->first = $first;
    }

    /**
     * @return string
     */
    public function getMiddle()
    {
        return $this->middle;
    }

    /**
     * @param string $middle
     */
    public function setMiddle($middle)
    {
        $this->middle = $middle;
    }

    /**
     * @return string
     */
    public function getLast()
    {
        return $this->last;
    }

    /**
     * @param string $last
     */
    public function setLast($last)
    {
        $this->last = $last;
    }

    /**
     * @return string
     */
    public function getMaiden()
    {
        return $this->maiden;
    }

    /**
     * @param string $maiden
     */
    public function setMaiden($maiden)
    {
        $this->maiden = $maiden;
    }
}