<?php
/**
 * Created by PhpStorm.
 * User: alexa
 * Date: 09/09/2018
 * Time: 13:39
 */

class Data
{
    protected $Id;

    /**
     * Data constructor.
     * @param $Id
     */
    public function __construct($Id)
    {
        $this->Id = $Id;
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