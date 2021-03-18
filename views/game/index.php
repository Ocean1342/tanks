<?php

use \yii\helpers\Html;

?>
<div class="container">
<?=Html::a('Начать игру', ['game/play','state'=>'start'],['class' => 'btn btn-info col-xs-3']);?>


<?=Html::a('Продолжить игру', ['game/continue'],['class' => 'btn btn-default col-xs-3']);?>
</div>