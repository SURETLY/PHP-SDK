<?php

namespace Suretly\LenderApi\Model;

/**
 * Казахский паспорт (ID)
 *
 * Class IdKZ
 * @package Suretly\LenderApi\Model
 */
class IdKZ extends IdentityDocument
{
    /**
     * @deprecated Do not use a public variable. Will be removed in version v0.4. Use getter/setters methods.
     * @var string $number Номер
     */
    public $number;

    /**
     * @deprecated Do not use a public variable. Will be removed in version v0.4. Use getter/setters methods.
     * @var string $iin ИИН
     */
    public $iin;

    /**
     * @deprecated Do not use a public variable. Will be removed in version v0.4. Use getter/setters methods.
     * @var string $issue_date Дата выдачи
     */
    public $issue_date;

    /**
     * @deprecated Do not use a public variable. Will be removed in version v0.4. Use getter/setters methods.
     * @var string $issue_place Место выдачи
     */
    public $issue_place;

    /**
     * @deprecated Do not use a public variable. Will be removed in version v0.4. Use getter/setters methods.
     * @var string $expire_date Срок действия
     */
    public $expire_date;

    /**
     * @return string
     */
    public function getNumber()
    {
        return $this->number;
    }

    /**
     * @param string $number
     */
    public function setNumber($number)
    {
        $this->number = $number;
    }

    /**
     * @return string
     */
    public function getIin()
    {
        return $this->iin;
    }

    /**
     * @param string $iin
     */
    public function setIin($iin)
    {
        $this->iin = $iin;
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
    public function getExpireDate()
    {
        return $this->expire_date;
    }

    /**
     * @param string $expire_date
     */
    public function setExpireDate($expire_date)
    {
        $this->expire_date = $expire_date;
    }
}