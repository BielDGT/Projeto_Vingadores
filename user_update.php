<?php
echo '<h1> Update </h1>';
$id_alunos = $_GET['id'];

$dsn = 'mysql:dbname=db_vingadores;host=127.0.0.1';
$user = 'root';
$password = '';

$banco = new PDO($dsn, $user, $password);

$select = "SELECT tb_pessoa.*, tb_usuario.usuario, tb_usuario.senha FROM tb_pessoa INNER JOIN tb_usuario ON tb_pessoa.id = tb_usuario.id_pessoa WHERE tb_usuario.id_pessoa =  " . $id_alunos;

$dados = $banco->query($select)->fetch();

// echo '<pre>';
// var_dump($dados);

?>

<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">

<style>
    main {
        display: flex;
        flex-direction: column;
        align-items: center;
    }

    form {
        width: 600px;
    }

    img {
        width: 200px;
        object-fit: cover;
    }
</style>


<main class="container text-center my-5">
    <form action="update.php" method="POST">
        <input type="hidden" value="<?php echo $id_alunos ?>" name="id">
        <div class="row mt-2">
            <div class="col">
                <label for="nome">Nome</label>
                <input type="text" value="<?php echo $dados['nome'] ?>" name="nome" class="form-control">
            </div>
            <div class="col">
                <label for="ano_nascimento">Ano</label>
                <input type="text" value="<?php echo $dados['ano_nascimento'] ?>" name="nasc" class="form-control">
            </div>
        </div>

        <div class="row mt-2">
            <div class="col">
                <label for="cpf">CPF</label>
                <input type="text" value="<?php echo $dados['cpf'] ?>" name="cpf" class="form-control">
            </div>
            <div class="col">
                <label for="telefone_1">Telefone 1</label>
                <input type="number" value="<?php echo $dados['telefone_1'] ?>" name="tel1" class="form-control">
            </div>
        </div>

        <div class="row mt-2">
            <div class="col">
                <label for="telefone_2">Telefone 2</label>
                <input type="number" value="<?php echo $dados['telefone_2'] ?>" name="tel2" class="form-control">
            </div>
            <div class="col">
                <label for="logradouro">Logradouro</label>
                <input type="text" value="<?php echo $dados['logradouro'] ?>" name="lograd" class="form-control">
            </div>
        </div>

        <div class="row mt-3">
            <div class="col">
                <label for="n_casa">N° casa</label>
                <input type="number" value="<?php echo $dados['n_casa'] ?>" name="n_casa" class="form-control">
            </div>
            <div class="col">
                <label for="bairro">Bairro</label>
                <input type="text" value="<?php echo $dados['bairro'] ?>" name="bairro" class="form-control">
            </div>
            <div class="col">
                <label for="cidade">Cidade</label>
                <input type="text" value="<?php echo $dados['cidade'] ?>" name="cidade" class="form-control">
            </div>
        </div>

        <div class="row mt-2">
            <div class="col">
                <label for="usuario">Usuario</label>
                <input type="text" value="<?php echo $dados['usuario'] ?>" name="user" class="form-control">
            </div>
            <div class="col">
                <label for="senha">Senha</label>
                <input type="text" value="<?php echo $dados['senha'] ?>" name="pass" class="form-control">
            </div>
        </div>
        <div class="row mt-2">
            <input class="col btn btn-danger" type="submit" class="form-control">
            <a class="col btn btn-primary" href="./user_lista.php">Voltar</a>
        </div>
    </form>

</main>