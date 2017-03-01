<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "past_lead_stories".
 *
 * @property integer $id
 * @property string $date
 * @property string $category
 * @property string $title
 * @property string $picture
 * @property string $post
 */
class PastLeadStories extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'past_lead_stories';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['date', 'category', 'title', 'picture', 'post'], 'required'],
            [['post'], 'string'],
            [['date'], 'string', 'max' => 200],
            [['category', 'picture'], 'string', 'max' => 50],
            [['title'], 'string', 'max' => 110]
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
            'post' => 'Post',
        ];
    }
}
