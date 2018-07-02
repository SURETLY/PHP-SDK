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
     * @deprecated Do not use a public variable. Will be removed in version v0.4. Use getter/setters methods.
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