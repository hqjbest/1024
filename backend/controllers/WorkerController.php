<?php

namespace backend\controllers;

use common\models\mysql\Holiday;
use common\models\mysql\User;
use common\models\mysql\UserAction;
use Yii;
use common\models\mysql\Adept;
use backend\models\AdeptSearch;
use yii\web\Controller;
use yii\web\NotFoundHttpException;
use yii\filters\VerbFilter;

/**
 * AdeptController implements the CRUD actions for Adept model.
 */
class WorkerController extends Controller
{
    /**
     * {@inheritdoc}
     */
    public function behaviors()
    {
        return [
            'verbs' => [
                'class' => VerbFilter::className(),
                'actions' => [
                    'delete' => ['POST'],
                ],
            ],
        ];
    }

    /**
     * Lists all Adept models.
     * @return mixed
     */
    public function actionAutoWorker()
    {
        $date = date("Ymd", time());
        $isHoliday = Holiday::find()->where('>=', 'first_time', $date)->andWhere('<=', 'last_time', $date)->one();
        if($isHoliday){
            UserAction::updateAll(['status' => '加班'], ['date' => $date]);
            return true;
        }
        $users = User::findAll();
        /**
         * @var  $k
         * @var $user User
         */
        foreach ($users as $k => $user){
            $action = UserAction::findOne(['date' => $date, 'user_id' => $user->id]);
            if(!$action){
                $model = new UserAction();
                $model->user_id = $user->id;
                $model->adept_id = $user->adept_id;
                $model->first_time = 0;
                $model->last_time = 0;
                $model->status = '矿工';
                $model->save();

                continue;
            }
            $adept = Adept::findOne(['id' => $user->adept_id]);

            if($action->first_time > $adept->toptime){
                $action->status = '迟到';
            }elseif($action->last_time > $adept->undertime){
                $action->status = '早退';
            }else{
                $action->status = '正常';
            }
            $action->save();
        }

        return true;
    }


}
