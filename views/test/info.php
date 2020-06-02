<?php
    use yii\bootstrap\Html;
?>
<html>
    <body>
        <p>Your name: <?= Html::encode($model->name) ?> </p>
        <p>Your name: <?= Html::encode($model->email) ?> </p>
    </body>
</html>