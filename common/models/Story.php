<?php

namespace common\models;

use Yii;

/**
 * This is the model class for table "wx_story".
 *
 * @property int $id
 * @property string $author
 * @property string $story_name
 * @property int $category_id
 * @property string $thumb
 * @property string $story_content
 * @property int $create_at
 */
class Story extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'wx_story';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['author', 'story_name', 'category_id', 'thumb', 'story_content', 'create_at'], 'required'],
            [['category_id', 'create_at'], 'integer'],
            [['story_content'], 'string'],
            [['author', 'story_name'], 'string', 'max' => 32],
            [['thumb'], 'string', 'max' => 256],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'author' => 'Author',
            'story_name' => 'Story Name',
            'category_id' => 'Category ID',
            'thumb' => 'Thumb',
            'story_content' => 'Story Content',
            'create_at' => 'Create At',
        ];
    }
}
