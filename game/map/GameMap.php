<?php
namespace app\game\map;

Class GameMap
{
    protected $colls = 12;
    protected $rows = 12;

    public function printMap()
    {
        $argList = func_get_args();
        $colls = $this->colls;
        $rows = $this->rows;
        $html = '';
        for ($y = $colls; $y >= 0; $y--) {
            for ($x = 0; $x < $rows; $x++) {
                $objHtml = '';
                foreach ($argList as $obj) {
                    //занято ли поле объектом
                    if ($x == $obj->x  && $y == $obj->y) {
                        $objHtml = '<div class="tank" data-name="$obj->name"></div>';
//                        break;
                    }
                }
                $html .= '<div class="col-xs-1 field" data-x="'.$x.'" data-y="'.$y.'">'.$objHtml.'</div>';

            }
        }
        return $html;
    }


}