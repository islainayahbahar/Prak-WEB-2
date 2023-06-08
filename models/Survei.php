<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "survei".
 *
 * @property int $id
 * @property int $no_ujian
 * @property string $hasil_survei
 * @property int $total
 */
class Survei extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'survei';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['no_ujian', 'hasil_survei', 'total'], 'required'],
            [['no_ujian', 'total'], 'integer'],
            [['hasil_survei'], 'string', 'max' => 100],
            [['no_ujian'], 'unique'],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'no_ujian' => 'No Ujian',
            'hasil_survei' => 'Hasil Survei',
            'total' => 'Total',
        ];
    }
}
