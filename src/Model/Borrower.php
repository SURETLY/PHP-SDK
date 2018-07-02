<?php

namespace Suretly\LenderApi\Model;

/**
 * Заемщик
 *
 * Class Borrower
 * @package Suretly\LenderApi\Model
 */
class Borrower implements \JsonSerializable
{
    /**
     * @var Name $name Экземпляр имени заемщика
     */
   public $name;

    /**
     * @var string $gender Пол
     */
   public $gender;

    /**
     * @var Birth $birth Экземпляр даты и места рождения
     */
   public $birth;

    /**
     * @var string $email Электроанная почта
     */
   public $email;

    /**
     * @var string $phone Телефон
     */
   public $phone;

    /**
     * @var string $city Город заемщика
     */
   public $city;

    /**
     * @var string $profile_url Ссылка на соц. сети
     */
   public $profile_url;

    /**
     * @var string $photo_url Ссылка на изображение заемщика
     */
   public $photo_url;

    /**
     * @var mixed $identity_document Документ удостоверяющий личность
     */
   public $identity_document;

    /**
     * @var string $identity_document_type Тип документа удостоверяющего личность
     */
   public $identity_document_type;

    /**
     * @var Address $residential
     */
   public $residential;

    /**
     * @inheritdoc
     */
    public function jsonSerialize()
    {
        return get_object_vars($this);
    }

    /**
     * @return Name
     */
    public function getName()
    {
        return $this->name;
    }

    /**
     * @param Name $name
     */
    public function setName($name)
    {
        $this->name = $name;
    }

    /**
     * @return string
     */
    public function getGender()
    {
        return $this->gender;
    }

    /**
     * @param string $gender
     */
    public function setGender($gender)
    {
        $this->gender = $gender;
    }

    /**
     * @return Birth
     */
    public function getBirth()
    {
        return $this->birth;
    }

    /**
     * @param Birth $birth
     */
    public function setBirth($birth)
    {
        $this->birth = $birth;
    }

    /**
     * @return string
     */
    public function getEmail()
    {
        return $this->email;
    }

    /**
     * @param string $email
     */
    public function setEmail($email)
    {
        $this->email = $email;
    }

    /**
     * @return string
     */
    public function getPhone()
    {
        return $this->phone;
    }

    /**
     * @param string $phone
     */
    public function setPhone($phone)
    {
        $this->phone = $phone;
    }

    /**
     * @return string
     */
    public function getCity()
    {
        return $this->city;
    }

    /**
     * @param string $city
     */
    public function setCity($city)
    {
        $this->city = $city;
    }

    /**
     * @return string
     */
    public function getProfileUrl()
    {
        return $this->profile_url;
    }

    /**
     * @param string $profile_url
     */
    public function setProfileUrl($profile_url)
    {
        $this->profile_url = $profile_url;
    }

    /**
     * @return string
     */
    public function getPhotoUrl()
    {
        return $this->photo_url;
    }

    /**
     * @param string $photo_url
     */
    public function setPhotoUrl($photo_url)
    {
        $this->photo_url = $photo_url;
    }

    /**
     * @return PassportRF
     */
    public function getIdentityDocument()
    {
        return $this->identity_document;
    }

    /**
     * @param PassportRF $identity_document
     */
    public function setIdentityDocument($identity_document)
    {
        $this->identity_document = $identity_document;
    }

    /**
     * @return string
     */
    public function getIdentityDocumentType()
    {
        return $this->identity_document_type;
    }

    /**
     * @param string $identity_document_type
     */
    public function setIdentityDocumentType($identity_document_type)
    {
        $this->identity_document_type = $identity_document_type;
    }

    /**
     * @return Address
     */
    public function getResidential()
    {
        return $this->residential;
    }

    /**
     * @param Address $residential
     */
    public function setResidential($residential)
    {
        $this->residential = $residential;
    }
}