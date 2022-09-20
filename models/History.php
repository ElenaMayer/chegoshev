<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "history".
 *
 * @property int $id
 * @property int|null $chat_id
 * @property int|null $user_id
 * @property int|null $post_id
 * @property string|null $msg
 * @property string $created_at
 */
class History extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'history';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['chat_id', 'user_id', 'post_id'], 'integer'],
            [['created_at'], 'safe'],
            [['msg'], 'string', 'max' => 255],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'chat_id' => 'Chat ID',
            'user_id' => 'User ID',
            'post_id' => 'Post ID',
            'msg' => 'Msg',
            'created_at' => 'Created At',
        ];
    }
}
