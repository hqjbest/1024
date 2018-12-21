<?php

namespace common\models\mysql;

use Yii;

/**
 * This is the model class for table "holiday".
 *
 * @property int $id
 * @property string $name
 * @property int $first_time
 * @property int $last_time
 * @property int $created_at
 * @property int $updated_at
 */
class Holiday extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'holiday';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['id'], 'required'],
            [['id', 'first_time', 'last_time', 'created_at', 'updated_at'], 'integer'],
            [['name'], 'string', 'max' => 256],
            [['name'], 'unique'],
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
            'name' => '名称',
            'first_time' => '开始时间',
            'last_time' => '结束时间',
            'created_at' => '创建时间',
            'updated_at' => '更新时间',
        ];
    }
}
