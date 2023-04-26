<html>
    <head>
        <meta charset="utf-8">
        <title>Curso PHP 2</title>
    </head>
    <body>
        <!--Aula 312 a 326-->
        <?php
            $num = 2;
            if(2 == $num and $num < 5){ //xor = 1 verdadeira e 1 falsa
                echo 'TRUE';
            }else{
                echo 'FALSE';
            }
            echo '<br>';

            $paridade = $num%2==0 ? 'Par' : 'Impar'; // se o resto da divisao de 2 por 0 for 0, $paridade recebe par, senao, impar
            echo $paridade;
            echo '<br>';

            switch($num){
                case 1: echo 'Um';
                    break;
                case 2: echo 'Dois';
                    break;
                case 3: echo 'Três';
                    break;
                default: echo 'Maior que três';
                    break;
            }
            echo '<br>';

            echo gettype($num).'<br>';
            $num = (float)$num;
            echo gettype($num).'<br>';
            $num = (string)$num;
            echo gettype($num).'<br>';
        ?>
    </body>
</html>