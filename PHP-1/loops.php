<html>
    <head>
        <meta charset="utf-8">
        <title>Curso PHP 5</title>
    </head>
    <body>
        <!--Aula 339 a 345-->
        <?php
            $num1=0;
            while($num1<=10){
                echo $num1.' - ';
                $num1++;
            }
            echo '<br>';

            $num2=1;
            do{
                $num2+=$num2;
                echo $num2.' - ';
            }while($num2<100);
            echo '<br>';

            for($num3=1; $num3<500; $num3*=1.5){
                if($num3%2==0){
                    echo 'Par '.$num3.' - ';
                }else{
                    echo 'Impar '.$num3.' - ';
                }
            }
            echo '<br>';

            $letras = ['A', 'D', 'Z', 'C', 'B', 'E'];
            foreach($letras as $i){
                echo $i.' - ';
                if($i=='Z'){
                    echo 'Ultima letra do alfabeto - ';
                }
            }  
            echo '<br>';

            foreach($letras as $idx => $let){
                echo 'ID: '.$idx.' Letra: '.$let.'<br>';
                if($i=='Z'){
                    echo 'Ultima letra do alfabeto - ';
                }
            }  
            echo '<br>';

            $letras2 = [
                array('Letra'=>'A', 'Nome'=>'Alice'), 
                array('Letra'=>'D', 'Nome'=>'Daniel'),
                array('Letra'=>'Z', 'Nome'=>'Ziraldo'),
                array('Letra'=>'C', 'Nome'=>'Carla'),
                array('Letra'=>'B', 'Nome'=>'Bruno'),
                array('Letra'=>'E', 'Nome'=>'Elicio')
            ];
            foreach($letras2 as $idx => $info){
                foreach($info as $idx2 => $info2){
                    echo ' | '.$idx2.'-'.$info2.' | ';
                }
                echo '<br>';
            } 
            
        ?>
    </body>
</html>