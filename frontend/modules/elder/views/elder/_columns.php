<?php
use yii\helpers\Url;
use common\models\Cchangwat;
use common\models\Campur;
use common\models\Ctambon;
use common\models\Chospital;

return [
    [
        'class' => 'kartik\grid\CheckboxColumn',
        'width' => '20px',
    ],
    [
        'class' => 'kartik\grid\SerialColumn',
        'width' => '30px',
    ],
    [
        'class'=>'\kartik\grid\DataColumn',
        'attribute'=>'hospcode',
        'label' => 'รหัสสถานพยาบาล',
        'value' => function($model) {
           return $model->chospital->hosname;
           }
    ],
    [
        'class'=>'\kartik\grid\DataColumn',
        'attribute'=>'cid',
    ],
    [
        'class'=>'\kartik\grid\DataColumn',
        'label' => 'ชื่อ-สกุล',
        'value' => function($model) {
           return $model->person->NAME." ".$model->person->LNAME;
           }
    ],   
    /*[
        'class'=>'\kartik\grid\DataColumn',
        'attribute'=>'latitude',
    ],
    [
        'class'=>'\kartik\grid\DataColumn',
        'attribute'=>'longitude',
    ],*/
    [
        'class'=>'\kartik\grid\DataColumn',
        'attribute'=>'catm',
    ],
    [
        'class'=>'\kartik\grid\DataColumn',
        'attribute'=>'house',
    ],
    // [
        // 'class'=>'\kartik\grid\DataColumn',
        // 'attribute'=>'hid',
    // ],
    // [
        // 'class'=>'\kartik\grid\DataColumn',
        // 'attribute'=>'patient',
    // ],
    [
        'class' => 'kartik\grid\ActionColumn',
        'dropdown' => false,
        'vAlign'=>'middle',
        'urlCreator' => function($action, $model, $key, $index) { 
                return Url::to([$action,'id'=>$key]);
        },
        'viewOptions'=>['role'=>'modal-remote','title'=>'View','data-toggle'=>'tooltip'],
        'updateOptions'=>['role'=>'modal-remote','title'=>'Update', 'data-toggle'=>'tooltip'],
        'deleteOptions'=>['role'=>'modal-remote','title'=>'Delete', 
                          'data-confirm'=>false, 'data-method'=>false,// for overide yii data api
                          'data-request-method'=>'post',
                          'data-toggle'=>'tooltip',
                          'data-confirm-title'=>'Are you sure?',
                          'data-confirm-message'=>'Are you sure want to delete this item'], 
    ],

];   