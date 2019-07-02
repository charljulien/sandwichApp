<?php

use yii\helpers\Html;
use yii\grid\GridView;

/* @var $this yii\web\View */
/* @var $searchModel app\models\SandwichSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Sandwiches';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="sandwich-index">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a('Create Sandwich', ['create'], ['class' => 'btn btn-success']) ?>
    </p>

    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

            'idsandwich',
            'name',
            'description',
            'price',
            'check',

            ['class' => 'yii\grid\ActionColumn'],
        ],
    ]); ?>


</div>
