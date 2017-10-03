<?php

require_once "Order.php";
class Orders
{
    /**
     * total
     * @var integer
     */
    public $total;

    /**
     * @var Order[]
     */
    public $list;


    /**
     * @return Order[]
     */
    public function getList()
    {
        return $this->list;
    }

}