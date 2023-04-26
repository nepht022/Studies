<html>
    <head>
        <meta charset="utf-8">
        <title>Curso PHP 1</title>
    </head>
    <body>
        <!--Aula 300 a 311-->
        <?= //tag para impressao dentro do html
            'Utilizando a tag impressao'
        ?>
        <br>
        <?php //tag padrao para php
            echo 'Utilizando a tag padrao no echo.<br>';//printa na tela
            print 'No print.<br>';

            $nome = 'Rodrigo';//string
            $sobrenome = ' Freire';
            $idade = 23;//int
            $peso = 54.5;//float
            $fumante = false;//boolean, true=1 e false=void

            define('URL', 'http://www.google.com');//variavel constante 
            echo URL;
        ?>
        <h1>Ficha Cadastral</h1>
        <br>
        <p><?php echo 'Nome: ' . $nome . $sobrenome?></p><!--concatenação através do '.'-->
        <p><?php print "Idade: $idade anos" ?></p>
        <p>Peso: <?= $peso ?></p>
        <p>Fumante: <?php if($fumante==true){echo 'True';}else{echo 'False';} ?></p>
    </body>
</html>