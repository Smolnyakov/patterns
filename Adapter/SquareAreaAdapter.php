<?php

namespace Adapter;

use Adapter\interfaces\ISquare;
use Adapter\lib\SquareAreaLib;

class SquareAreaAdapter implements ISquare
{
    protected $squareAreaLib;

    public function __construct()
    {
        $this->squareAreaLib = new SquareAreaLib();
    }

    function squareArea(int $sideSquare)
    {
        $diagonal = round($sideSquare * sqrt(2),0);
        return $this->squareAreaLib->getSquareArea($diagonal);
    }
}