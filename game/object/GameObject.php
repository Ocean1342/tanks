<?php
namespace app\game\object;

use app\game\moving\Movable;
use app\game\object\iObject;

class GameObject implements Movable
{
    public $x;
    public $y;
    public function setPosition()
    {
        $this->x = 0;
        $this->y = 0;
    }

    public function getPosition()
    {
        return '';
    }
}