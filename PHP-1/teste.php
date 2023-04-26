<html>
    <head>
        <meta charset="utf-8">
        <title>Curso PHP Teste</title>
    </head>
    <body>
        <?php
        $mega = Array();
        for($x=1;$x<=6;$x++){
            do{
                $num = rand(1, 60);
            }while(in_array($num, $mega));  
            array_push($mega, $num);
        }
        echo '<pre>';
        print_r($mega);
        echo '</pre> <br>';
        ?>
    </body>
</html>