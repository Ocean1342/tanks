<?php
namespace app\game\object;

use app\game\moving\iMovable;
use app\game\object\iObject;
use phpDocumentor\Reflection\Types\Integer;

class GameObject implements iMovable,iObject
{
    public $x;
    public $y;
    public function __construct(int $x,int $y,string $color='#000',$name = 'PC')
    {
        $this->setPosition($x, $y);
        $this->setName($name);
        $this->setColor($color);
    }

    public function setPosition(int $x, int $y)
    {
        $this->x = $x;
        $this->y = $y;
    }

    public function getPosition()
    {
        return '';
    }

    public function getName()
    {
        return $this->name;
    }
    public function setName(string $name) {
        $this->name = $name;
    }
    public function setColor(string $color) {
        $this->color = $color;
    }
    public function getColor() {
        return $this->color;
    }
}