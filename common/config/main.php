<?php
return [
    'aliases' => [
        '@bower' => '@vendor/bower-asset',
        '@npm'   => '@vendor/npm-asset',
    ],
    'vendorPath' => dirname(dirname(__DIR__)) . '/vendor',
    'components' => [
        'cache' => [
            'class' => 'yii\caching\FileCache',
        ],

        'urlManagerFrontEnd' => [                    // link backend to frontend
            'class' => 'yii\web\urlManager',
            //'baseUrl' => '../../frontend/web',            
            //'baseUrl' => '../../frontend/web/index.php?r=',
            
            'baseUrl' => '../../frontend/web/',
            'scriptUrl'=>'../../frontend/web/index.php',
            'enablePrettyUrl' => true,
            'showScriptName' => false,
        ],
        'urlManagerBackEnd' => [                    // link backend to frontend
            'class' => 'yii\web\urlManager',
            //'baseUrl' => '../../backend/web',
            
            'baseUrl' => '../../backend/web/',
            'scriptUrl'=>'../../backend/web/index.php',
            
            'enablePrettyUrl' => true,
            'showScriptName' => false,
        ],
    ],

    //---
    'modules' => [
        'gridview' => [
               'class' => '\kartik\grid\Module'
        ],
        'elder' => [
            'class' => 'frontend\modules\elder\Elder',
        ],
    ]
       //...
];
