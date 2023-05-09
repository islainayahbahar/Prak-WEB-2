<?php

namespace app\controllers;

class MahasiswaController extends \yii\web\Controller
{
    public function actionProfil()
    {
        return $this->render('profil');
    }

    public function actionDetail($id)
    {
        // return "<h1>mahasiswa?id=</h1>" . $id . "</h1";
        return "<h1>Ini Hasilnya</h1>";
    }

}
