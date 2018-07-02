<?php

namespace Suretly\LenderApi\Model;

/**
 * Заявка на займ
 *
 * Class Order
 * @package Suretly\LenderApi\Model
 */
class Order
{
    /**
     * @deprecated Do not use a public variable. Will be removed in version v0.4. Use getter/setters methods.
     * @var string $id Идентификатор заявки
     */
    public $id;

    /**
     * @deprecated Do not use a public variable. Will be removed in version v0.4. Use getter/setters methods.
     * @var string $uid Ваш внутренний id заявки (опциональный)
     */
    public $uid;

    /**
     * @deprecated Do not use a public variable. Will be removed in version v0.4. Use getter/setters methods.
     * @var integer $status Статус заявки
     */
    public $status;

    /**
     * @deprecated Do not use a public variable. Will be removed in version v0.4. Use getter/setters methods.
     * @var boolean $is_public Доступна ли заявка публично
     */
    public $is_public;

    /**
     * @deprecated Do not use a public variable. Will be removed in version v0.4. Use getter/setters methods.
     * @var Borrower $borrower Информация о заемщике
     */
    public $borrower;

    /**
     * @deprecated Do not use a public variable. Will be removed in version v0.4. Use getter/setters methods.
     * @var string $credit_score_type Тип скоринга
     */
    public $credit_score_type;

    /**
     * @deprecated Do not use a public variable. Will be removed in version v0.4. Use getter/setters methods.
     * @var integer $user_credit_score Скоринг пользователя
     */
    public $user_credit_score;

    /**
     * @deprecated Do not use a public variable. Will be removed in version v0.4. Use getter/setters methods.
     * @var float $loan_sum Сумма займа
     */
    public $loan_sum;

    /**
     * @deprecated Do not use a public variable. Will be removed in version v0.4. Use getter/setters methods.
     * @var integer $loan_term Срок в днях
     */
    public $loan_term;

    /**
     * @deprecated Do not use a public variable. Will be removed in version v0.4. Use getter/setters methods.
     * @var float $loan_rate Процентная ставка
     */
    public $loan_rate;

    /**
     * @deprecated Do not use a public variable. Will be removed in version v0.4. Use getter/setters methods.
     * @var string $currency_code Код валюты
     */
    public $currency_code;

    /**
     * @deprecated Do not use a public variable. Will be removed in version v0.4. Use getter/setters methods.
     * @var string $callback Url callback (http://server.ru/?id=******)
     */
    public $callback;

    /**
     * @deprecated Do not use a public variable. Will be removed in version v0.4. Use getter/setters methods.
     * @var float $cost Стоимость поручительства
     */
    public $cost;

    /**
     * @deprecated Do not use a public variable. Will be removed in version v0.4. Use getter/setters methods.
     * @var integer $max_wait_time Сколько времени искать заемщиков (сек)
     */
    public $max_wait_time;

    /**
     * @deprecated Do not use a public variable. Will be removed in version v0.4. Use getter/setters methods.
     * @var integer $created_at Дата создания
     */
    public $created_at;

    /**
     * @deprecated Do not use a public variable. Will be removed in version v0.4. Use getter/setters methods.
     * @var integer $createdAt Дата редактирования
     */
    public $modify_at;

    /**
     * @deprecated Do not use a public variable. Will be removed in version v0.4. Use getter/setters methods.
     * @var integer $createdAt Дата закрытия
     */
    public $closed_at;

    /**
     * @deprecated Do not use a public variable. Will be removed in version v0.4. Use getter/setters methods.
     * @var integer Сколько найдено поручителей
     */
    public $bids_count;

    /**
     * @deprecated Do not use a public variable. Will be removed in version v0.4. Use getter/setters methods.
     * @var float $bids_sum Сумма поручительств
     */
    public $bids_sum;

    /**
     * @deprecated Do not use a public variable. Will be removed in version v0.4. Use getter/setters methods.
     * @var string $payment_link Ссылка для оплаты вознаграждения или для оплаты долга на сайте Suretly (изменяется в зависимости от статуса)
     */
    public $payment_link;

    /**
     * @deprecated Do not use a public variable. Will be removed in version v0.4. Use getter/setters methods.
     * @var float $fee_total Полная сумма вознаграждения поручителям
     */
    public $fee_total;

    /**
     * @deprecated Do not use a public variable. Will be removed in version v0.4. Use getter/setters methods.
     * @var float $fee_paid Оплаченная заемщиком сумма вознаграждения поручителям.
     */
    public $fee_paid;

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
     * @return string
     */
    public function getUid()
    {
        return $this->uid;
    }

    /**
     * @param string $uid
     */
    public function setUid($uid)
    {
        $this->uid = $uid;
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
        return $this->is_public;
    }

    /**
     * @param bool $is_public
     */
    public function setIsPublic($is_public)
    {
        $this->is_public = $is_public;
    }

    /**
     * @return Borrower
     */
    public function getBorrower()
    {
        return $this->borrower;
    }

    /**
     * @param Borrower $borrower
     */
    public function setBorrower($borrower)
    {
        $this->borrower = $borrower;
    }

    /**
     * @return string
     */
    public function getCreditScoreType()
    {
        return $this->credit_score_type;
    }

    /**
     * @param string $credit_score_type
     */
    public function setCreditScoreType($credit_score_type)
    {
        $this->credit_score_type = $credit_score_type;
    }

    /**
     * @return int
     */
    public function getUserCreditScore()
    {
        return $this->user_credit_score;
    }

    /**
     * @param int $user_credit_score
     */
    public function setUserCreditScore($user_credit_score)
    {
        $this->user_credit_score = $user_credit_score;
    }

    /**
     * @return float
     */
    public function getLoanSum()
    {
        return $this->loan_sum;
    }

    /**
     * @param float $loan_sum
     */
    public function setLoanSum($loan_sum)
    {
        $this->loan_sum = $loan_sum;
    }

    /**
     * @return int
     */
    public function getLoanTerm()
    {
        return $this->loan_term;
    }

    /**
     * @param int $loan_term
     */
    public function setLoanTerm($loan_term)
    {
        $this->loan_term = $loan_term;
    }

    /**
     * @return float
     */
    public function getLoanRate()
    {
        return $this->loan_rate;
    }

    /**
     * @param float $loan_rate
     */
    public function setLoanRate($loan_rate)
    {
        $this->loan_rate = $loan_rate;
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

    /**
     * @return string
     */
    public function getCallback()
    {
        return $this->callback;
    }

    /**
     * @param string $callback
     */
    public function setCallback($callback)
    {
        $this->callback = $callback;
    }

    /**
     * @return float
     */
    public function getCost()
    {
        return $this->cost;
    }

    /**
     * @param float $cost
     */
    public function setCost($cost)
    {
        $this->cost = $cost;
    }

    /**
     * @return int
     */
    public function getMaxWaitTime()
    {
        return $this->max_wait_time;
    }

    /**
     * @param int $max_wait_time
     */
    public function setMaxWaitTime($max_wait_time)
    {
        $this->max_wait_time = $max_wait_time;
    }

    /**
     * @return int
     */
    public function getCreatedAt()
    {
        return $this->created_at;
    }

    /**
     * @param int $created_at
     */
    public function setCreatedAt($created_at)
    {
        $this->created_at = $created_at;
    }

    /**
     * @return int
     */
    public function getModifyAt()
    {
        return $this->modify_at;
    }

    /**
     * @param int $modify_at
     */
    public function setModifyAt($modify_at)
    {
        $this->modify_at = $modify_at;
    }

    /**
     * @return int
     */
    public function getClosedAt()
    {
        return $this->closed_at;
    }

    /**
     * @param int $closed_at
     */
    public function setClosedAt($closed_at)
    {
        $this->closed_at = $closed_at;
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
     * @return float
     */
    public function getBidsSum()
    {
        return $this->bids_sum;
    }

    /**
     * @param float $bids_sum
     */
    public function setBidsSum($bids_sum)
    {
        $this->bids_sum = $bids_sum;
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
}