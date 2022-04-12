<?php
use yii\helpers\Html;

?>
<p>You have entered the following information:</p>

<ul>
    <li><label>Name</label>: <?= Html::encode($model->name) ?></li>
    <li><label>Email</label>: <?= Html::encode($model->email) ?></li>
    <li><label>Password</label>: <?= Html::encode($model->password) ?></li>
    <li><label> Details </label>: <?= Html::encode($model->details) ?></li>
</ul>
