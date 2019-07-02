<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model app\models\Sandwich */

$this->title = 'Update Sandwich: ' . $model->name;
$this->params['breadcrumbs'][] = ['label' => 'Sandwiches', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->name, 'url' => ['view', 'id' => $model->idsandwich]];
$this->params['breadcrumbs'][] = 'Update';
?>
<div class="sandwich-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
