<?php

namespace frontend\modules\elder\models;

use Yii;

/**
 * This is the model class for table "elder".
 *
 * @property string $cid
 * @property string $latitude
 * @property string $longitude
 * @property string $house
 * @property string $catm
 * @property string $house_id
 * @property string $hospcode
 * @property string $hid
 * @property string $patient
 */
class Elder extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'elder';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['cid'], 'required'],
            [['latitude', 'longitude'], 'number'],
            [['cid'], 'string', 'max' => 13],
            [['house'], 'string', 'max' => 75],
            [['catm'], 'string', 'max' => 8],
            [['house_id'], 'string', 'max' => 11],
            [['hospcode', 'patient'], 'string', 'max' => 5],
            [['hid'], 'string', 'max' => 14],
            [['cid'], 'unique'],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'cid' => 'Cid',
            'latitude' => 'Latitude',
            'longitude' => 'Longitude',
            'house' => 'House',
            'catm' => 'Catm',
            'house_id' => 'House ID',
            'hospcode' => 'Hospcode',
            'hid' => 'Hid',
            'patient' => 'Patient',
        ];
    }
}
