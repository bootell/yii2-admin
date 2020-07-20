<?php

use \backend\components\widgets\LeftMenu;

?>

<aside class="main-sidebar sidebar-dark-primary elevation-4">
    <?= \yii\helpers\Html::a( '<span class="brand-text font-weight-light">' . Yii::$app->name . '</span>', Yii::$app->homeUrl, ['class' => 'brand-link']) ?>
    <div class="sidebar">
        <nav class="mt-2">
            <?= LeftMenu::widget([
                'options' => ['class' => 'nav nav-pills nav-sidebar flex-column', 'data-widget' => 'treeview'],
                'items' => [
                    [
                        'label' => '后台管理',
                        'icon' => 'briefcase',
                        'items' => [
                            ['label' => '管理员管理', 'icon' => 'user', 'url' => ['admin/admin-users'], 'contains' => ['admin/admin-users/create']],
                            ['label' => '角色管理', 'icon' => 'hand-grab-o', 'url' => ['admin/admin-roles'], 'contains' => ['admin/admin-roles/create']],
                            ['label' => '权限管理', 'icon' => 'unlock-alt', 'url' => ['admin/role-auth']],
                            ['label' => '登录日志', 'icon' => 'key', 'url' => ['admin/admin-login-log']],
                            ['label' => '操作日志', 'icon' => 'pencil', 'url' => ['admin/admin-operate-log']],
                        ],
                    ],
                ]]) ?>
        </nav>
    </div>
</aside>
