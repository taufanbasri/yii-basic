<?php

use yii\bootstrap5\ActiveForm;
use yii\helpers\Html;

?>

<?php $form = ActiveForm::begin(); ?>
<?= $form->field($model, 'name') ?>
<?= $form->field($model, 'email') ?>

<div class="form-group">
  <?= Html::submitButton('Submit', ['class' => 'btn btn-primary']) ?>
</div>
<?php $form = ActiveForm::end(); ?>