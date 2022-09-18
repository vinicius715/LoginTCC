<?php
include('verif_login.php')
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
        <div>
            <h1 id="title"> Bem vindo, proprietário do email "<?php echo $_SESSION['email']; ?>" </h1>
            <form action="logout.php">
                <button type="submit">Sair </button>
            </form>
        </div>
    </section>
</body> 
</html>