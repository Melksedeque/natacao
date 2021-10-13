<?php
    include "servicos/mensagemSessao.php";
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Competição de Natação</title>
    <link rel="icon" href="/img/icon.png" type="image/x-icon" />
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <link rel="stylesheet" href="/css/style.css">
</head>
<body>
    <section>
        <h2>Inscrição de novos competidores</h2>
        <form action="script.php" method="post">
            <?php
                $mensagemErro = getMensagemErro();
                if(!empty($mensagemErro))
                {
                    echo '<div class="alert alert-danger text-center mb-3">'.$mensagemErro.'</div>';
                }

                $mensagemSucesso = getMensagemSucesso();
                if(!empty($mensagemSucesso))
                {
                    echo '<div class="alert alert-success text-center mb-3">'.$mensagemSucesso.'</div>';
                }
            ?>
            <label for="nome" class="sr-only">Seu nome:</label>
            <input type="text" class="form-control mb-4" name="nome" class="nome" placeholder="Nome">

            <label for="idade" class="sr-only">Sua idade:</label>
            <input type="text" class="form-control mb-4" name="idade" class="idade" placeholder="Idade">

            <button type="submit" class="btn btn-primary">Enviar dados</button>
        </form>
    </section>

    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
</body>
</html>