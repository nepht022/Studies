<?php
    namespace A;
    class Cliente implements Cadastro{
        public function __construct(){
            print_r(get_class_methods($this));
        }

        public $nome = 'Jorge';
        public function __get($name){
            return $this->$name;
        }
        public function salvar(){
            echo 'Salvo';
        }
    }
    interface Cadastro{
        public function salvar();
    }
?>