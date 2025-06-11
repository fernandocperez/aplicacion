<?php

use yii\helpers\Html;

/** @var yii\web\View $this */
/** @var app\models\Ordenadores $model */

$this->title = 'Nuevo Ordenador';
$this->params['breadcrumbs'][] = ['label' => 'Ordenadores', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="ordenadores-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
