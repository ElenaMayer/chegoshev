<?php

namespace app\controllers;

use app\components\Numerology;
use Yii;
use yii\web\Controller;

class AjaxController extends Controller
{

    public function actionGetLifeForceChartData()
    {
        $birthday = Yii::$app->request->post('birthday');
        if(!$birthday){
            return;
        }
        $numerology = new Numerology($birthday);
        return json_encode($numerology->getLifeForceChartData());
    }

    public function actionGetAnnualLifeForceChartData()
    {
        $birthday = Yii::$app->request->post('birthday');
        if(!$birthday){
            return;
        }
        $numerology = new Numerology($birthday);

        if($year = Yii::$app->request->post('year')){
            $numerology->setAccountingYear($year);
        }
        return json_encode($numerology->getAnnualLifeForceChartData());
    }

    public function actionGetFateAndWillChartData()
    {
        $birthday = Yii::$app->request->post('birthday');
        if(!$birthday){
            return;
        }
        $numerology = new Numerology($birthday);
        return json_encode($numerology->getFateAndWillChartData());
    }
}