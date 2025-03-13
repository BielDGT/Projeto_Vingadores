<?php 

echo '<h1> Cadastro de cliente </h1>';

echo '<pre>';
var_dump($_POST);

$dsn = 'mysql:dbname=db_vingadores;host=127.0.0.1';
$user = 'root';
$password = '';

$banco = new PDO($dsn, $user, $password);




$user = $_POST['user'];
$senha = $_POST['senha'];
$id_pessoa = $banco->lastInsertId();

$insert = 'INSERT INTO tb_usuario (usuario, senha, id_pessoa) VALUE (:user , :senha, :id_pessoa)';

$box = $banco->prepare($insert);

$box->execute([ 
    ':user' => $user,
    ':senha' => $senha,
    ':id_pessoa' => $id_pessoa,
]);



$nome = $_POST['nome'];
$nasc = $_POST['nasc'];
$cpf = $_POST['cpf'];
$tel1 = $_POST['tel1'];
$tel2 = $_POST['tel2'];
$log = $_POST['log'];
$n_casa = $_POST['n_casa'];
$bairro = $_POST['bairro'];
$cidade = $_POST['cidade'];

$insert = 'INSERT INTO tb_pessoa (nome, ano_nascimento, cpf, telefone_1, telefone_2, logradouro, n_casa, bairro, cidade) 
VALUE (:nome, :nasc, :cpf, :tel1, :tel2, :logr, :n_casa, :bairro, :cidade)';

$box = $banco->prepare($insert);

$box->execute([ 
    ':nome' => $nome,
    ':nasc' => $nasc,
    ':cpf' => $cpf,
    ':tel1' => $tel1,
    ':tel2' => $tel2,
    ':logr' => $log,
    ':n_casa' => $n_casa,
    ':bairro' => $bairro,
    ':cidade' => $cidade,
]);