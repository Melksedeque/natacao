<?php
    session_start();

    $categorias = [];
    $categorias[] = 'Infantil';
    $categorias[] = 'Adolescente';
    $categorias[] = 'Adulto';
    $categorias[] = 'Idoso';

    $nome = $_POST['nome'];
    $idade = $_POST['idade'];

    // var_dump($nome);
    // var_dump($idade);

    if(empty($nome))
    {
        $_SESSION['mensagemErro'] = 'O nome não pode ser vazio';
        header('location: index.php');
        return;
    }
    if(empty($idade))
    {
        $_SESSION['mensagemErro'] = 'A idade não pode ser vazia';
        header('location: index.php');
        return;
    }
    else if(strlen($nome) < 3)
    {
        $_SESSION['mensagemErro'] = 'Nome inválido. O nome deve conter mais de 3 caracteres';
        header('location: index.php');
        return;
    }
    else if(strlen($nome) > 50)
    {
        $_SESSION['mensagemErro'] = 'Nome inválido. O nome é muito extenso';
        header('location: index.php');
        return;
    }
    else if(!is_numeric($idade))
    {
        $_SESSION['mensagemErro'] = 'Informe um número para a idade';
        header('location: index.php');
        return;
    }


    if($idade >= 6 && $idade <= 12)
    {
        for($i = 0; $i <= count($categorias); $i++)
        {
            if($categorias[$i] == 'Infantil')
            {
                $_SESSION['mensagemSucesso'] = "O nadador ".$nome." compete na categoria ".$categorias[$i];
                header('location: index.php');
                return;
            }
        }
    }

    else if($idade >= 13 && $idade <= 18)
    {
        for($i = 0; $i <= count($categorias); $i++)
        {
            if($categorias[$i] == 'Adolescente')
            {
                $_SESSION['mensagemSucesso'] = "O nadador ".$nome." compete na categoria ".$categorias[$i];
                header('location: index.php');
                return;
            }
        }
    }

    else if($idade >= 19 && $idade <= 59)
    {
        for($i = 0; $i <= count($categorias); $i++)
        {
            if($categorias[$i] == 'Adulto')
            {
                $_SESSION['mensagemSucesso'] = "O nadador ".$nome." compete na categoria ".$categorias[$i];
                header('location: index.php');
                return;
            }
        }
    }

    else
    {
        for($i = 0; $i <= count($categorias); $i++)
        {
            if($categorias[$i] == 'Idoso')
            {
                $_SESSION['mensagemSucesso'] = "O nadador ".$nome." compete na categoria ".$categorias[$i];
                header('location: index.php');
                return;
            }
        }
    }
?>