<?php
    class Veiculo{
        public $placa = null;
        public $cor = null;

        function acelerar(){
            echo 'Veiculo Acelerando...';
        }
    }

    class Carro extends Veiculo{
        public $tetoSolar = true;

        public function __construct($placa, $cor){
            $this->placa = $placa;
            $this->cor = $cor;
        }

        function abrirTetoSolar(){
            echo 'Teto solar aberto';
        }
    }

    class Moto extends Veiculo{
        public $contraPesoGuidao = true;

        public function __construct($placa, $cor){
            $this->placa = $placa;
            $this->cor = $cor;
        }

        function empinar(){
            echo 'Empinando...';
        }
    }

    $c1 = new Carro('ABC1234', 'Branco');
    $c1->acelerar();
    echo '<br>';
    $m1 = new Moto('XXY5676', 'Preto');
    $m1->acelerar();
?>