<?php

require_once "Name.php";
require_once "Birth.php";
require_once "Address.php";
require_once "IdentityDocument.php";
require_once "PassportRF.php";
require_once "IdKZ.php";
require_once "Ssn.php";

class Borrower
{
    /**
     * name
     * @var Name
     */
    public $name;
    /**
     * gender
     * @var string
     */
    public $gender;
    /**
     * birth
     * @var Birth
     */
    public $birth;
    /**
     * email
     * @var string
     */
    public $email;
    /**
     * phone
     * @var string
     */
    public $phone;
    /**
     * ip
     * @var string
     */
    public $ip;
    /**
     * profile url
     * @var string
     */
    public $profile_url;
    /**
     * photo url
     * @var string
     */
    public $photo_url;

    /**
     * Identity document
     * @var PassportRF
     */
    public $identity_document;

    /**
     * Identity document type
     * @var string
     */
    public $identity_document_type;

    /**
     * residential
     * @var Address
     */
    public $residential;

}

