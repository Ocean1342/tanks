<?php


namespace app\game\object;


interface iObject
{
    public function getName();
    public function setName(string $name);
    public function setColor(string $color);
    public function getColor();

}