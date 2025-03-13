<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>

    <link rel="stylesheet" href="./assets/css/style.css">

</head>

<body>
    <main>
        <div class="login-container" id="login-container">
            <div class="form-container">

                <form class="form form-login">
                    <h2 class="form-title">Entrar</h2>
                    
                    <div class="form-input-container">
                        <input type="text" class="form-input" placeholder="Usuario">
                        <input type="password" class="form-input" placeholder="Senha">
                    </div>

                    <a href="#" class="form-link">Esqueceu a senha?</a>
                    <a href="#"class="form-button">Entrar</a>
                </form>

                <form class="form form-register" action="./user_cadastro.php" method="POST">
                    <h2 class="form-title">Cadastrar</h2>
                    <div class="form-input-container">
                            <input type="text" class="form-input" placeholder="Nome de Usuario" name="user">
                            <input type="password" class="form-input" placeholder="Senha" name="senha">
                            
                            <input type="text" class="form-input" placeholder="Nome Completo" name="nome">
                            <input type="date" class="form-input" placeholder="Nascimento" name="nasc">
                            <input type="text" class="form-input" placeholder="CPF" name="cpf">
                            <input type="text" class="form-input" placeholder="Telefone 1" name="tel1">
                            <input type="text" class="form-input" placeholder="Telefone 2" name="tel2">
                            <input type="text" class="form-input" placeholder="Logradouro" name="log">
                            <input type="number" class="form-input" placeholder="Numero da casa" name="n_casa">
                            <input type="text" class="form-input" placeholder="Bairro" name="bairro">
                            <input type="text" class="form-input" placeholder="Cidade" name="cidade">
                            <input type="submit" class="form-button">
                    </div>
                </form>
            </div>
        </div>
    </main>

</body>


</html>