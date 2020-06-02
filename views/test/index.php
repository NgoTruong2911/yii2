<?php

use yii\widgets\ActiveForm;
use yii\helpers\Html;
use yii\helpers\VarDumper;
?>
<!--
    VarDumper::dump($name);
    Html::encode($name); 
-->

<html>

<body>
    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'name')->label('Enter your name') ?>

    <?= $form->field($model, 'email')->label('Enter your email') ?>

    <div class="form-group">
        <?= Html::submitButton('Submit', ['class' => 'btn btn-primary']) ?>
    </div>

    <?php ActiveForm::end(); ?>
</body>

</html>