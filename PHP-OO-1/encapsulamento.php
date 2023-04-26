<?php
    class Pai{
        private $nome = 'Jorge';
        protected $sobrenome = 'Silva';
        public $humor = 'Feliz';

        public function __get($atributo){//o atributo pode ser acessado diretamente que o metodo get é chamado debaixo dos panos
            return $this->$atributo;
        }
        public function __set($atributo, $value){
            $this->$atributo = $value;
        }

        private function executarMania(){
            echo 'Assobiar'.'<br>';
        }
        protected function responder(){
            echo 'Oi'.'<br>';
        }
        public function executarAcao(){
            $x = rand(1, 10);
            if($x%2==0){
                echo $x.'<br>';
                $this->executarMania();
            }else if($x%2!=0){
                echo $x.'<br>';
                $this->responder();
            }
        }
    }

    class Filho extends Pai{
        public function getAtributo($atributo){
            return $this->$atributo;
        }
        public function setAtributo($atributo, $value){
            $this->$atributo = $value;
        }

        
    }

    $p1 = new Pai();
    echo $p1->humor.'<br>';
    $p1->executarAcao();//só métodos publicos podem ser chamados

    $f1 = new Filho();
    echo $f1->getAtributo('humor');//o atributo do pai publico e protegido pode ser acessado normalmente
    echo $f1->getAtributo('sobrenome');
    echo $f1->getAtributo('nome');//o privado nao

    echo $f1->setAtributo('nome', 'Carlos');//porem, ao mudar o valor do atributo privado, outro é criado
    echo $f1->getAtributo('nome');//permitindo que o mesmo seja acessado

?>