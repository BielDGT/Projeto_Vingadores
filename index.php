<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <link rel="stylesheet" href="./assets/css/style.css">

</head>

<body>
    <main>
        <div class="login-container" >
            <div class="form-container">

                <form class="form form-login" action="./aux_login.php" method="POST">
                    <h2 class="form-title">Entrar</h2>
                    
                    <div class="form-input-container">
                        <input type="text" name="user" class="form-input" placeholder="Usuario" required autofocus>
                        <input type="password" name="pass" class="form-input" placeholder="Senha" maxlength="8" required autofocus>
                    </div>
                    <a href="./changePass.php" class="form-link">Esqueceu a senha?</a>
                    <input type="submit" class="form-button" value="Entrar">
                </form>

                <form class="form form-register" action="./user_cadastro.php" method="POST">
                    <h2 class="form-title">Cadastrar</h2>
                    <div class="form-input-container">
                            <input type="text" class="form-input" placeholder="Nome de Usuario" name="user" required>
                            <input type="password" class="form-input" placeholder="Senha" name="senha" maxlength="8" minlength="8" required>
                            
                            <input type="text" class="form-input" placeholder="Nome Completo" name="nome" required>
                            <input type="date" class="form-input" placeholder="Nascimento" name="nasc" required>
                            <input type="text" class="form-input" placeholder="CPF" name="cpf" maxlength="14">
                            <input type="text" class="form-input" placeholder="Telefone 1" name="tel1" required>
                            <input type="text" class="form-input" placeholder="Telefone 2" name="tel2" >
                            <input type="text" class="form-input" placeholder="Logradouro" name="log" required>
                            <input type="number" class="form-input" placeholder="Numero da casa" name="n_casa" maxlength="5" required>
                            <input type="text" class="form-input" placeholder="Bairro" name="bairro" required>
                            <input type="text" class="form-input" placeholder="Cidade" name="cidade" required>
                            <input type="submit" class="form-button" value="Cadastrar">
                    </div>
                </form>
            </div>
        </div>
    </main>

</body>


</html>