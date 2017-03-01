<?php

namespace app\models;

use yii\base\Model;
use yii\web\UploadedFile;

class UploadForm extends Model
{
    /**
     * @var UploadedFile
     */
    public $file;

    public function rules() {
        return [
            // checks if "primaryImage" is a valid image with proper size
            [['file'], 'image', 'extensions' => 'jpg', 'checkExtensionByMimeType'=>false,
                
            ],
        ];
    }
    
    public function attributeLabels()
    {
        return [
            'file' => 'Choose Picture',
            
        ];
    }
}
