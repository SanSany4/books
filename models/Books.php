<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "books".
 *
 * @property string $isbn
 * @property string $author
 * @property string $name
 *
 * @property BookGenres[] $bookGenres
 * @property Authors $author0
 */
class Books extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'books';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['isbn', 'name'], 'required'],
            [['isbn'], 'number', 'max' => 9999999999999],
            [['author'], 'number'],
            [['name'], 'string', 'max' => 200],
            [['author'], 'exist', 'skipOnError' => true, 'targetClass' => Authors::className(), 'targetAttribute' => ['author' => 'viaf']],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'isbn' => 'ISBN',
            'author' => 'Author',
            'name' => 'Name',
        ];
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getBookGenres()
    {
        return $this->hasMany(BookGenres::className(), ['book' => 'isbn']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getAuthor0()
    {
        return $this->hasOne(Authors::className(), ['viaf' => 'author']);
    }
}
