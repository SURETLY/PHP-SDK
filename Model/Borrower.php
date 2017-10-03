<?php
/**
 * Created by PhpStorm.
 * User: ndolgopolov
 * Date: 27.09.17
 * Time: 17:26
 */
require_once "Name.php";
require_once "Birth.php";
require_once "Passport.php";
require_once "Address.php";
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
     * Passport
     * @var Passport
     */
    public $passport;

    /**
     * registration
     * @var Address
     */
    public $registration;

    /**
     * residential
     * @var Address
     */
    public $residential;

}

