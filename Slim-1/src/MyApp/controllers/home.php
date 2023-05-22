<?php
    namespace MyApp\controllers;

    class Home{
        protected $container;
        public function __construct($container){
            $this->container = $container;
        }

       public function home($request, $response){
            $view = $this->container->get('view');
            echo '<pre>';
            var_dump($view);
            echo '</pre>';
            return $response->write('seila');
       } 
    }
?>