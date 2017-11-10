<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "books".
 *
 * @property integer $id
 * @property integer $author_id
 * @property string $title
 * @property string $isbn
 *
 * @property BookGenres[] $bookGenres
 * @property Authors $authorId
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
            [['author_id'], 'integer'],
            [['title'], 'required'],
            [['title'], 'string', 'max' => 150],
            [['isbn'], 'number', 'max' => 9999999999999],
            [['isbn'], 'unique'],
            [['author_id'], 'exist', 'skipOnError' => true, 'targetClass' => Authors::className(), 'targetAttribute' => ['author_id' => 'id']],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'author_id' => 'Author',
            'title' => 'Title',
            'isbn' => 'ISBN',
        ];
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getBookGenres()
    {
        return $this->hasMany(BookGenres::className(), ['book_fk' => 'id']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getAuthorId()
    {
        return $this->hasOne(Authors::className(), ['id' => 'author_id']);
    }
}
