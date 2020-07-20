<?php
use yii\helpers\Html;
use yii\helpers\Url;

/* @var $this \yii\web\View */
/* @var $content string */
/** @var \backend\models\auth\AdminUserIdentity $user */

$user = Yii::$app->getUser()->getIdentity();
?>

<nav class="main-header navbar navbar-expand navbar-white navbar-light">
    <!-- Left navbar links -->
    <ul class="navbar-nav">
        <li class="nav-item">
            <a class="nav-link" data-widget="pushmenu" href="#"><i class="fas fa-bars"></i></a>
        </li>
        <li class="nav-item d-none d-sm-inline-block">
            <a href="/" class="nav-link">前台页面</a>
        </li>
        <li class="nav-item d-none d-sm-inline-block">
            <a href="#" class="nav-link">后台管理</a>
        </li>
    </ul>

    <ul class="navbar-nav ml-auto">
        <li class="nav-item dropdown user-menu">
            <a href="#" class="nav-link dropdown-toggle" data-toggle="dropdown">
                <span class="d-none d-md-inline"><?= $user->username ?></span>
            </a>
            <ul class="dropdown-menu dropdown-menu-lg dropdown-menu-right">
                <li class="user-header bg-primary" style="height: auto;">
                    <p>
                        <?= $user->username ?>
                        <small><?= $user->real_name ?> | <?= $user->role->name ?></small>
                    </p>
                </li>
                <li class="user-body">
                    <div class="row">
                        <div class="col-6 text-center">
                            <a href="<?= Url::to(['auth/profile/reset-password']) ?>">修改密码</a>
                        </div>
                        <div class="col-6 text-center">
                            <a href="<?= Url::to(['auth/profile/reset-secret']) ?>">修改两步验证</a>
                        </div>
                    </div>
                </li>
                <li class="user-footer">
                    <a href="<?= Url::to(['auth/profile']) ?>" class="btn btn-default btn-flat">个人中心</a>
                    <?= Html::a(
                        '注销',
                        [Url::to(['auth/login/logout'])],
                        ['data-method' => 'post', 'class' => 'btn btn-default btn-flat float-right']
                    ) ?>
                </li>
            </ul>
        </li>
    </ul>
</nav>