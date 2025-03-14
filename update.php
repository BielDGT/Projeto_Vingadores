<?php 

echo '<h1> Update </h1>';

echo '<pre>';
var_dump($_POST);
var_dump($_GET);

$dsn = 'mysql:dbname=db_vingadores;host=127.0.0.1';
$user = 'root';
$password = '';

$banco = new PDO($dsn, $user, $password);

$id = $_POST['id'];
$user = $_POST['user'];
$pass = $_POST ['pass'];

$update = 'UPDATE tb_usuario SET usuario = :user, senha = :pass WHERE id_pessoa = :id';

$box = $banco->prepare($update);

$box->execute([ 
    ':id' => $id,
    ':user' => $user,
    ':pass' => $pass,
]);


$nome = $_POST['nome'];
$nasc = $_POST['nasc'];
$cpf = $_POST['cpf'];
$tel1 = $_POST['tel1'];
$tel2 = $_POST['tel2'];
$lograd = $_POST['lograd'];
$n_casa = $_POST['n_casa'];
$bairro = $_POST['bairro'];
$cidade = $_POST['cidade'];

$update = 'UPDATE tb_pessoa  SET nome = :nome, ano_nascimento = :nasc, cpf = :cpf, telefone_1 = :tel1, telefone_2 = :tel2, logradouro = :lograd, n_casa = :n_casa, bairro = :bairro, cidade = :cidade WHERE id = :id' ;

$box = $banco->prepare($update);

$box->execute([ 
    ':id' => $id,
    ':nome' => $nome,
    ':nasc' => $nasc,
    ':cpf' => $cpf,
    ':tel1' => $tel1,
    ':tel2' => $tel2,
    ':lograd' => $lograd,
    ':n_casa' => $n_casa,
    ':bairro' => $bairro,
    ':cidade' => $cidade,
    
]);