<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "campus_comments".
 *
 * @property integer $id
 * @property string $date
 * @property string $time
 * @property string $title
 * @property string $name
 * @property string $location
 * @property string $email_address
 * @property string $comment
 */
class CampusComments extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'campus_comments';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['date', 'time', 'title', 'name', 'location', 'email_address', 'comment'], 'required'],
            [['title', 'comment'], 'string'],
            [['date', 'time', 'name'], 'string', 'max' => 20],
            [['location', 'email_address'], 'string', 'max' => 40]
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'date' => '',
            'time' => '',
            'title' => '',
            'name' => 'Name',
            'location' => 'Location',
            'email_address' => 'Email Address',
            'comment' => 'Comment',
        ];
    }
}
