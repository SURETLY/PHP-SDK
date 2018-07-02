<?php

namespace Suretly\LenderApi\Model;

/**
 * Список заявок
 *
 * Class Orders
 * @package Suretly\LenderApi\Model
 */
class Orders
{
    /**
     * @deprecated Do not use a public variable. Will be removed in version v0.4. Use getter/setters methods.
     * @var int $total Количество
     */
    public $total;

    /**
     * @deprecated Do not use a public variable. Will be removed in version v0.4. Use getter/setters methods.
     * @var Order[] $list Список заявок
     */
    public $list;

    /**
     * @return int
     */
    public function getTotal()
    {
        return $this->total;
    }

    /**
     * @param int $total
     */
    public function setTotal($total)
    {
        $this->total = $total;
    }

    /**
     * @return Order[]
     */
    public function getList()
    {
        return $this->list;
    }

    /**
     * @param Order[] $list
     */
    public function setList($list)
    {
        $this->list = $list;
    }
}