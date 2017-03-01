<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "quotes".
 *
 * @property integer $id
 * @property string $quote
 */
class Quotes extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'quotes';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['quote'], 'required'],
            [['quote'], 'string']
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'quote' => 'Quote',
        ];
    }
}
