<?php

namespace Traum\Entity;

use Traum\Entity;

/**
 * Class Address
 * @package Traum\Entity
 * @author Wojtek Gancarczyk <wojtek@aferalabs.com>
 */
final class Contact extends Entity
{
    const ID = 'id';
    const SALUTATION_ID = 'salutation_id';
    const OPERATOR_ID = 'operator_id';
    const FIRST_NAME = 'first_name';
    const LAST_NAME = 'last_name';
    const COMPANY = 'company';
    const PHONE = 'phone';
    const ALTERNATIVE_PHONE = 'alternative_phone';
    const MOBILE = 'mobile';
    const FAX = 'fax';
    const EMAIL = 'email';
    const WEBSITE = 'website';
    const SMS = 'sms';
    const SMS_SERVICE = 'sms_service';

    /**
     * @return int
     */
    public function getId()
    {
        return $this->getData(self::ID);
    }

    /**
     * @param int $id
     * @return void
     */
    public function setId($id)
    {
        $this->setData(self::ID, $id);
    }

    /**
     * @return int
     */
    public function getSalutationId()
    {
        return $this->getData(self::SALUTATION_ID);
    }

    /**
     * @param int $salutationId
     * @return void
     */
    public function setSalutationId($salutationId)
    {
        $this->setData(self::SALUTATION_ID, $salutationId);
    }

    /**
     * @return int
     */
    public function getOperatorId()
    {
        return $this->getData(self::OPERATOR_ID);
    }

    /**
     * @param int $operatorId
     * @return void
     */
    public function setOperatorId($operatorId)
    {
        $this->setData(self::OPERATOR_ID, $operatorId);
    }

    /**
     * @return string
     */
    public function getFirstName()
    {
        return $this->getData(self::FIRST_NAME);
    }

    /**
     * @param string $firstName
     * @return void
     */
    public function setFirstName($firstName)
    {
        $this->setData(self::FIRST_NAME, $firstName);
    }

    /**
     * @return string
     */
    public function getLastName()
    {
        return $this->getData(self::LAST_NAME);
    }

    /**
     * @param string $lastName
     * @return void
     */
    public function setLastName($lastName)
    {
        $this->setData(self::LAST_NAME, $lastName);
    }

    /**
     * @return string
     */
    public function getCompany()
    {
        return $this->getData(self::COMPANY);
    }

    /**
     * @param string $company
     * @return void
     */
    public function setCompany($company)
    {
        $this->setData(self::COMPANY, $company);
    }

    /**
     * @return string
     */
    public function getPhone()
    {
        return $this->getData(self::PHONE);
    }

    /**
     * @param string $phone
     * @return void
     */
    public function setPhone($phone)
    {
        $this->setData(self::PHONE, $phone);
    }

    /**
     * @return string
     */
    public function getAlternativePhone()
    {
        return $this->getData(self::ALTERNATIVE_PHONE);
    }

    /**
     * @param string $alternativePhone
     * @return void
     */
    public function setAlternativePhone($alternativePhone)
    {
        $this->setData(self::ALTERNATIVE_PHONE, $alternativePhone);
    }

    /**
     * @return string
     */
    public function getMobile()
    {
        return $this->getData(self::MOBILE);
    }

    /**
     * @param string $mobile
     * @return void
     */
    public function setMobile($mobile)
    {
        $this->setData(self::MOBILE, $mobile);
    }

    /**
     * @return string
     */
    public function getFax()
    {
        return $this->getData(self::FAX);
    }

    /**
     * @param string $fax
     * @return void
     */
    public function setFax($fax)
    {
        $this->setData(self::FAX, $fax);
    }

    /**
     * @return string
     */
    public function getEmail()
    {
        return $this->getData(self::EMAIL);
    }

    /**
     * @param string $email
     * @return void
     */
    public function setEmail($email)
    {
        $this->setData(self::EMAIL, $email);
    }

    /**
     * @return string
     */
    public function getWebsite()
    {
        return $this->getData(self::WEBSITE);
    }

    /**
     * @param string $website
     * @return void
     */
    public function setWebsite($website)
    {
        $this->setData(self::WEBSITE, $website);
    }

    /**
     * @return string
     */
    public function getSms()
    {
        return $this->getData(self::SMS);
    }

    /**
     * @param string $sms
     * @return void
     */
    public function setSms($sms)
    {
        $this->setData(self::SMS, $sms);
    }

    /**
     * @return bool
     */
    public function hasSmsService()
    {
        return $this->getData(self::SMS_SERVICE);
    }

    /**
     * @param bool $smsService
     * @return void
     */
    public function setSmsService($smsService)
    {
        $this->setData(self::SMS_SERVICE, $smsService);
    }
}
