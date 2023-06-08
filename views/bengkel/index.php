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
                'id',
                'nama_pemilik',
                'no_tlp',
                'koordinatx',
                'koordinaty',
            [
                'class' => ActionColumn::className(),
                'template' => '{view} {update} {delete}',
            ],    
        ],
    ])
?>
