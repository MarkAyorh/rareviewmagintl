<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "campus_posts".
 *
 * @property integer $id
 * @property string $date
 * @property string $category
 * @property string $title
 * @property string $picture
 * @property string $caption
 * @property string $post
 */
class CampusPosts extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'campus_posts';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['date', 'category', 'title', 'picture', 'post'], 'required'],
            [['post'], 'string'],
            [['date', 'caption'], 'string', 'max' => 200],
            [['category', 'picture'], 'string', 'max' => 50],
            [['title'], 'string', 'max' => 80]
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'date' => 'Date',
            'category' => 'Category',
            'title' => 'Title',
            'picture' => 'Picture',
            'caption' => 'Caption',
            'post' => 'Post',
        ];
    }
}
