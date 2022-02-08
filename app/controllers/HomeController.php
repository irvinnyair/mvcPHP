<?php

namespace app\controllers;

//use App\models\User;
use \Controller;
use View;

class HomeController extends Controller {

    public function actionIndex() {
        //$user = User::find($id);
        //Response::render("home", ["name" => $user->name, "age" => $user->age, "email" => $user->email]);

        echo View::render("index.html");

    }

    public function actionAbout() {
        echo "About this mvc project";
    }

}