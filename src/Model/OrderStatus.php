<?php

namespace Suretly\LenderApi\Model;

/**
 * Текущий статус заявки
 *
 * Class OrderStatus
 * @package Suretly\LenderApi\Model
 */
class OrderStatus
{
    /**
     * @var string $id Идентификатор заявки
     */
    public $id;

    /**
     * @var int $status Статус
     */
    public $status;

    /**
     * @var boolean $public Доступна ли заявка публично
     */
    public $public;

    /**
     * @var float $sum Сумма на которую уже поручились поручители к текущему моменту
     */
    public $sum;

    /**
     * @var int $cost текущая стоимость услуг поручителей для заемщика
     */
    public $cost;

    /**
     * @var int $bids_count сколько найдено поручителей
     */
    public $bids_count;

    /**
     * @var int $stop_time время до окончания сбора средств
     */
    public $stop_time;

    /**
     * @var float $fee_total сумма вознаграждений за поручительство по текущей заявке
     */
    public $fee_total;

    /**
     * @var float $fee_paid оплаченно вознагражденй
     */
    public $fee_paid;

    /**
     * @var string $payment_link Ссылка для оплаты вознаграждения или для оплаты долга на сайте Suretly (изменяется в зависимости от статуса)
     */
    public $payment_link;

    /**
     * @return string
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * @param string $id
     */
    public function setId($id)
    {
        $this->id = $id;
    }

    /**
     * @return int
     */
    public function getStatus()
    {
        return $this->status;
    }

    /**
     * @param int $status
     */
    public function setStatus($status)
    {
        $this->status = $status;
    }

    /**
     * @return bool
     */
    public function isPublic()
    {
        return $this->public;
    }

    /**
     * @param bool $public
     */
    public function setPublic($public)
    {
        $this->public = $public;
    }

    /**
     * @return float
     */
    public function getSum()
    {
        return $this->sum;
    }

    /**
     * @param float $sum
     */
    public function setSum($sum)
    {
        $this->sum = $sum;
    }

    /**
     * @return int
     */
    public function getCost()
    {
        return $this->cost;
    }

    /**
     * @param int $cost
     */
    public function setCost($cost)
    {
        $this->cost = $cost;
    }

    /**
     * @return int
     */
    public function getBidsCount()
    {
        return $this->bids_count;
    }

    /**
     * @param int $bids_count
     */
    public function setBidsCount($bids_count)
    {
        $this->bids_count = $bids_count;
    }

    /**
     * @return int
     */
    public function getStopTime()
    {
        return $this->stop_time;
    }

    /**
     * @param int $stop_time
     */
    public function setStopTime($stop_time)
    {
        $this->stop_time = $stop_time;
    }

    /**
     * @return float
     */
    public function getFeeTotal()
    {
        return $this->fee_total;
    }

    /**
     * @param float $fee_total
     */
    public function setFeeTotal($fee_total)
    {
        $this->fee_total = $fee_total;
    }

    /**
     * @return float
     */
    public function getFeePaid()
    {
        return $this->fee_paid;
    }

    /**
     * @param float $fee_paid
     */
    public function setFeePaid($fee_paid)
    {
        $this->fee_paid = $fee_paid;
    }

    /**
     * @return string
     */
    public function getPaymentLink()
    {
        return $this->payment_link;
    }

    /**
     * @param string $payment_link
     */
    public function setPaymentLink($payment_link)
    {
        $this->payment_link = $payment_link;
    }
}