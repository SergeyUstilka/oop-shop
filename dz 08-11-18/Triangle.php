<?php
/**
 * Created by PhpStorm.
 * User: NoteBook
 * Date: 07.11.2018
 * Time: 11:48
 */

class Triangle extends Figure
{
    public $sideA;
    public $sideB;
    public $corner;


    public function __construct($name = null, $sideA = null, $sideB = null, $corner = 90)
    {
        parent::__construct($name);
        $this->sideA = $sideA;
        $this->sideB = $sideB;
        $this->corner = $corner;
    }

    public function getSquare()
    {
        return $this->square = $this->sideA*$this->sideB*sin(deg2rad($this->corner))*0.5;
    }
}