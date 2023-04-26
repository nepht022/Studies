<html>
    <head>
        <meta charset="utf-8">
        <title>Curso PHP 4</title>
    </head>
    <body>
        <!--Aula 333 a 338-->
        <?php
            //array sequencial
            $lista_frutas = array('Maçã', 'Morango', 'Uva');//array() ou []
            $lista_frutas[] = 'Abacaxi';

            echo '<pre>';
            var_dump($lista_frutas);
            echo '</pre> <br>';

            echo '<pre>';//deixa o array formatado
            print_r($lista_frutas);
            echo '</pre> <br>';

            echo $lista_frutas[2];


            //array associativo
            $lista_pizzas = ['A' => 'Calabresa', '2' => 'Marguerita', 'B' => 'Presunto'];
            $lista_pizzas['X'] = 'Portuguesa';
            echo '<pre>';
            var_dump($lista_pizzas);
            echo '</pre> <br>';


            //array multidimensional
            $lista_comidas1 = [
                $lista_carnes=['Patinho', 'Xande-Dentro', 'Picanha'], 
                "Salgados"=>['Coxinha', 'Quibe', 'Risoli', 'Camarao']
            ];
            echo $lista_carnes[2];

            $lista_comidas2['Carnes'] = ['Patinho', 'Xande-Dentro', 'Picanha'];
            $lista_comidas2['Salgados'] = ['Coxinha', 'Quibe', 'Risoli', 'Camarao'];
            echo $lista_comidas2['Carnes'][2];

            echo '<pre>';
            var_dump($lista_comidas1);
            echo '</pre> <br>';
            echo '<pre>';
            var_dump($lista_comidas2);
            echo '</pre> <br>';


            //pesquisas em array
            if(in_array('Abacaxi', $lista_frutas)){//retorna true or false(1 or void)
                echo 'True<br>';
            }else{
                echo 'False<br>';
            }
            
            $contem = array_search('Uva', $lista_frutas);
            if($contem!=null){//retorna a posição no array ou nullcaso nao exista
                echo $lista_frutas[$contem].' contido na posição '.$contem.'<br>';
            }else{
                echo 'Nao existe no array<br>';
            }

            //pesquisas em array multidimensional
            if(in_array('Quibe', $lista_comidas2['Salgados'])){
                echo 'True<br>';
            }else{
                echo 'False<br>';
            }


            //funções nativas
            echo is_array($lista_frutas).'<br>';// retorna true(1) ou false(void) para ser array
            print_r(array_keys($lista_pizzas));//retorna as chaves e suas posições do array
            echo '<br>';

            sort($lista_frutas);//reordena alfabeticamente os itens dentro do array
            //asort() reordena alfabeticamente mantendo os indices iguais
            print_r($lista_frutas);
            echo '<br>';

            echo count($lista_frutas).'<br>';

            $lista_comidas0 = array_merge($lista_frutas, $lista_pizzas);//funde os arrays
            print_r($lista_comidas0);
            echo '<br>';

            $string = '17/02/2023';
            print_r(explode('/', $string));//separa uma string por um delimitador, transformando em array
            echo '<br>';

            echo implode('-', $lista_pizzas);//junta os itens de um array em uma string
            echo '<br>';
        ?>
    </body>
</html>