<?php

namespace common\models;

use Yii;
use yii\behaviors\TimestampBehavior;

/**
 * This is the model class for table "course".
 *
 * @property int $id
 * @property string $name
 * @property string|null $description
 * @property float $price
 * @property string|null $img
 * @property int|null $created_at
 * @property int|null $updated_at
 *
 * @property CourseLesson[] $courseLessons
 */
class Course extends \yii\db\ActiveRecord
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
        return 'course';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['name', 'price'], 'required'],
            [['description'], 'string'],
            [['price'], 'number'],
            [['created_at', 'updated_at'], 'integer'],
            [['name', 'img'], 'string', 'max' => 255],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'name' => 'Название',
            'description' => 'Описание',
            'price' => 'Цена',
            'img' => 'Рисунок',
            'imageFile' => 'Рисунок',
            'created_at' => 'Время добавления',
            'updated_at' => 'Время обновления',
        ];
    }

    /**
     * Gets query for [[CourseLessons]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getCourseLessons()
    {
        return $this->hasMany(CourseLesson::className(), ['course_id' => 'id']);
    }

    public function getImage()
    {
        return Yii::$app->params['staticDomain'] . '/course/' . $this->img;
    }

    public function upload()
    {
        if ($this->imageFile === null) {
            return true;
        }

        $folderPath = Yii::getAlias('@static') . '/course';

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
