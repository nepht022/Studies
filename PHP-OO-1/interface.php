<?php
    interface Mamifero{
        public function respirar();
    }
    interface Terrestre{
        public function andar();
    }
    interface Aquatico{
        public function nadar();
    }

    class Humano implements Mamifero, Terrestre{
        public function conversar(){
            echo 'Conversando...';
        }

        public function respirar(){
            echo 'Respirando...';
        }
        public function andar(){
            echo 'Andando...';
        }
    }

    class Baleia implements Mamifero, Aquatico{
        public function esgichar(){
            echo 'Esgichando...';
        }

        public function respirar(){
            echo 'Respirando...';
        }
        public function nadar(){
            echo 'Nadando...';
        }
    }

    $h1 = new Humano();
    $b1 = new Baleia();
?>