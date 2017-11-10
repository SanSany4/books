<?php

use yii\helpers\Html;
use yii\widgets\DetailView;

/* @var $this yii\web\View */
/* @var $model app\models\Genres */

$this->title = $model->name;
$this->params['breadcrumbs'][] = ['label' => 'Genres', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="genres-view">

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

    <p>
        Books in this genre:
        <ul>
            <?php foreach ($model->bookGenres as $book): ?>
                <li>
                    <?= Html::a($book->bookFk->title, ['books/view', 'id' => $book->bookFk->id]);?>
                </li>
            <?php endforeach; ?>
        </ul>
    </p>


</div>
