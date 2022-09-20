<?php

/** @var yii\web\View $this */
/** @var yii\bootstrap4\ActiveForm $form */
/** @var app\models\LoginForm $model */

use yii\bootstrap4\ActiveForm;
use yii\bootstrap4\Html;

$this->title = 'Login';
$this->params['breadcrumbs'][] = $this->title;
?>

<div class="content-wrap py-0">

    <div class="section p-0 m-0 h-100 position-absolute" style="background: url('images/1.jpg') center center no-repeat; background-size: cover;"></div>

    <div class="section bg-transparent min-vh-100 p-0 m-0">
        <div class="vertical-middle">
            <div class="container-fluid py-5 mx-auto">
                <div class="center">
                    <a href="index.html"><img src="images/logo.png" alt="Logo"></a>
                </div>

                <div class="card mx-auto rounded-0 border-0" style="max-width: 400px; background-color: rgba(255,255,255,0.93);">
                    <div class="card-body" style="padding: 40px;">
                        <form id="login-form" name="LoginForm" class="mb-0" action="#" method="post">
                            <h3>Войти</h3>

                            <div class="row">
                                <div class="col-12 form-group">
                                    <label for="login-form-username">Логин:</label>
                                    <input type="text" id="login-form-username" name="LoginForm[username]" value="" class="form-control not-dark" />
                                </div>

                                <div class="col-12 form-group">
                                    <label for="login-form-password">Пароль:</label>
                                    <input type="password" id="login-form-password" name="LoginForm[password]" value="" class="form-control not-dark" />
                                </div>

                                <div class="col-12 form-group">
                                    <button class="button button-3d button-black m-0" id="login-form-submit" name="login-button" value="login">Войти</button>
                                </div>
                            </div>
                        </form>

                        <div class="line line-sm"></div>
                    </div>
                </div>

                <div class="text-center dark mt-3"><small>Copyrights &copy; Все права защищены</small></div>
            </div>
        </div>
    </div>

</div>