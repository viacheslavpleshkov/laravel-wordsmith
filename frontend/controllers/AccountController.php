<?php
namespace frontend\controllers;
use yii\web\Controller;
class AccountController extends Controller{
    public function actionsLogin()
    {
        return $this->render('login');
    }
}