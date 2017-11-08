<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "authors".
 *
 * @property string $viaf
 * @property string $name
 *
 * @property Books[] $books
 */
class Authors extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'authors';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['viaf', 'name'], 'required'],
            [['viaf'], 'number', 'max' => 22],
            [['name'], 'string', 'max' => 200],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'viaf' => 'VIAF',
            'name' => 'Name',
        ];
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getBooks()
    {
        return $this->hasMany(Books::className(), ['author' => 'viaf']);
    }
}
