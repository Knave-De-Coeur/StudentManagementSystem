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
    public $ShortDescription;
    public $FullDescription;
    public $Lecturer;

    /**
     * ClassModel constructor.
     * @param $Room
     * @param $Faculty
     * @param $ShortDescription
     * @param $FullDescription
     * @param $Lecturer
     */
    public function __construct($Id, $Room, $Faculty, $ShortDescription, $FullDescription, $Lecturer)
    {
        $this->Room = $Room;
        $this->Faculty = $Faculty;
        $this->ShortDescription = $ShortDescription;
        $this->FullDescription = $FullDescription;
        $this->Lecturer = $Lecturer;
        parent::__construct($Id);

    }


    /**
     * @return mixed
     */
    public function getShortDescription()
    {
        return $this->ShortDescription;
    }

    /**
     * @param mixed $ShortDescription
     */
    public function setShortDescription($ShortDescription): void
    {
        $this->ShortDescription = $ShortDescription;
    }

    /**
     * @return mixed
     */
    public function getFullDescription()
    {
        return $this->FullDescription;
    }

    /**
     * @param mixed $FullDescription
     */
    public function setFullDescription($FullDescription): void
    {
        $this->FullDescription = $FullDescription;
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