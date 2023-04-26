<?php
    require('bibliotecas/lib1/lib1.php');
    require('bibliotecas/lib2/lib2.php');

    use B\Cliente as B;
    use A\Cliente as A;

    $c1 =  new B();
    echo $c1->__get('nome');
?>