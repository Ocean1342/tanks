<?php
namespace app\game\map;

Class Map
{
    protected $colls = 3;
    protected $rows = 3;

    public function printMap($objects)
    {
        $colls = $this->colls;
        $rows = $this->rows;
        $html = '';
        for ($i = 0; $i <= $colls; $i++) {
            for ($j = 0; $j <= $rows; $j++) {
                    echo 'method print map';
/*                foreach ($objects as $obj) {
                    //занято ли поле объектом
                    if ($obj->x == $colls[$i] && $obj->y == $rows[$j] ) {

                    }
                }*/

            }
        }
    }


}