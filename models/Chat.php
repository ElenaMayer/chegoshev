<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "chat".
 *
 * @property int $id
 * @property int|null $tg_chat_id
 * @property string $created_at
 */
class Chat extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'chat';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['tg_chat_id'], 'integer'],
            [['created_at'], 'safe'],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'tg_chat_id' => 'Tg Chat ID',
            'created_at' => 'Created At',
        ];
    }
}
