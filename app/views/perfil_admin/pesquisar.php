<?php

$servidor = "localhost";
$usuario = "root";
$senha = "";
$dbname = "produtos";
$conn = mysqli_connect($servidor, $usuario, $senha, $dbname);

        $pesquisar = $_POST['pesquisar'];
        $result_produtos = "select * from produtos where nome like '%$pesquisar%'";
        $resultado_produtos = mysqli_query($conn, $result_produtos);

        while ($rows_produtos = mysqli_fetch_array($resultado_produtos)){
            echo "nome do produto: ".$rows_produtos['nome']."<br>";
        }





