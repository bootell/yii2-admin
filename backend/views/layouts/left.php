<?php

use \backend\components\widgets\LeftMenu;

?>

<aside class="main-sidebar">

    <section class="sidebar">
        <?= LeftMenu::widget([
            'items' => [
                [
                    'label' => '后台管理',
                    'icon' => 'briefcase',
                    'items' => [
                        ['label' => '管理员管理', 'icon' => 'user', 'url' => ['admin/admin-users'], 'contains' => ['admin/admin-users/create']],
                        ['label' => '角色管理', 'icon' => 'tags', 'url' => ['admin/admin-roles'], 'contains' => ['admin/admin-roles/create']],
                        ['label' => '权限管理', 'icon' => 'unlock-alt', 'url' => ['admin/role-auth']],
                        ['label' => '登录日志', 'icon' => 'calendar', 'url' => ['admin/admin-login-log']],
                        ['label' => '操作日志', 'icon' => 'database', 'url' => ['admin/admin-operate-log']],
                    ],
                ],
            ]]) ?>
    </section>

</aside>
