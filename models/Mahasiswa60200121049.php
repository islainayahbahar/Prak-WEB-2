<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "mahasiswa60200121049".
 *
 * @property int $id049
 * @property string $no_induk_mahasiswa049
 * @property string $nama_mahasiswa049
 * @property string $kelas049
 * @property string $status049
 */
class Mahasiswa60200121049 extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'mahasiswa60200121049';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['no_induk_mahasiswa049', 'nama_mahasiswa049', 'kelas049', 'status049'], 'required'],
            [['no_induk_mahasiswa049'], 'string', 'max' => 15],
            [['nama_mahasiswa049'], 'string', 'max' => 100],
            [['kelas049'], 'string', 'max' => 1],
            [['status049'], 'string', 'max' => 11],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id049' => 'Id049',
            'no_induk_mahasiswa049' => 'No Induk Mahasiswa049',
            'nama_mahasiswa049' => 'Nama Mahasiswa049',
            'kelas049' => 'Kelas049',
            'status049' => 'Status049',
        ];
    }
}
