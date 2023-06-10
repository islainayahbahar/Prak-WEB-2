<?php
namespace app\controllers;

use app\models\Mahasiswa049;
use yii\data\ActiveDataProvider;


class MahasiswaController extends \yii\web\Controller
{
    public function actionIndex()
    {
        $query = Mahasiswa049::find();
        $dataProvider = new ActiveDataProvider([
            'query' => $query
        ]);
        return $this->render('index', [
            'dataProvider' => $dataProvider
        ]);
    }

    public function actionDetail($id)
    {
        // return "<h1>mahasiswa?id=</h1>" . $id . "</h1";
        return "<h1>Ini Hasilnya</h1>";
    }

}
