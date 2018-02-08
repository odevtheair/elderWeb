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
