<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "event_unique".
 *
 * @property integer $id
 * @property string $title
 * @property string $picture_name
 */
class EventUnique extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'event_unique';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['title', 'picture_name'], 'required'],
            [['title'], 'string', 'max' => 80],
            [['picture_name'], 'string', 'max' => 40]
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'title' => 'Title',
            'picture_name' => 'Picture Name',
        ];
    }
}
