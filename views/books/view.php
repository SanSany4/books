<?php

use yii\helpers\Html;
use yii\widgets\DetailView;

/* @var $this yii\web\View */
/* @var $model app\models\Books */

$this->title = $model->name;
$this->params['breadcrumbs'][] = ['label' => 'Books', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
$author = $model->author0;
?>
<div class="books-view">

    <p>
        <?= Html::a('Update', ['update', 'id' => $model->isbn], ['class' => 'btn btn-primary']) ?>
        <?= Html::a('Delete', ['delete', 'id' => $model->isbn], [
            'class' => 'btn btn-danger',
            'data' => [
                'confirm' => 'Are you sure you want to delete this item?',
                'method' => 'post',
            ],
        ]) ?>
    </p>
    <h1><?= Html::encode($this->title) ?></h1>
    <h2>By: <?= Html::a($author->name, ['authors/view', 'id' => $author->viaf])?></h2>
    <?= Html::encode("ISBN: $model->isbn")?>
    <p>
        Genres:
        <ul>
            <?php foreach ($model->bookGenres as $genre): ?>
                <li>
                    <?= Html::a($genre->genre0->name, ['genres/view', 'id' => $genre->genre0->id]);?>
                </li>
            <?php endforeach; ?>
        </ul>
    </p>

</div>
