<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "fillers".
 *
 * @property integer $id
 * @property string $filler_name
 */
class Fillers extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'fillers';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['filler_name'], 'required'],
            [['filler_name'], 'string', 'max' => 32]
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'filler_name' => 'Filler Name',
        ];
    }
}
