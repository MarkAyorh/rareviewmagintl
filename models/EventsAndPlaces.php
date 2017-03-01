<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "events_and_places".
 *
 * @property integer $id
 * @property string $title
 * @property string $picture_name
 * @property string $short_note
 * @property string $caption
 */
class EventsAndPlaces extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'events_and_places';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['title', 'picture_name', 'short_note', 'caption'], 'required'],
            [['title', 'short_note', 'caption'], 'string'],
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
            'short_note' => 'Short Note',
            'caption' => 'Caption',
        ];
    }
}
