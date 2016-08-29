<?php
    use yii\widgets\ListView;
?>
<?=ListView::widget([
        'dataProvider' => $listDataProvider,
        'itemView' => function ($model, $key, $index, $widget) {
            return '<div>'.$model->username.'</div>';
        }
    ]);
?>