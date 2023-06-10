<?php

namespace app\controllers;

use app\models\Profil049;
use yii\data\ActiveDataProvider;

class ProfilController extends \yii\web\Controller
{
    public function actionIndex()
    {
        $query = Profil049::find();
        $dataProvider = new ActiveDataProvider([
            'query' => $query
        ]);
        return $this->render('index', [
            'dataProvider' => $dataProvider
        ]);
    }

}
