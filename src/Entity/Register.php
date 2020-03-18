<?php

namespace Traum\Entity;

use Traum\Entity;

/**
 * Class Register
 *
 * @package Traum\Entity
 * @author  Wojtek Gancarczyk <wojtek@aferalabs.com>
 */
final class Register extends Entity
{
    const ID = 'id';
    const FIRST_NAME = 'first_name';
    const LAST_NAME = 'last_name';
    const COMPANY = 'company';
    const EMAIL = 'email';
    const SALUTATION_ID = 'salutation_id';
    const PASSWORD = 'password';

    /**
     * @return int
     */
    public function getId()
    {
        return $this->getData(self::ID);
    }

    /**
     * @param  int $id
     * @return void
     */
    public function setId($id)
    {
        $this->setData(self::ID, $id);
    }

    /**
     * @return string
     */
    public function getFirstName()
    {
        return $this->getData(self::FIRST_NAME);
    }

    /**
     * @param  string $firstName
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
     * @param  string $lastName
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
     * @param  string $company
     * @return void
     */
    public function setCompany($company)
    {
        $this->setData(self::COMPANY, $company);
    }

    /**
     * @return string
     */
    public function getEmail()
    {
        return $this->getData(self::EMAIL);
    }

    /**
     * @param  string $email
     * @return void
     */
    public function setEmail($email)
    {
        $this->setData(self::EMAIL, $email);
    }

    /**
     * @return int
     */
    public function getSalutationId()
    {
        return $this->getData(self::SALUTATION_ID);
    }

    /**
     * @param  int $salutationId
     * @return void
     */
    public function setSalutationId($salutationId)
    {
        $this->setData(self::SALUTATION_ID, $salutationId);
    }

    /**
     * @return string
     */
    public function getPassword()
    {
        return $this->getData(self::PASSWORD);
    }

    /**
     * @param  string $password
     * @return void
     */
    public function setPassword($password)
    {
        $this->setData(self::PASSWORD, $password);
    }
}
