<?php

use yii\widgets\DetailView;

/* @var $this yii\web\View */
/* @var $model frontend\modules\elder\models\Elder */
?>
<div class="elder-view">
 
    <?= DetailView::widget([
        'model' => $model,
        'attributes' => [
            'cid',
            [
                'label' => 'ชื่อ-สกุล',
                'value' => $model->person->NAME." ".$model->person->LNAME, // function relation , field relation
            ],
            'latitude',
            'longitude',
            'house',
            'catm',
            'house_id',
            'hospcode',
            'hid',
            'patient',
        ],
    ]) ?>

</div>
