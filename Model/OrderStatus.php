<?php
/**
 * Created by PhpStorm.
 * User: ndolgopolov
 * Date: 29.09.17
 * Time: 16:28
 */

class OrderStatus
{
    /**
     * id
     * @var string
     */
    public $id;
    /**
     * status
     * @var integer
     */
    public $status;
    /**
     * payment status
     * @var integer
     */
    public $payment_status;
    /**
     * is public
     * @var string
     */
    public $public;
    /**
     * sum
     * @var integer
     */
    public $sum;
    /**
     * cost
     * @var float
     */
    public $cost;
    /**
     * bids count
     * @var integer
     */
    public $bids_count;
    /**
     * bids sum
     * @var float
     */
    public $bids_sum;
    /**
     * stop time
     * @var integer
     */
    public $stop_time;

}