<?php
    class Funcionario{
        public $nome = null;
        public $telefone = null;
        public $numFilhos = null;
        public $cargo = null;
        public $salario = null;

        function exibirCadFunc(){
            return "O funcionario ".$this->__get('nome')." possui ".$this->__get('numFilhos')." filho(s)";
        }

        function __set($atributo, $valor){
            $this->$atributo = $valor;
        }
        function __get($atributo){
            return $this->$atributo;
        }

        /*function getNome(){
            return $this->nome;
        }
        function setNome($nome){
            $this->nome = $nome;
        }

        function getNumFilhos(){
            return $this->numFilhos;
        }
        function setNumFilhos($numFilhos){
            $this->numFilhos = $numFilhos;
        }*/
    }

    $func1 = new Funcionario();
    $func1->__set('nome', 'Rodrigo');
    $func1->__set('numFilhos', 3);

    echo $func1->exibirCadFunc();
?>