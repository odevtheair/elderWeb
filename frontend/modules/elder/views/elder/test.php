<?php
use yii\helpers\Url;
use yii\helpers\Html;
use yii\bootstrap\Modal;
use kartik\grid\GridView;
use johnitvn\ajaxcrud\CrudAsset; 
use johnitvn\ajaxcrud\BulkButtonWidget;

use yii\helpers\ArrayHelper;
use yii\bootstrap\ActiveForm;
use kartik\widgets\Select2;
use kartik\widgets\DepDrop;

use common\models\Cchangwat;
use common\models\Campur;
use common\models\Ctambon;
use common\models\Chospital;

/* @var $this yii\web\View */
/* @var $searchModel frontend\modules\elder\models\ElderSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Elders';
$this->params['breadcrumbs'][] = $this->title;

?>
<div class="elder-index">

<?php $form = ActiveForm::begin(['options' => ['enctype' => 'multipart/form-data']]); ?>

       <?= $form->field($model, 'province')->dropdownList(
            ArrayHelper::map(Cchangwat::find()->all(),
            'changwatcode',
            'changwatname'),
            [
                'id'=>'ddl-province',
                'prompt'=>'เลือกจังหวัด'
       ]); ?>
       


<?= Html::submitButton($model->isNewRecord ? 'Create' : 'Update', ['class' => ($model->isNewRecord ? 'btn btn-success' : 'btn btn-primary').' btn-lg btn-block']) ?>


    <?php ActiveForm::end(); ?>


</div>

