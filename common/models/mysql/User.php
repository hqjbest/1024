<?php

namespace common\models\mysql;

use Yii;

/**
 * This is the model class for table "user".
 *
 * @property int $id
 * @property string $username
 * @property int $adept_id
 * @property string $sex
 * @property string $auth_key
 * @property string $password_hash
 * @property string $password_reset_token
 * @property string $number
 * @property string $email
 * @property string $phone
 * @property int $status
 * @property int $join_time
 * @property int $created_at
 * @property int $updated_at
 */
class User extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'user';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['username', 'auth_key', 'password_hash', 'email', 'created_at', 'updated_at'], 'required'],
            [['adept_id', 'status', 'created_at', 'updated_at'], 'integer'],
            [['username', 'auth_key'], 'string', 'max' => 32],
            [['sex'], 'string', 'max' => 2],
            [['password_hash', 'password_reset_token', 'email'], 'string', 'max' => 255],
            [['number'], 'string', 'max' => 20],
            [['phone'], 'string', 'max' => 16],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id' => '用户ID',
            'username' => '用户名',
            'adept_id' => '部门',
            'sex' => '性别',
            'auth_key' => 'Auth Key',
            'password_hash' => 'Password Hash',
            'password_reset_token' => 'Password Reset Token',
            'number' => '身份证号',
            'email' => 'Email',
            'phone' => '电话',
            'status' => 'Status',
            'join_time' => '加入时间',
            'created_at' => '创建时间',
            'updated_at' => '更新时间',
        ];
    }
}
