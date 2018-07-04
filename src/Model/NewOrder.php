<?php

namespace Suretly\LenderApi\Model;

/**
 * Создание новой заяаки
 *
 * Class NewOrder
 * @package Suretly\LenderApi\Model
 */
class NewOrder implements \JsonSerializable
{
    /**
     * @var null|string $uid Ваш внутренний id заявки, опциональный
     */
    public $uid;

    /**
     * @var bool $is_public Доступна ли заявка публично
     */
    public $is_public;

    /**
     * @var Borrower $borrower Информация о заемщике
     */
    public $borrower;

    /**
     * @var int $user_credit_score Скоринг заемщика
     */
    public $user_credit_score;

    /**
     * @var float $loan_sum сумма Займа
     */
    public $loan_sum;

    /**
     * @var int $loan_term Срок в днях
     */
    public $loan_term;

    /**
     * @var float $loan_rate Процентная ставка
     */
    public $loan_rate;

    /**
     * @var string $currency_code Код валюты
     */
    public $currency_code;

    /**
     * @var string $callback Url callback (http://server.ru/?id=******)
     */
    public $callback;

    /**
     * @inheritdoc
     */
    public function jsonSerialize()
    {
        return get_object_vars($this);
    }

    /**
     * @return null|string
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
     * @return bool
     */
    public function getIsPublic()
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
}