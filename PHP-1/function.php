<html>
    <head>
        <meta charset="utf-8">
        <title>Curso PHP 3</title>
    </head>
    <body>
        <!--Aula 327 a 332-->
        <?php
            function exibirBoasVindas(){
                echo 'Bem vindo!<br>';
            }
            exibirBoasVindas();

            function calcularAreaTerreno($largura, $comprimento){
                return $largura * $comprimento;
            }
            $area = calcularAreaTerreno(8, 4);
            echo $area.'<br>';


            //String
            $frase = 'Olá, tudo bem? Bem Vindo(a)!!';
            echo $frase.'<br>';
            echo strtolower($frase.'<br>');
            echo strtoupper($frase.'<br>');
            echo ucfirst($frase.'<br>');//primeiro carracter maiusculo
            echo str_replace('bem', 'mal', $frase.'<br>');
            echo substr($frase, 5, 9).'<br>';//a partir da posição 5, os proximos 9 caracteres, contando o 5
            echo strlen($frase).'<br>';
            echo '<br>';

            //Matematica
            $num=8.45;
            echo $num.'<br>';
            echo ceil($num).'<br>';
            echo floor($num).'<br>';
            echo round($num).'<br>';//arredondamento pra baixo ou cima dependendo da parte decimal
            echo rand(0, 10).'<br>';//numero aleatorio
            echo sqrt($num).'<br>';
            echo '<br>';

            //Data
            echo date('d/m/y - H:i').'<br>';
            echo date_default_timezone_get().'<br>';
            echo date_default_timezone_set('America/Sao_Paulo');
            echo date('d/m/y - H:i').'<br>';

            $data_i = '2018-04-24';
            $data_f = '2018-05-15';

            $time_i = strtotime($data_i);
            $time_f = strtotime($data_f);

            $time_dif = abs($time_f - $time_i);//funcao retorna valor absoluto
            echo $time_dif/(24*3600).' Dias<br>';
        ?>
    </body>
</html>