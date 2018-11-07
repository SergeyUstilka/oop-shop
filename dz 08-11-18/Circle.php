<?php
/**
 * Created by PhpStorm.
 * User: NoteBook
 * Date: 07.11.2018
 * Time: 11:42
 */

class Circle extends Figure
{
    public $radius;

    public function __construct($name = null, $radius = null)
    {
        parent::__construct($name);
        $this->radius = $radius;
    }

    public function getSquare()
    {
        return $this->square = $this->radius*$this->radius*Figure::$pi;
    }
}