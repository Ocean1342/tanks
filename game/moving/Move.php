<?php


namespace app\game\moving;


class Move implements Movable
{
    public function setPosition(array $position = [0,0])
    {
        return [1,5];
    }

    public function getPosition()
    {

    }

}