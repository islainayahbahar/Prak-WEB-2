<?php
    use yii\widgets\DetailView;
?>
<?=
    DetailView::widget([
        'model' => $bengkel,
        'attributes' => [
            'id',
            'nama_pemilik',
            'no_tlp',
            'koordinatx',
            'koordinaty',                                
        ],
    ]);
?>

