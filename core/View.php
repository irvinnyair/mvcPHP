<?php

class View {

    use Twig\Environment;
    use Twig\Loader\FilesystemLoader;

    private $loader;
    private $twig;

    public function __construct()
    {
        $this->loader = new FilesystemLoader(__DIR__ . '../../views');
        $this->twig = new Environment($this->loader);
    }

    public static function render($view, $vars = []) {

        


        $hola1 = "Hola1";
        $hola2 = "Hola2";
        $hola3 = "Hola3";

        echo $this->twig->render("index.html", ["val1"=>$hola1, "val2"=>$hola2 ,"val3"=>$hola3]);

       /*  foreach ($vars as $key => $value) {
            $$key = $value;
        }

        require APP_PATH."views/".$view.".php"; */
    }

}