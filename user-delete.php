<?php 
echo '<h1>Deletar </h1>';

$dsn = 'mysql:dbname=db_vingadores;host=127.0.0.1';
$user = 'root';
$password = '';

$banco = new PDO($dsn, $user, $password);

$id = $_GET['id'];

$delete = "DELETE FROM tb_pessoa WHERE id = :id " ;
$box = $banco->prepare($delete);
$box -> execute([
    ':id' => $id
]);


$delete = "DELETE FROM tb_usuario WHERE id_pessoa = :id " ;
$box = $banco->prepare($delete);
$box -> execute([
    ':id' => $id
]);

echo '<script> 
alert("Usuario Excluido com Sucesso!!!")
window.location.replace("user_lista.php")
</script>';
