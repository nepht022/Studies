<?php
    class Pessoa{
        public $nome = null;

        function __construct($nome){
            echo 'Objeto Iniciado<br>';
            $this->nome = $nome;
        }
        function __destruct(){
            echo 'Objeto Removido';
        }

        function __get($atributo){
            return $this->$atributo;
        }

        function correr(){
            echo $this->__get('nome').' está correndo...<br>';
        }
    }

    $p1 =  new pessoa('Rodrigo');
    $p1->correr();
    echo $p1->__get('nome');

    echo '<br>';
    //unset($p1);
?>