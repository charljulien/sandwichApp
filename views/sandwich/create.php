<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model app\models\Sandwich */

$this->title = 'Create Sandwich';
$this->params['breadcrumbs'][] = ['label' => 'Sandwiches', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="sandwich-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
