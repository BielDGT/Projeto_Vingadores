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
    <h1>Trocar senha</h1>
    <p>Insira o nome e cpf para trocar senha</p>
    <form action="./aux_changePass.php" method="POST">

        <div class="row mt-2">
            <div class="col">
                <label for="nome">Nome</label>
                <input type="text" name="nome" class="form-control">
            </div>
            <div class="col">
                <label for="cpf">CPF</label>
                <input type="text" name="cpf" class="form-control">
            </div>
        </div>
        <br>
        <input class="btn btn-danger" type="submit">

    </form>
    <a class="btn btn-primary" href="./index.php">Voltar</a>

</main>