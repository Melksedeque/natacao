<?php

    function validaNome(string $nome) : bool
    {
        if(empty($nome))
        {
            setMensagemErro('O nome não pode ser vazio');
            return false;
        }
        else if(strlen($nome) < 3)
        {
            setMensagemErro('Nome inválido. O nome deve conter mais de 3 caracteres');
            return false;
        }
        else if(strlen($nome) > 50)
        {
            setMensagemErro('Nome inválido. O nome é muito extenso');
            return false;
        }
        return true;
    }

    function validaIdade(string $idade) : bool
    {
        if(empty($idade))
        {
            setMensagemErro('A idade não pode ser vazia');
            return false;
        }
        
        else if(!is_numeric($idade))
        {
            setMensagemErro('Informe um número para a idade');
            return false;
        }
        return true;
    }
    
?>