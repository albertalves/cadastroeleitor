<?php
session_start();
?>
<!DOCTYPE html>
<html>
    
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Login</title>
    <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,400,700" rel="stylesheet">
    <link rel="stylesheet" href="assets/css/bulma.min.css" />
    <link rel="stylesheet" type="text/css" href="assets/css/login.css">
</head>

<body>
    <section class="hero is-success is-fullheight">
        <div class="hero-body">
            <div class="container has-text-centered">
                <div class="column is-4 is-offset-4">
                    <h3 class="title has-text-white">Login</h3>
                    <div class="box">
                    <form method="POST" action="receber_login.php">
                    <div class="field">
                    <div class="control">
                    <input type="text" name="usuario" class="input is-large" placeholder="Seu usuário">
                    </div>
                    </div>
                    <div class="field">
                    <div class="control">
                    <input type="text" name="senha" class="input is-large" type="password" placeholder="Sua senha">
                    </div>
                    </div>
                    <div class="field">
                    <div class="control">
                    <input type="text" name="confirm_senha" class="input is-large" type="password" placeholder="Confirme a senha">
                    </div>
                    </div>
                    <button type="submit" class="button is-block is-primary is-large is-fullwidth">Entrar</button>
                    </form>
                    </div>
                    <?php
                    if (isset($_SESSION['msg'])) {
                        echo $_SESSION['msg'];
                        unset($_SESSION['msg']);
                    }
                ?>
</div>
</div>
</div>
</section>
</body>
</html>