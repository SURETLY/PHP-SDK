<?php

namespace Suretly\LenderApi\Model;

/**
 * Параметры для поиска поручителей
 *
 * Class Options
 * @package Suretly\LenderApi\Model
 */
class Options
{
    /**
     * @deprecated Do not use a public variable. Will be removed in version v0.4. Use getter/setters methods.
     * @var int $min_term Минимальный срок займа доступный для формирования завки, дни
     */
    public $min_term;

    /**
     * @deprecated Do not use a public variable. Will be removed in version v0.4. Use getter/setters methods.
     * @var int $max_term Максимальный срок займа доступный для формирования завки, дни
     */
    public $max_term;

    /**
     * @deprecated Do not use a public variable. Will be removed in version v0.4. Use getter/setters methods.
     * @var int $min_prolong Минимальный доступный срок для каждой пролонгации займа, дни
     */
    public $min_prolong;

    /**
     * @deprecated Do not use a public variable. Will be removed in version v0.4. Use getter/setters methods.
     * @var int $max_prolong Максимальный доступный срок для каждой пролонгации займа, дни
     */
    public $max_prolong;

    /**
     * @deprecated Do not use a public variable. Will be removed in version v0.4. Use getter/setters methods.
     * @var float $min_sum Минимальная сумма доступная для формирования завки
     */
    public $min_sum;

    /**
     * @deprecated Do not use a public variable. Will be removed in version v0.4. Use getter/setters methods.
     * @var float $max_sum Максимальная сумма доступная для формирования завки
     */
    public $max_sum;

    /**
     * @deprecated Do not use a public variable. Will be removed in version v0.4. Use getter/setters methods.
     * @var int $server_time Unixtime время на сервере, для синхронизации
     */
    public $server_time;

    /**
     * @return int
     */
    public function getMinTerm()
    {
        return $this->min_term;
    }

    /**
     * @param int $min_term
     */
    public function setMinTerm($min_term)
    {
        $this->min_term = $min_term;
    }

    /**
     * @return int
     */
    public function getMaxTerm()
    {
        return $this->max_term;
    }

    /**
     * @param int $max_term
     */
    public function setMaxTerm($max_term)
    {
        $this->max_term = $max_term;
    }

    /**
     * @return int
     */
    public function getMinProlong()
    {
        return $this->min_prolong;
    }

    /**
     * @param int $min_prolong
     */
    public function setMinProlong($min_prolong)
    {
        $this->min_prolong = $min_prolong;
    }

    /**
     * @return int
     */
    public function getMaxProlong()
    {
        return $this->max_prolong;
    }

    /**
     * @param int $max_prolong
     */
    public function setMaxProlong($max_prolong)
    {
        $this->max_prolong = $max_prolong;
    }

    /**
     * @return float
     */
    public function getMinSum()
    {
        return $this->min_sum;
    }

    /**
     * @param float $min_sum
     */
    public function setMinSum($min_sum)
    {
        $this->min_sum = $min_sum;
    }

    /**
     * @return float
     */
    public function getMaxSum()
    {
        return $this->max_sum;
    }

    /**
     * @param float $max_sum
     */
    public function setMaxSum($max_sum)
    {
        $this->max_sum = $max_sum;
    }

    /**
     * @return int
     */
    public function getServerTime()
    {
        return $this->server_time;
    }

    /**
     * @param int $server_time
     */
    public function setServerTime($server_time)
    {
        $this->server_time = $server_time;
    }
}