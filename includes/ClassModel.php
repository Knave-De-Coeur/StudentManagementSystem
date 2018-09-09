<?php
/**
 * Created by PhpStorm.
 * User: alexa
 * Date: 09/09/2018
 * Time: 13:38
 */

class ClassModel extends Data
{
    public $Room;
    public $Faculty;
    public $Description;
    public $Lecturer;

    /**
     * ClassModel constructor.
     * @param $Room
     * @param $Faculty
     * @param $Description
     * @param $Lecturer
     */
    public function __construct($Id, $Room, $Faculty, $Description, $Lecturer)
    {
        $this->Room = $Room;
        $this->Faculty = $Faculty;
        $this->Description = $Description;
        $this->Lecturer = $Lecturer;
        parent::__construct($Id);
    }


    /**
     * @return mixed
     */
    public function getRoom()
    {
        return $this->Room;
    }

    /**
     * @param mixed $Room
     */
    public function setRoom($Room): void
    {
        $this->Room = $Room;
    }

    /**
     * @return mixed
     */
    public function getFaculty()
    {
        return $this->Faculty;
    }

    /**
     * @param mixed $Faculty
     */
    public function setFaculty($Faculty): void
    {
        $this->Faculty = $Faculty;
    }

    /**
     * @return mixed
     */
    public function getDescription()
    {
        return $this->Description;
    }

    /**
     * @param mixed $Description
     */
    public function setDescription($Description): void
    {
        $this->Description = $Description;
    }

    /**
     * @return mixed
     */
    public function getLecturer()
    {
        return $this->Lecturer;
    }

    /**
     * @param mixed $Lecturer
     */
    public function setLecturer($Lecturer): void
    {
        $this->Lecturer = $Lecturer;
    }


}