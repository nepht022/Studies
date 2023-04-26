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


    $c1 = new Cliente(); //o cliente do ultimo namespace criado é criado 
    //para usar o outro namespace precisa especificar usando \namespace\
    print_r($c1);
    echo $c1->__get('nome');

    echo '<br>';
    
    $c1 = new \A\Cliente();
    print_r($c1);
    echo $c1->__get('nome')
?>