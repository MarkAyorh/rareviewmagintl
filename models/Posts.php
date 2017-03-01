<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "posts".
 *
 * @property integer $id
 * @property string $date
 * @property string $category
 * @property string $title
 * @property string $picture
 * @property string $caption
 * @property string $post
 */
class Posts extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'posts';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['date', 'category', 'title', 'picture', 'post'], 'required'],
            [['post'], 'string'],
            [['date'], 'string', 'max' => 20],
            [['category'], 'string', 'max' => 50],
            [['title', 'caption'], 'string', 'max' => 200],
            [['picture'], 'string', 'max' => 110]
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
