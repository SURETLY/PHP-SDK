<?php
/**
 * Created by PhpStorm.
 * User: ndolgopolov
 * Date: 28.09.17
 * Time: 9:56
 */
require_once "Borrower.php";
class Order
{
    /**
     * id
     * @var string
     */
    public $id;

    /**
     * lender inner id
     * @var string
     */
    public $uid;
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
     * borrower
     * @var Borrower
     */
    public $borrower;
    /**
     * user credit score
     * @var integer
     */
    public $user_credit_score;
    /**
     * cost
     * @var float
     */
    public $cost;
    /**
     * loan sum
     * @var float
     */
    public $loan_sum;
    /**
     * loan term
     * @var float
     */
    public $loan_term;
    /**
     * loan rate
     * @var float
     */
    public $loan_rate;
    /**
     * currency code
     * @var string
     */
    public $currency_code;
    /**
     * max wait time
     * @var integer
     */
    public $max_wait_time;
    /**
     * created at
     * @var integer
     */
    public $created_at;
    /**
     * modify at
     * @var integer
     */
    public $modify_at;
    /**
     * bids count
     * @var integer
     */
    public $bids_count;
    /**
     * bids sum
     * @var integer
     */
    public $bids_sum;
    /**
     * callback
     * @var string
     */
    public $callback;

}

