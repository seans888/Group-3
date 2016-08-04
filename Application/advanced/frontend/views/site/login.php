<?php

/* @var $this yii\web\View */
/* @var $form yii\bootstrap\ActiveForm */
/* @var $model \common\models\LoginForm */

use yii\helpers\Html;
use yii\bootstrap\ActiveForm;

$this->title = 'LSC Learning Management System';
/*$this->params['breadcrumbs'][] = $this->title;*/
?>
<!-- <div class="site-login"><br><br><br><br> -->
    <br><br><br><center><font size="200px" face="lucida calligraphy italic"><?= Html::encode($this->title) ?><center></font>

    <!-- <p>Please fill out the following fields to login:</p>  -->

    <div class="row">
        <div class="form" align="center">
            <?php $form = ActiveForm::begin(['id' => 'login-form']); ?>

                <?= $form->field($model, 'username')->textInput(['autofocus' => true]) ?> <br> <br>

                <?= $form->field($model, 'password')->passwordInput() ?>

                <?= $form->field($model, 'rememberMe')->checkbox() ?>

                <div style="color:#043c6f;margin:1em 0">
                    If you forgot your password you can <?= Html::a('reset it', ['site/request-password-reset']) ?>.
                </div>

                <div class="form-group">
                    <?= Html::submitButton('Login', ['class' => 'btn btn-primary', 'name' => 'login-button']) ?>
                </div>

            <?php ActiveForm::end(); ?>
        </div>
    </div>
</div>