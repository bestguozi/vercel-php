<?php

namespace common\models;

use Yii;

/**
 * This is the model class for table "image".
 *
 * @property int $id
 * @property int $category_id
 * @property string $tags
 * @property string $title
 * @property string $summary
 * @property string $thumb
 * @property string $image_list
 * @property string $status
 */
class Image extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'image';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['title', 'summary', 'thumb', 'category_id'], 'required'],
            [['summary'], 'string'],
            [['status', 'category_id'], 'number'],
            [['title', 'thumb', 'tags'], 'string', 'max' => 256],
            [['image_list'], 'string'],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'category_id' => 'Category',
            'tags' => 'Tags',
            'title' => 'Title',
            'summary' => 'Summary',
            'thumb' => 'Thumb',
            'image_list' => 'Image List',
            'status'=>'Status'
        ];
    }


    public function getCategory()
    {
        return $this->hasOne(Category::class, ['id'=>'category_id']);
    }

    public static function getRandomImage()
    {
        $db = Yii::$app->db;
        return $db->createCommand('SELECT * FROM image  AS t1  JOIN (SELECT ROUND(RAND() * ((SELECT MAX(id) FROM `image`)-(SELECT MIN(id) FROM image))+(SELECT MIN(id) FROM image)) AS mid) AS t2 WHERE t1.id >= t2.mid ORDER BY t1.id LIMIT 1')->queryOne();
    }
}
