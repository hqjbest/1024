<?php

namespace common\models\mysql;

use Yii;

/**
 * This is the model class for table "worktime".
 *
 * @property int $id
 * @property int $adept_id
 * @property int $top_time
 * @property int $undertime
 * @property int $ created_at
 * @property int $updated_at
 */
class Worktime extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'worktime';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['id'], 'required'],
            [['id', 'adept_id', 'top_time', 'undertime', ' created_at', 'updated_at'], 'integer'],
            [['adept_id'], 'unique'],
            [['id'], 'unique'],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'adept_id' => 'Adept ID',
            'top_time' => 'Top Time',
            'undertime' => 'Undertime',
            ' created_at' => 'Created At',
            'updated_at' => 'Updated At',
        ];
    }
}
