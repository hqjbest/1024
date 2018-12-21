<?php

namespace common\models\mysql;

use Yii;

/**
 * This is the model class for table "user_action".
 *
 * @property int $id
 * @property int $user_id
 * @property int $date
 * @property int $adept_id
 * @property int $first_time
 * @property int $last_time
 * @property string $status
 * @property string $description
 * @property int $created_at
 * @property int $updated_at
 */
class UserAction extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'user_action';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['id'], 'required'],
            [['id', 'user_id', 'date', 'adept_id','created_at', 'updated_at'], 'integer'],
            [['status'], 'string', 'max' => 16],
            [[ 'first_time', 'last_time', ], 'string', 'max' => 5],
            [['description'], 'string', 'max' => 256],
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
            'user_id' => '员工',
            'date' => '日期',
            'adept_id' => '部门',
            'first_time' => '上班时间',
            'last_time' => '下班时间',
            'status' => '状态',
            'description' => '说明',
            'created_at' => '创建时间',
            'updated_at' => '更新时间',
        ];
    }
}
