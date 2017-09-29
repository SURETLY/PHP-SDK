<?php
/**
 * Created by PhpStorm.
 * User: ndolgopolov
 * Date: 28.09.17
 * Time: 13:05
 */
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