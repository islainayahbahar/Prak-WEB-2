<?php
namespace app\controllers;

use app\models\Survei;
use yii\data\ActiveDataProvider;


class SurveiController extends \yii\web\Controller
{
    public function actionIndex()
    {
        $query = Survei::find();
        $dataProvider = new ActiveDataProvider([
            'query' => $query
        ]);
        return $this->render('index', [
            'dataProvider' => $dataProvider
        ]);
    }
}
