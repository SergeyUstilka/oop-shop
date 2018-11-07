<?php
/**
 * Created by PhpStorm.
 * User: NoteBook
 * Date: 07.11.2018
 * Time: 11:28
 */

class Figure
{
    public  $name;
    public $sideLength;
    public $square;
    public $dataToResultTxt;
    public static $pi = 3.14;

    public  function  __construct($name = null, $side = null)
    {
        $this->name = $name;
        $this->sideLength = $side;
    }

    public function getSquare()
    {
        return $this->square = $this->sideLength*$this->sideLength;
    }
    public function setNoteToResultTxt()
    {
        $fp = fopen('result.csv', "a+");
        $this->dataToResultTxt = ['Площадь фигуры '.$this->name.' = '.$this->square];
        fputcsv($fp, $this->dataToResultTxt,';');
        fclose($fp);
    }
}
