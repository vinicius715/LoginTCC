<?php
session_start();
?>
<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
    <link rel="stylesheet" href="./assets/css/style.css">

</head>

<body>

    <section>

        <img class="form-login" src="./assets/images/thumbnail.jpg"
            alt="Logo ItemSwitch">

        <div>
            <h1 id="title">Bem vindo ao ItemSwitch</h1>
            <form action="login.php" method="POST">
                <label for="email">E-mail</label>
                <input type="email" name="email" placeholder="Digite seu e-mail" autofocus"">

                <label for="password">Senha</label>
                <input type="password" name="senha" placeholder="Digite sua senha"> 
                
                <button type="submit">Entrar</button>
                <button type="submit" formaction="formulario.php">Inscrever-se</button>

            </form>
        </div>
    </section>
</body>

</html>