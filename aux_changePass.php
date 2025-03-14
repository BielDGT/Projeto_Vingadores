<?php
 
echo '<h1> Aux change pass.php </h1>';

echo '<pre>';
var_dump($_POST);
 
    $nome = $_POST['nome'];
    $cpf = $_POST['cpf'];
 
 
    $dsn = 'mysql:dbname=db_vingadores;host=127.0.0.1';
    $user = 'root';
    $password = '';

    $banco = new PDO($dsn, $user, $password);

    $queryUsuarioSenha = 'SELECT nome, cpf FROM tb_pessoa WHERE nome = "' .$nome . '" AND cpf = "' .$cpf .'"';

    $resultado = $banco-> query($queryUsuarioSenha)->fetch();
 
    var_dump ($resultado);
 
    if (!empty($resultado)&& $resultado != false){
        header ('location:update_changePass.php');
 
    }   else {
        header('location:changePass.php');
    }