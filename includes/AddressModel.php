<?php
/**
 * Created by PhpStorm.
 * User: alexa
 * Date: 09/09/2018
 * Time: 22:46
 */

class AddressModel extends Data
{
    public $StudentId;
    public $Address1;
    public $Address2;
    public $City;
    public $State;
    public $ZipPostalCode;
    public $DisplayOrder;

    /**
     * AddressModel constructor.
     * @param $StudentId
     * @param $Address1
     * @param $Address2
     * @param $City
     * @param $State
     * @param $ZipPostalCode
     * @param $DisplayOrder
     */
    public function __construct($Id, $StudentId, $Address1, $Address2, $City, $State, $ZipPostalCode, $DisplayOrder)
    {
        $this->StudentId = $StudentId;
        $this->Address1 = $Address1;
        $this->Address2 = $Address2;
        $this->City = $City;
        $this->State = $State;
        $this->ZipPostalCode = $ZipPostalCode;
        $this->DisplayOrder = $DisplayOrder;
        parent::setId($Id);
    }


    /**
     * @return mixed
     */
    public function getStudentId()
    {
        return $this->StudentId;
    }

    /**
     * @param mixed $StudentId
     */
    public function setStudentId($StudentId): void
    {
        $this->StudentId = $StudentId;
    }

    /**
     * @return mixed
     */
    public function getAddress1()
    {
        return $this->Address1;
    }

    /**
     * @param mixed $Address1
     */
    public function setAddress1($Address1): void
    {
        $this->Address1 = $Address1;
    }

    /**
     * @return mixed
     */
    public function getAddress2()
    {
        return $this->Address2;
    }

    /**
     * @param mixed $Address2
     */
    public function setAddress2($Address2): void
    {
        $this->Address2 = $Address2;
    }

    /**
     * @return mixed
     */
    public function getCity()
    {
        return $this->City;
    }

    /**
     * @param mixed $City
     */
    public function setCity($City): void
    {
        $this->City = $City;
    }

    /**
     * @return mixed
     */
    public function getState()
    {
        return $this->State;
    }

    /**
     * @param mixed $State
     */
    public function setState($State): void
    {
        $this->State = $State;
    }

    /**
     * @return mixed
     */
    public function getZipPostalCode()
    {
        return $this->ZipPostalCode;
    }

    /**
     * @param mixed $ZipPostalCode
     */
    public function setZipPostalCode($ZipPostalCode): void
    {
        $this->ZipPostalCode = $ZipPostalCode;
    }

    /**
     * @return mixed
     */
    public function getDisplayOrder()
    {
        return $this->DisplayOrder;
    }

    /**
     * @param mixed $DisplayOrder
     */
    public function setDisplayOrder($DisplayOrder): void
    {
        $this->DisplayOrder = $DisplayOrder;
    }


}