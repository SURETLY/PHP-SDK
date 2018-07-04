<?php

namespace Suretly\LenderApi\Model;

/**
 * IdUs
 *
 * Class IdUs
 * @package Suretly\LenderApi\Model
 */
class IdUs extends IdentityDocument
{
    /**
     * @var string $ssn Номер
     */
    public $ssn;

    /**
     * @return string
     */
    public function getSsn()
    {
        return $this->ssn;
    }

    /**
     * @param string $ssn
     */
    public function setSsn($ssn)
    {
        $this->ssn = $ssn;
    }
}