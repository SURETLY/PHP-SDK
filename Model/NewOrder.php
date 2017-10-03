<?php
/**
 * Created by PhpStorm.
 * User: ndolgopolov
 * Date: 02.10.17
 * Time: 10:42
 */

class NewOrder
{

    /**
     * lender inner id
     * @var string
     */
    public $uid;
    /**
     * is public
     * @var bool
     */
    public $is_public;
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
     * callback
     * @var string
     */
    public $callback;
}

