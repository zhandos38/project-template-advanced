<?php

namespace common\models;

use Yii;
use yii\behaviors\TimestampBehavior;
use yii\imagine\Image;

/**
 * This is the model class for table "slider".
 *
 * @property int $id
 * @property string|null $img
 * @property string|null $link
 * @property int|null $created_at
 * @property int|null $updated_at
 */
class Slider extends \yii\db\ActiveRecord
{
    public $imageFile;

    public function behaviors()
    {
        return [
            'timestamp' => [
                'class' => TimestampBehavior::className()
            ]
        ];
    }

    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'slider';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['created_at', 'updated_at'], 'integer'],
            [['img', 'link'], 'string', 'max' => 255],

            [['imageFile'], 'file', 'skipOnEmpty' => true, 'extensions' => 'png, jpg, jpeg'],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'img' => 'Рисунок',
            'imageFile' => 'Рисунок',
            'link' => 'Ссылка',
            'created_at' => 'Время добавления',
            'updated_at' => 'Время обновления',
        ];
    }

    public function getImage()
    {
        return Yii::$app->params['staticDomain'] . '/slider/' . $this->img;
    }

    public function upload()
    {
        if ($this->imageFile === null) {
            return true;
        }

        $folderPath = Yii::getAlias('@static') . '/slider';

        if (!file_exists($folderPath) && !mkdir($folderPath, 0777, true) && !is_dir($folderPath)) {
            throw new \RuntimeException(sprintf('Directory "%s" was not created', $folderPath));
        }

        $imgPath = $folderPath . '/' . $this->imageFile->baseName . '.' . $this->imageFile->extension;

        if ($this->validate()) {
            return $this->imageFile->saveAs($imgPath);
        }

        return false;
    }
}
