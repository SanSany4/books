<?php

use yii\helpers\Html;
use yii\widgets\DetailView;

/* @var $this yii\web\View */
/* @var $model app\models\Books */

$this->title = $model->title;
$this->params['breadcrumbs'][] = ['label' => 'Books', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
$author = $model->authorId;
?>
<div class="books-view">

    <p>
        <?= Html::a('Update', ['update', 'id' => $model->id], ['class' => 'btn btn-primary']) ?>
        <?= Html::a('Delete', ['delete', 'id' => $model->id], [
            'class' => 'btn btn-danger',
            'data' => [
                'confirm' => 'Are you sure you want to delete this item?',
                'method' => 'post',
            ],
        ]) ?>
    </p>
    <h1><?= Html::encode($this->title) ?></h1>
    <h2>By: <?= Html::a($author->name, ['authors/view', 'id' => $author->id])?></h2>
    <?= Html::encode("ISBN: $model->isbn")?>
    <p>
        Genres:
        <ul>
            <?php foreach ($model->bookGenres as $genre): ?>
                <li>
                    <?= Html::a($genre->genreFk->name, ['genres/view', 'id' => $genre->genreFk->id]);?>
                </li>
            <?php endforeach; ?>
        </ul>
    </p>

</div>
