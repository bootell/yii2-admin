<?php
use yii\helpers\Html;
use yii\bootstrap4\ActiveForm;
use yii\captcha\Captcha;

/* @var $this yii\web\View */
/* @var $form yii\bootstrap4\ActiveForm */
/* @var $model backend\models\auth\LoginForm */

$this->title = '登录';

$fieldOptions1 = [
    'options' => ['class' => 'input-group mb-3'],
    'inputTemplate' => "{input}<div class='input-group-append'><div class='input-group-text'><span class='fas fa-envelope'></span></div></div>"
];

$fieldOptions2 = [
    'options' => ['class' => 'input-group mb-3'],
    'inputTemplate' => "{input}<div class='input-group-append'><div class='input-group-text'><span class='fas fa-lock'></span></div></div>"
];
?>

<div class="login-box">
    <div class="login-logo">
        <a href="#"><b><?= Yii::$app->name ?></b></a>
    </div>
    <!-- /.login-logo -->
    <div class="card">
        <div class="card-body login-card-body">
            <p class="login-box-msg"></p>

            <?php $form = ActiveForm::begin(['id' => 'login-form', 'enableClientValidation' => false]); ?>

            <?= $form->field($model, 'username', $fieldOptions1)
                ->textInput(['placeholder' => $model->getAttributeLabel('username')])
                ->label(false) ?>

            <?= $form->field($model, 'password', $fieldOptions2)
                ->label(false)
                ->passwordInput(['placeholder' => $model->getAttributeLabel('password')]) ?>

            <?php
            if ($model->isCaptcha()) {
                echo $form->field($model, 'captcha')->widget(Captcha::class, [
                    'captchaAction' => 'auth/login/captcha',
                    'template' => '<div class="input-group mb-3 has-feedback">{input}<div class="input-group-append"><div class="input-group-text" style="padding: 0;">{image}</div></div>',
                    'options' => ['class' => 'form-control', 'placeholder' => $model->getAttributeLabel('captcha')]
                ])->label(false);
            }
            ?>

            <div class="row">
                <div class="col-8">
                    <?= $form->field($model, 'rememberMe', [
                        'options' => ['class' => 'input-group'],
                    ])->checkbox() ?>
                </div>
                <!-- /.col -->
                <div class="col-4">
                    <?= Html::submitButton('登录', ['class' => 'btn btn-primary btn-block', 'name' => 'login-button']) ?>
                </div>
                <!-- /.col -->
            </div>

            <?php ActiveForm::end(); ?>
        </div>
    </div>
    <!-- /.login-box-body -->
</div>
<!-- /.login-box -->
