<?php

namespace frontend\modules\elder\models;

use Yii;


use common\models\Person;

use common\models\Cprovince;
use common\models\Campur;
use common\models\Ctambon;
use common\models\Chospital;


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
            'cid' => 'เลข ปชช',
            'latitude' => 'Latitude',
            'longitude' => 'Longitude',
            'house' => 'บ้านเลขที่',
            'catm' => 'รหัสพื้นที่',
            'house_id' => 'House_ID',
            'hospcode' => 'รหัสสถานพยาบาล',
            'hid' => 'เลขบ้าน',
            'patient' => 'ประเภทผู้ป่วย',
        ];
    }

    // relation Person
	public function getPerson(){
		return @$this->hasOne(Person::classname(),['CID'=>'cid']);
    }
    // relation Person
	public function getChospital(){
		return @$this->hasOne(Chospital::classname(),['hoscode'=>'hospcode']);
    }
}
