<?php


namespace app\game\moving;


use phpDocumentor\Reflection\Types\Integer;

interface iMovable
{
    public function setPosition(int $x,int $y);
    public function getPosition();
}
