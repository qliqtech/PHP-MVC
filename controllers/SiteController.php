<?php
namespace app\controllers;
use app\core\Application;
use app\core\Controller;
use app\core\Request;

class SiteController extends Controller
{
    public function handleContact(Request $request){

       $body = $request->getBody();

      // var_dump($body);exit;

        return 'Handling submitted Data';
    }

    public function contact(){

       return $this->render('contact');
    }

    public function home(){

        $params = [
            'name'=>'TheCodeholic'
        ];

        return $this->render('home',$params);
    }
}