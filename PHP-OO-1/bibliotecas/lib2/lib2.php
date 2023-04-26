<?php
    namespace B;
    class Cliente implements Cadastro{
        public function __construct(){
            print_r(get_class_methods($this));
        }

        public $nome = 'Jamilton';
        public function __get($name){
            return $this->$name;
        }
        public function remover(){
            echo 'Removido';
        }
    }
    interface Cadastro{
        public function remover();
    }
?>