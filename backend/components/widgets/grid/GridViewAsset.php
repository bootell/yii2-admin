<?php

namespace backend\components\widgets\grid;

class GridViewAsset extends \yii\web\AssetBundle
{
    public $sourcePath = '@vendor/almasaeed2010/adminlte/plugins/datatables-bs4';

    public $css = [
        'css/dataTables.bootstrap4.css',
    ];

    public $js = [];

    public $depends = [
        \dmstr\adminlte\web\AdminLteAsset::class,
    ];
}