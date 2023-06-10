<?php
namespace app\controllers;

use app\models\Bengkel;
use yii\data\ActiveDataProvider;
use yii\helpers\Html;
use Yii;


class BengkelController extends \yii\web\Controller
{
    public function actionIndex()
    {
        $query = Bengkel::find();
        $dataProvider = new ActiveDataProvider([
            'query' => $query
        ]);
        return $this->render('index', [
            'dataProvider' => $dataProvider
        ]);
    }

    public function actionCreate()
    {
        $bengkel = new Bengkel;
        $bengkel->nama_pemilik = 'Isla';
        $bengkel->no_tlp = '08234567'.rand(100,999);
        $bengkel->koordinatx = 2;
        $bengkel->koordinaty = 1;
        if ($bengkel->save()) {
            Yii::$app->session->setFlash('success', 'Data Tersimpan');
            return $this->redirect(['index']);
        }
    }

    public function actionUpdate($id)
    {
        $bengkel = Bengkel::findOne(['id' => $id]);
        if($bengkel !== null){
            $bengkel->nama_pemilik = 'Isla';
            $bengkel->save();
            Yii::$app->session->setFlash('success', 'Data Terupdate');
        }
        return $this->redirect(['index']);
    }

    public function actionDelete($id)
    {
        $bengkel = Bengkel::findOne($id);
        $bengkel->koordinaty = 2;
        if ($bengkel->delete()) {
        return $this->redirect(['index']);
        }
        else {
        var_dump($bengkel->getError());
        die();
        }
    }

    public function actionView($id)
    {
        $bengkel = Bengkel::findOne($id);
        return $this->render('view', ['bengkel' => $bengkel]);
    }

}


