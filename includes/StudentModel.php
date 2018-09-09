<?php
/**
 * Created by PhpStorm.
 * User: alexa
 * Date: 09/09/2018
 * Time: 13:17
 */
include "Data.php";

class StudentModel extends Data
{
    public $Name;
    public $Surname;
    public $DateOfBirth;
    public $IdNumber;
    public $Level;

    /**
     * StudentModel constructor.
     * @param $Name
     * @param $Surname
     * @param $DateOfBirth
     * @param $IdNumber
     * @param $Level
     */
    public function __construct($Id, $Name, $Surname, $DateOfBirth, $IdNumber, $Level)
    {
        $this->Name = $Name;
        $this->Surname = $Surname;
        $this->DateOfBirth = $DateOfBirth;
        $this->IdNumber = $IdNumber;
        $this->Level = $Level;
        parent::__construct($Id);

    }


    /**
     * @return mixed
     */
    public function getDateOfBirth()
    {
        return $this->DateOfBirth;
    }

    /**
     * @param mixed $DateOfBirth
     */
    public function setDateOfBirth($DateOfBirth): void
    {
        $this->DateOfBirth = $DateOfBirth;
    }

    /**
     * @return mixed
     */
    public function getIdNumber()
    {
        return $this->IdNumber;
    }

    /**
     * @param mixed $IdNumber
     */
    public function setIdNumber($IdNumber): void
    {
        $this->IdNumber = $IdNumber;
    }

    /**
     * @return mixed
     */
    public function getLevel()
    {
        return $this->Level;
    }

    /**
     * @param mixed $Level
     */
    public function setLevel($Level): void
    {
        $this->Level = $Level;
    }

    /**
     * @return mixed
     */
    public function getName()
    {
        return $this->Name;
    }

    /**
     * @param mixed $Name
     */
    public function setName($Name): void
    {
        $this->Name = $Name;
    }

    /**
     * @return mixed
     */
    public function getSurname()
    {
        return $this->Surname;
    }

    /**
     * @param mixed $Surname
     */
    public function setSurname($Surname): void
    {
        $this->Surname = $Surname;
    }

    /**
     * @return mixed
     */
    public function getId()
    {
        return $this->Id;
    }

    /**
     * @param mixed $Id
     */
    public function setId($Id): void
    {
        $this->Id = $Id;
    }

    }