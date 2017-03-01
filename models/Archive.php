<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "archive".
 *
 * @property integer $id
 * @property string $period
 */
class Archive extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'archive';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['period'], 'required'],
            [['period'], 'string', 'max' => 20]
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'period' => 'Period',
        ];
    }
}
