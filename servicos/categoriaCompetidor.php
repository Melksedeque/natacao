<?php

    function setCategoriaCompetidor(string $nome, string $idade) : ?string
    {
        $categorias = [];
        $categorias[] = 'Infantil';
        $categorias[] = 'Adolescente';
        $categorias[] = 'Adulto';
        $categorias[] = 'Idoso';

        if(validaNome($nome) && validaIdade($idade))
        {
            removeMensagemErro();
            if($idade >= 6 && $idade <= 12)
            {
                for($i = 0; $i <= count($categorias); $i++)
                {
                    if($categorias[$i] == 'Infantil')
                    {
                        setMensagemSucesso('O nadador '.$nome.' compete na categoria '.$categorias[$i]);
                        return null;
                    }
                }
            }

            else if($idade >= 13 && $idade <= 18)
            {
                for($i = 0; $i <= count($categorias); $i++)
                {
                    if($categorias[$i] == 'Adolescente')
                    {
                        setMensagemSucesso('O nadador '.$nome.' compete na categoria '.$categorias[$i]);
                        return null;
                    }
                }
            }

            else if($idade >= 19 && $idade <= 59)
            {
                for($i = 0; $i <= count($categorias); $i++)
                {
                    if($categorias[$i] == 'Adulto')
                    {
                        setMensagemSucesso('O nadador '.$nome.' compete na categoria '.$categorias[$i]);
                        return null;
                    }
                }
            }

            else
            {
                for($i = 0; $i <= count($categorias); $i++)
                {
                    if($categorias[$i] == 'Idoso')
                    {
                        setMensagemSucesso('O nadador '.$nome.' compete na categoria '.$categorias[$i]);
                        return null;
                    }
                }
            }
        }
        else {
            removeMensagemSucesso();
            return getMensagemErro();
        }
    }
    
?>