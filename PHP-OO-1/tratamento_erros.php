<?php
    try{
        echo '<h3> Try... </h3>';

        $sql = 'Select * from cliente';

        //mysql_query($sql); //se houver erro passa pelo catch
        if(!file_exists('arquivo_a.php')){
            throw new Exception('O arquivo nao está disponível');
        }
    }catch(Error $e){
        echo '<h3> Catch Error... </h3>';
        echo $e;
    }catch(Exception $e){
        echo '<h3> Catch Exception... </h3>';
        echo $e;
    }finally{
        echo '<h3> Finally... </h3>';
    }
    echo '<hr>';
?>

<?php
//erros customizados
    class myException extends Exception{
        private $erro = '';

        public function __construct($erro){
             $this->erro = $erro;
        }

        public function exibirMsg(){
            echo '<div style="width:100px; color: red; padding: 15px; background-color: black; border: 2px solid red; font-weight: bold;">';
                echo $this->erro;
            echo '</div>';
        }
    }

    try{
        throw new myException('Erro de teste');
    }catch(myException $e){
        echo $e;
        $e->exibirMsg();
    }
?>