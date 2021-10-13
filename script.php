<?php
    $categorias = [];
    $categorias[] = 'Infantil';
    $categorias[] = 'Adolescente';
    $categorias[] = 'Adulto';
    $categorias[] = 'Idoso';

    $nome = $_POST['nome'];
    $idade = $_POST['idade'];

    // var_dump($nome);
    // var_dump($idade);

    if(empty($nome) || empty($idade))
    {
        echo "Por favor, preencha todos os campos";
        return;
    }
    if(strlen($nome) < 3)
    {
        echo "Nome inválido. O nome deve conter mais de 3 caracteres";
        return;
    }
    if(strlen($nome) > 50)
    {
        echo "Nome inválido. O nome é muito extenso";
        return;
    }
    if(!is_numeric($idade))
    {
        echo "Informe um número para a idade";
        return;
    }


    if($idade >= 6 && $idade <= 12)
    {
        for($i=0; $i<=count($categorias); $i++)
        {
            if($categorias[$i] == 'Infantil')
            {
                echo "O nadador ".$nome." compete na categoria ".$categorias[$i];
            }
        }
    }

    else if($idade >= 13 && $idade <= 18)
    {
        for($i=0; $i<=count($categorias); $i++)
        {
            if($categorias[$i] == 'Adolescente')
            {
                echo "O nadador ".$nome." compete na categoria ".$categorias[$i];
            }
        }
    }

    else if($idade >= 19 && $idade <= 59)
    {
        for($i=0; $i<=count($categorias); $i++)
        {
            if($categorias[$i] == 'Adulto')
            {
                echo "O nadador ".$nome." compete na categoria ".$categorias[$i];
            }
        }
    }

    else
    {
        for($i=0; $i<=count($categorias); $i++)
        {
            if($categorias[$i] == 'Idoso')
            {
                echo "O nadador ".$nome." compete na categoria ".$categorias[$i];
            }
        }
    }
?>