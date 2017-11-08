<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "book_genres".
 *
 * @property integer $id
 * @property integer $genre
 * @property string $book
 *
 * @property Genres $genre0
 * @property Books $book0
 */
class BookGenres extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'book_genres';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['genre', 'book'], 'required'],
            [['genre'], 'integer'],
            [['book'], 'string', 'max' => 13],
            [['genre'], 'exist', 'skipOnError' => true, 'targetClass' => Genres::className(), 'targetAttribute' => ['genre' => 'id']],
            [['book'], 'exist', 'skipOnError' => true, 'targetClass' => Books::className(), 'targetAttribute' => ['book' => 'isbn']],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'genre' => 'Genre',
            'book' => 'Book',
        ];
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getGenre0()
    {
        return $this->hasOne(Genres::className(), ['id' => 'genre']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getBook0()
    {
        return $this->hasOne(Books::className(), ['isbn' => 'book']);
    }
}
