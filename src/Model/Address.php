<?php

namespace Suretly\LenderApi\Model;

/**
 * Адресс
 *
 * Class Address
 * @package Suretly\LenderApi\Model
 */
class Address implements \JsonSerializable
{
    /**
     * @var string $country Страна
     */
    public $country;

    /**
     * @var string $zip Индекс
     */
    public $zip;

    /**
     * @var string $area Район, область, края или республика
     */
    public $area;

    /**
     * @var string $city Город / населеный пункт
     */
    public $city;

    /**
     * @var string $street Улица
     */
    public $street;

    /**
     * @var string $house Дом
     */
    public $house;

    /**
     * @var string $suite Корпус
     */
    public $suite;

    /**
     * @var string $building Строение
     */
    public $building;

    /**
     * @var string $flat Квартира
     */
    public $flat;

    /**
     * @var string $flat Адрес №1 (сша)
     */
    public $address_line_1;

    /**
     * @var string $flat Адрес №2 (сша)
     */
    public $address_line_2;

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
    public function getCountry()
    {
        return $this->country;
    }

    /**
     * @param string $country
     */
    public function setCountry($country)
    {
        $this->country = $country;
    }

    /**
     * @return string
     */
    public function getZip()
    {
        return $this->zip;
    }

    /**
     * @param string $zip
     */
    public function setZip($zip)
    {
        $this->zip = $zip;
    }

    /**
     * @return string
     */
    public function getArea()
    {
        return $this->area;
    }

    /**
     * @param string $area
     */
    public function setArea($area)
    {
        $this->area = $area;
    }

    /**
     * @return string
     */
    public function getCity()
    {
        return $this->city;
    }

    /**
     * @param string $city
     */
    public function setCity($city)
    {
        $this->city = $city;
    }

    /**
     * @return string
     */
    public function getStreet()
    {
        return $this->street;
    }

    /**
     * @param string $street
     */
    public function setStreet($street)
    {
        $this->street = $street;
    }

    /**
     * @return string
     */
    public function getHouse()
    {
        return $this->house;
    }

    /**
     * @param string $house
     */
    public function setHouse($house)
    {
        $this->house = $house;
    }

    /**
     * @return string
     */
    public function getSuite()
    {
        return $this->suite;
    }

    /**
     * @param string $suite
     */
    public function setSuite($suite)
    {
        $this->suite = $suite;
    }

    /**
     * @return string
     */
    public function getBuilding()
    {
        return $this->building;
    }

    /**
     * @param string $building
     */
    public function setBuilding($building)
    {
        $this->building = $building;
    }

    /**
     * @return string
     */
    public function getFlat()
    {
        return $this->flat;
    }

    /**
     * @param string $flat
     */
    public function setFlat($flat)
    {
        $this->flat = $flat;
    }

    /**
     * @return string
     */
    public function getAddressLine1()
    {
        return $this->address_line_1;
    }

    /**
     * @param string $address_line_1
     */
    public function setAddressLine1($address_line_1)
    {
        $this->address_line_1 = $address_line_1;
    }

    /**
     * @return string
     */
    public function getAddressLine2()
    {
        return $this->address_line_2;
    }

    /**
     * @param string $address_line_2
     */
    public function setAddressLine2($address_line_2)
    {
        $this->address_line_2 = $address_line_2;
    }
}