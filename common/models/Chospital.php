<?php

namespace common\models;

use Yii;

/**
 * This is the model class for table "chospital".
 *
 * @property string $hoscode
 * @property string $hosname
 * @property string $hostype
 * @property string $address
 * @property string $road
 * @property string $mu
 * @property string $subdistcode
 * @property string $distcode
 * @property string $provcode
 * @property string $postcode
 * @property string $hoscodenew
 * @property string $bed จำนวนเตียง
 * @property string $level_service ระดับการบริการ
 * @property string $bedhos
 * @property int $hdc_regist
 * @property string $dep
 * @property string $hmain_sent
 * @property string $register_date
 * @property string $mcode
 * @property string $lat
 * @property string $lon
 */
class Chospital extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'chospital';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['hoscode'], 'required'],
            [['hdc_regist'], 'integer'],
            [['register_date'], 'safe'],
            [['hoscode', 'postcode', 'bed', 'bedhos', 'dep', 'hmain_sent', 'mcode'], 'string', 'max' => 5],
            [['hosname', 'level_service'], 'string', 'max' => 255],
            [['hostype', 'mu', 'subdistcode', 'distcode', 'provcode'], 'string', 'max' => 2],
            [['address', 'road'], 'string', 'max' => 50],
            [['hoscodenew'], 'string', 'max' => 9],
            [['lat', 'lon'], 'string', 'max' => 45],
            [['hoscode'], 'unique'],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'hoscode' => 'Hoscode',
            'hosname' => 'Hosname',
            'hostype' => 'Hostype',
            'address' => 'Address',
            'road' => 'Road',
            'mu' => 'Mu',
            'subdistcode' => 'Subdistcode',
            'distcode' => 'Distcode',
            'provcode' => 'Provcode',
            'postcode' => 'Postcode',
            'hoscodenew' => 'Hoscodenew',
            'bed' => 'Bed',
            'level_service' => 'Level Service',
            'bedhos' => 'Bedhos',
            'hdc_regist' => 'Hdc Regist',
            'dep' => 'Dep',
            'hmain_sent' => 'Hmain Sent',
            'register_date' => 'Register Date',
            'mcode' => 'Mcode',
            'lat' => 'Lat',
            'lon' => 'Lon',
        ];
    }
}
