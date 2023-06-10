<?php
    use yii\grid\GridView;
    use yii\grid\SerialColumn;
    use yii\grid\ActionColumn;
    use yii\helpers\Html;
    use yii\helpers\Url;
?>

<p>
    <?= Html::a('Tambah Data', ['create'], ['class' => 'btn btn-primary']) ?>
</p>

<?=
    GridView::widget([
        'dataProvider' => $dataProvider,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],
                'id049',
                'no_induk_mahasiswa049',
                'nama_mahasiswa049',
                'kelas049',
                'status049',
            [
                'class' => ActionColumn::className(),
                'template' => '{view} {update} {delete}',
            ], 
        ],
    ])
?>
