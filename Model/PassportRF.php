<?php

require_once "Address.php";

class PassportRF extends IdentityDocument
{
    /**
     * series
     * @var string
     */
    public $series;

    /**
     * number
     * @var string
     */
    public $number;

    /**
     * issue date
     * @var string
     */
    public $issue_date;

    /**
     * issue place
     * @var string
     */
    public $issue_place;

    /**
     * issue code
     * @var string
     */
    public $issue_code;

    /**
     * registration address
     * @var Address
     */
    public $registration;

}