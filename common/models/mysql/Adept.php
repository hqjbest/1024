<?php

namespace common\models\mysql;

use Yii;

/**
 * This is the model class for table "adept".
 *
 * @property int $id
 * @property string $name
 * @property string $description
 * @property string $toptime
 * @property string $undertime
 * @property int $created_at
 * @property int $updated_at
 */
class Adept extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'adept';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['id', 'name'], 'required'],
            [['id', 'created_at', 'updated_at'], 'integer'],
            [['name'], 'string', 'max' => 32],
            [['description'], 'string', 'max' => 256],
            [['toptime', 'undertime'], 'string', 'max' => 5],
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
            'description' => '说明',
            'toptime' => '上班时间',
            'undertime' => '下班时间',
            'created_at' => '创建时间',
            'updated_at' => '更新时间',
        ];
    }
}
