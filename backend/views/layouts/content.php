<?php

use yii\helpers\Html;
use yii\helpers\Inflector;
use yii\widgets\Breadcrumbs;
use backend\components\widgets\Alert;

/* @var $content string */

?>
<div class="content-wrapper">
    <section class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <?php if (isset($this->blocks['content-header'])): ?>
                        <h1><?= $this->blocks['content-header'] ?></h1>
                    <?php else: ?>
                        <h1>
                            <?php
                            if ($this->title !== null):
                                echo Html::encode($this->title);
                            else:
                                echo Inflector::camel2words(Inflector::id2camel($this->context->module->id));
                                echo ($this->context->module->id !== Yii::$app->id) ? '<small>Module</small>' : '';
                            endif;
                            ?>
                        </h1>
                    <?php endif; ?>
                </div>
                <div class="col-sm-6">
                    <?= Breadcrumbs::widget([
                        'tag' => 'ol',
                        'links' => isset($this->params['breadcrumbs']) ? $this->params['breadcrumbs'] : [],
                        'options' => ['class' => 'breadcrumb float-sm-right'],
                        'itemTemplate' => '<li class="breadcrumb-item">{link}</li>',
                        'activeItemTemplate' => '<li class="breadcrumb-item active">{link}</li>',
                    ]) ?>
                </div>
            </div>
        </div>
    </section>

    <section class="content">
        <?= Alert::widget() ?>
        <?= $content ?>
    </section>
</div>

<footer class="main-footer">
    <div class="float-right d-none d-sm-block">
        <b>Version</b> <?= Yii::$app->version ?>
    </div>
    <strong>Copyright &copy; 2018-2020 <a href="#">Bootell</a>.</strong>
</footer>
