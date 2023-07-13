<?php

namespace app\controllers;

use app\core\Controller;
use app\core\Request;
use app\models\RegisterModel;


class AuthController extends Controller
{

    public function login(){

        $this->setLayOut('auth');

        return $this->render('login');
    }

    public function register(Request $request){

        $registerModel = new RegisterModel();

        if($request->isPost()){

            $registerModel->loadData($request->getBody());

            if($registerModel->validate() && $registerModel->register()){

                return 'Success';
            }

            return 'Handle Submitted Data';
        }

        return $this->render('register');
    }
}