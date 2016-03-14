<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model app\models\Produto */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="produto-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'descricao')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'valor')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'marca_id')->dropDownList(yii\helpers\ArrayHelper::map(app\models\Marca::find()->all(), 'id', 'descricao')) ?>
      
    <?= $form->field($model, 'modelo_id')->dropDownList(yii\helpers\ArrayHelper::map(app\models\Modelo::find()->all(), 'id', 'descricao')) ?>

    <?= $form->field($model, 'quantidade')->textInput(['maxlength' => true]) ?>
    
    <div class="form-group">
        <?= Html::submitButton($model->isNewRecord ? 'Salvar' : 'Atualizar', ['class' => $model->isNewRecord ? 'btn btn-success' : 'btn btn-primary']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
