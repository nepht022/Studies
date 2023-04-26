<?php
    if(!empty($_POST['usuario']) && !empty($_POST['senha'])){
        //print_r($_POST);

        $dsn = ('mysql:host=localhost;dbname=db_php_pdo');
        $login = 'root';
        $senha = '';

        try{
            //abrindo conexao com o banco
            $conexao = new PDO($dsn, $login, $senha);
            //comando a ser executado
            /*$query = '
                CREATE TABLE IF NOT EXISTS tb_usuarios(
                    id int not null PRIMARY KEY AUTO_INCREMENT,
                    nome varchar(50) not null,
                    email varchar(100) not null,
                    senha varchar(32) not null
                )
            ';
            
            //executando o comando
            $conexao->exec($query);*///exec() ou query()
    
            $query = "select * from tb_usuarios where ";
            $query .= " email = :usuario";
            $query .= " AND senha = :senha";

            $statment = $conexao->prepare($query);

            $statment->bindValue(':usuario', $_POST['usuario']);//cria uma ligação com a consulta para verifica-la
            $statment->bindValue(':senha', $_POST['senha'], PDO::PARAM_INT);

            $statment->execute();//executa
            $usuario = $statment->fetch();//recupera o primeiro valor após a execução

            echo '<pre>';
            print_r($usuario);
            echo '</pre>';
    
            /*foreach($statment as $key => $value){
                print_r($value['nome']);
                echo '<hr>';
            }*/
    
            //retorna o resultado da consulta
            //$lista = $statment->fetchAll(PDO::FETCH_ASSOC); //fetchAll usado para listas e fetch para um só
            //$usuario = $statment->fetch(PDO::FETCH_OBJ);
    
            //FETCH_ASSOC = indices associativos
            //FETCH_NUM = indices numericos
            //FETCH_OBJ = sai do array e vira um objeto
    
            /*foreach($lista as $value){
                print_r($value);
                echo '<hr>';
            }*/
        }catch(PDOException $e){
            echo 'Message: '.$e->getMessage().'<br>';
            echo 'ERROR: '.$e->getCode();
        }
    }   
?>

<html lang="pt-br">
    <head>
        <meta charset="utf-8">
        <title>Injection</title>
    </head>
    <body>
        <form method="post" action="index.php">
            <input type="text" placeholder="Usuário" name='usuario'><br>
            <input type="password" placeholder="Senha" name='senha'><br>
            <button type='submit'>Login</button>
        </form>
    </body>
</html>