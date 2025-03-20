<?php
 
echo '<h1> AuxLogin.php </h1>';

echo '<pre>';
var_dump($_POST);
 
    $userCad = $_POST['user'];
    $passwordCad = $_POST['pass'];
 
 
    $dsn = 'mysql:dbname=db_vingadores;host=127.0.0.1';
    $user = 'root';
    $password = '';

    $banco = new PDO($dsn, $user, $password);

    $queryUsuarioSenha = 'SELECT * FROM tb_usuario WHERE usuario = "' .$userCad . '"AND senha = "' .$passwordCad .'"';
    // var_dump($queryUsuarioSenha);
    //echo somente para visualizar
    //echo $queryUsuarioSenha;
    //fetch para uma consulta unica, fetchAll para varios campos;
    //quase sempre se le de tras pra frente = resultado do meu scrip do meu banco;
    $resultado = $banco-> query($queryUsuarioSenha)->fetch();
 
    $status = $resultado['status'];
 
?>

<?php if ($status == 'admin'){ ?>

    <h1>Bem Vindo Usuario ADMIN</h1>

<?php } ?>



<?php if ($status == 'comum'){ ?>

    <h1>Bem Vindo Usuario COMUM</h1>

<?php } ?>








<?php
    die;
    if (!empty($resultado)&& $resultado != false){
        header ('location:user_lista.php');
 
    }   else {
        header('location:index.php');
    }