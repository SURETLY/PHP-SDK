<?php

namespace Suretly\LenderApi\Model;

/**
 * Class PassportRF
 * @package Suretly\LenderApi\Model
 */
class PassportRF extends IdentityDocument
{
    /**
     * @var string $series Серия
     */
    public $series;

    /**
     * @var string $number Номер
     */
    public $number;

    /**
     * @var string $issue_date Дата выдачи
     */
    public $issue_date;

    /**
     * @var string $issue_place Место выдачи
     */
    public $issue_place;

    /**
     * @var string $issue_code Код подразделения
     */
    public $issue_code;

    /**
     * @var Address $registration Адрес прописки
     */
    public $registration;

    /**
     * @return string
     */
    public function getSeries()
    {
        return $this->series;
    }

    /**
     * @param string $series
     */
    public function setSeries($series)
    {
        $this->series = $series;
    }

    /**
     * @return string
     */
    public function getNumber()
    {
        return $this->number;
    }

    /**
     * @param $number
     * @throws \Exception
     */
    public function setNumber($number)
    {
        if(strlen($number) !== 6) {
            throw new \Exception('Invalid identity number, length must be equal 6');
        }
        $this->number = $number;
    }

    /**
     * @return string
     */
    public function getIssueDate()
    {
        return $this->issue_date;
    }

    /**
     * @param string $issue_date
     */
    public function setIssueDate($issue_date)
    {
        $this->issue_date = $issue_date;
    }

    /**
     * @return string
     */
    public function getIssuePlace()
    {
        return $this->issue_place;
    }

    /**
     * @param string $issue_place
     */
    public function setIssuePlace($issue_place)
    {
        $this->issue_place = $issue_place;
    }

    /**
     * @return string
     */
    public function getIssueCode()
    {
        return $this->issue_code;
    }

    /**
     * @param string $issue_code
     */
    public function setIssueCode($issue_code)
    {
        $this->issue_code = $issue_code;
    }

    /**
     * @return Address
     */
    public function getRegistration()
    {
        return $this->registration;
    }

    /**
     * @param Address $registration
     */
    public function setRegistration($registration)
    {
        $this->registration = $registration;
    }
}