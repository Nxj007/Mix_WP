<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;


?>
<?php $form = ActiveForm::begin(); ?>


<?= $form->field($model, 'name')->label('Your Name') ?>
<?= $form->field($model, 'email')->label('Your Email') ?>
<?= $form->field($model, 'password')->label('Your Password') ?>
<?= $form->field($model, 'details')->label('Your Details') ?>


<div class="form-group">
    <?= Html::submitButton('Submit', ['class' => 'btn btn-primary']) ?>
    <!--  use app\components\HelloWidget;
    HelloWidget::widget(['message' => 'Good morning']) -->
</div>

<?php ActiveForm::end(); ?>