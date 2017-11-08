<?php

use yii\helpers\Html;


/* @var $this yii\web\View */
/* @var $model app\models\Genres */

$this->title = 'Create Genres';
$this->params['breadcrumbs'][] = ['label' => 'Genres', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="genres-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
