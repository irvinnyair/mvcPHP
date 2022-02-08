<?php

namespace app\controllers;

use Twig\Environment;
use Twig\Loader\FilesystemLoader;

//use App\models\User;
use \Controller;
use View;

class PruebaController extends Controller {

    private $loader;
    private $twig;

    public function __construct()
    {
        $this->loader = new FilesystemLoader(__DIR__ . '../../views');
        $this->twig = new Environment($this->loader);
    }

    public function actionIndex() {
        //$user = User::find($id);
        //Response::render("home", ["name" => $user->name, "age" => $user->age, "email" => $user->email]);

        $hola1 = "Hola1";
        $hola2 = "Hola2";
        $hola3 = "Hola3";

        echo $this->twig->render("index.html", ["val1"=>$hola1, "val2"=>$hola2 ,"val3"=>$hola3]);

    }

    public function actionAbout() {
        echo "About this mvc project";
    }

}