<?php

    use yii\helpers\Html;
    use yii\bootstrap4\ActiveForm;

?>

<?php $form = ActiveForm::begin () ?>
<?= $form->field($model, 'username') ?>
<?= $form->field($model, 'password') ?>
<div class="form-group">
    <div class="offset-lg-1 col-lg-11">
        <?= \yii\bootstrap4\Html::submitButton('Регистрация', ['class' => 'btn btn-success']) ?>
    </div>
</div>
<?php $form = ActiveForm::end() () ?>

