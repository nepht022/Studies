<?php
    class Exemplo{
        public static $atributo1 = 'Eu sou um atributo static';//a classe nao precisa ser intanciada pro metodo ser acessado
        public $atributo2 = 'Eu sou um atributo normal';

        public static function metodo1(){
            //$this nao pode ser usado dentro de um metodo static
            echo 'Eu sou um metodo static';
        }
        public function metodo2(){
            echo 'Eu sou um metodo normal';
        }
    }
    echo Exemplo::$atributo1;//acessando atributo e metodo static
    echo Exemplo::metodo1();

    $e1 = new Exemplo();
    echo $e1->atributo1;//um atributo static nao pode ser acessado usando ->
?>