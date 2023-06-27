<?php
    
    if(isset($_POST['cadastrar'])) {
        $nome = $_POST['nome'];
        $cpf = $_POST['cpf'];
        $senha = $_POST['senha'];
        $check_senha = $_POST['check-senha'];
    }



    if($senha != $check_senha){
        die("As senhas não correspondem")

    }

    $hostname = "localhost";
    $bancodedados = "clientes";
    $usuario = "root";
    $senha  = "";

     $mysqli = new mysqli($hostname, $usuario, $senha, $bancodedados);



    $sql = "INSERT INTO clientes (nome, cpf, senha) VALUES('$nome' , '$cpf' '$senha')";
    
    $rs = mysqli_query($con, $sql);

    if($rs){
        echo "Você foi cadastrado com sucesso. ";
    }


 
     



?>