<?php

namespace common\models\mysql\base;

/**
 * Created by PhpStorm.
 * User: L
 * Date: 2018/10/20
 * Time: 16:42
 */
abstract class BaseActiveRecord extends \yii\db\ActiveRecord
{
    public function behaviors()
    {
        $behaviors = [];

        $behaviors[] = [
            'class' => 'yii\behaviors\TimestampBehavior',
            'createdAtAttribute' => 'created_at',
            'updatedAtAttribute' => 'updated_at',
            // 'value' => new Expression('UNIX_TIMESTAMP(NOW())'), //与LoggableBehavior冲突
        ];

        return $behaviors;
    }

}