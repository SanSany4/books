<?php

use yii\helpers\Html;
use yii\widgets\LinkPager;
use yii\widgets\DetailView;

/* @var $this yii\web\View */
/* @var $model app\models\Authors */

$this->title = $model->name;
$this->params['breadcrumbs'][] = ['label' => 'Authors', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
//$books = $model->books;
?>
<div class="authors-view">

    <p>
        <?= Html::a('Update', ['update', 'id' => $model->viaf], ['class' => 'btn btn-primary']) ?>
        <?= Html::a('Delete', ['delete', 'id' => $model->viaf], [
            'class' => 'btn btn-danger',
            'data' => [
                'confirm' => 'Are you sure you want to delete this item?',
                'method' => 'post',
            ],
        ]) ?>
    </p>
    <h1><?= Html::encode($this->title) ?></h1>

    <?= Html::encode("VIAF: $model->viaf")?>
    <h2>Books by author:</h2>

    <ul>
        <?php foreach ($model->books as $book): ?>
            <li>
                <?= Html::a($book->name, ['books/view', 'id' => $book->isbn]);?>
            </li>
        <?php endforeach; ?>
    </ul>

</div>
