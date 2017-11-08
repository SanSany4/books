<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "book_genres".
 *
 * @property integer $id
 * @property integer $genre_fk
 * @property integer $book_fk
 *
 * @property Genres $genreFk
 * @property Books $bookFk
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
            [['genre_fk', 'book_fk'], 'required'],
            [['genre_fk', 'book_fk'], 'integer'],
            [['genre_fk'], 'exist', 'skipOnError' => true, 'targetClass' => Genres::className(), 'targetAttribute' => ['genre_fk' => 'id']],
            [['book_fk'], 'exist', 'skipOnError' => true, 'targetClass' => Books::className(), 'targetAttribute' => ['book_fk' => 'id']],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'genre_fk' => 'Genre Fk',
            'book_fk' => 'Book Fk',
        ];
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getGenreFk()
    {
        return $this->hasOne(Genres::className(), ['id' => 'genre_fk']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getBookFk()
    {
        return $this->hasOne(Books::className(), ['id' => 'book_fk']);
    }
}
