<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "bengkel".
 *
 * @property int $id
 * @property string $nama_pemilik
 * @property int $no_tlp
 * @property int $koordinatx
 * @property int $koordinaty
 */
class Bengkel extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'bengkel';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['nama_pemilik', 'no_tlp', 'koordinatx', 'koordinaty'], 'required'],
            [['no_tlp', 'koordinatx', 'koordinaty'], 'integer'],
            [['nama_pemilik'], 'string', 'max' => 100],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'nama_pemilik' => 'Nama Pemilik',
            'no_tlp' => 'No Tlp',
            'koordinatx' => 'Koordinatx',
            'koordinaty' => 'Koordinaty',
        ];
    }
}
