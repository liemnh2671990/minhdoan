<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model common\models\GioiThieu */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="gioi-thieu-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'mo_ta')->textarea(['rows' => 6]) ?>

    <?= $form->field($model, 'valid')->textInput() ?>

    <?= $form->field($model, 'ngay_tao')->textInput() ?>

    <div class="form-group">
        <?= Html::submitButton($model->isNewRecord ? Yii::t('app', 'Create') : Yii::t('app', 'Update'), ['class' => $model->isNewRecord ? 'btn btn-success' : 'btn btn-primary']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>