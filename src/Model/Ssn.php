<?php

namespace Suretly\LenderApi\Model;

/**
 * Ssn
 *
 * Class Ssn
 * @package Suretly\LenderApi\Model
 */
class Ssn extends IdentityDocument
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