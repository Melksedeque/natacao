<?php
    $categorias = [];
    $categorias[] = 'Infantil';
    $categorias[] = 'Adolescente';
    $categorias[] = 'Adulto';
    $categorias[] = 'Idoso';

    $nome = 'Eduardo';
    $idade = 8;

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
?> 