<?php
namespace app\controllers;

use app\models\Mahasiswa60200121049;
use yii\data\ActiveDataProvider;
use Yii;


class Mahasiswa60200121049Controller extends \yii\web\Controller
{
    public function actionIndex()
    {
        $query = Mahasiswa60200121049::find();
        $dataProvider = new ActiveDataProvider([
            'query' => $query
        ]);
        return $this->render('index', [
            'dataProvider' => $dataProvider
        ]);
    }

    public function actionCreate()
    {
        $mahasiswa60200121049 = new Mahasiswa60200121049;
        $mahasiswa60200121049->no_induk_mahasiswa049 = '60200121049-'.rand(100,999);
        $mahasiswa60200121049->nama_mahasiswa049 = 'Isla Inayah Bahar';
        $mahasiswa60200121049->kelas049 = 'D';
        $mahasiswa60200121049->status049 = 'Baru';
        if ($mahasiswa60200121049->save()) {
            Yii::$app->session->setFlash('success', 'Data Tersimpan');
            return $this->redirect(['index']);
        }
    }

    public function actionUpdate($id)
    {
        $mahasiswa60200121049 = mahasiswa60200121049::findOne($id);
        if($mahasiswa60200121049 !== null){
            $mahasiswa60200121049->kelas049 = 'C';
            $mahasiswa60200121049->status049 = 'Update';
            $mahasiswa60200121049->save();
            Yii::$app->session->setFlash('success', 'Data Terupdate');
        }
        return $this->redirect(['index']);
    }

    public function actionDelete($id)
    {
        $mahasiswa60200121049 = mahasiswa60200121049::findOne($id);
        if ($mahasiswa60200121049->delete()) {
        return $this->redirect(['index']);
        }
        else {
        var_dump($mahasiswa60200121049->getError());
        die();
        }
    }

    public function actionView($id)
    {
        $mahasiswa60200121049 = mahasiswa60200121049::findOne($id);
        return $this->render('view', ['mahasiswa60200121049' => $mahasiswa60200121049]);
    }

}


