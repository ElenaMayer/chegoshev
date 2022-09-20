<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "action".
 *
 * @property int $id
 * @property string|null $title
 * @property int|null $post_id
 * @property int|null $next_post_id
 */
class Action extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'action';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['post_id', 'next_post_id'], 'integer'],
            [['title'], 'string', 'max' => 20],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'title' => 'Title',
            'post_id' => 'Post ID',
            'next_post_id' => 'Next Post ID',
        ];
    }
}
