<?php
    session_start();

    function setMensagemErro(string $mensagem) : void
    {
        $_SESSION['mensagemErro'] = $mensagem;
    }

    function setMensagemSucesso(string $mensagem) : void
    {
        $_SESSION['mensagemSucesso'] = $mensagem;
    }

    function getMensagemErro() : ?string
    {
        if(isset($_SESSION['mensagemErro']))
        {
            return $_SESSION['mensagemErro'];
        }
        return null;
    }

    function getMensagemSucesso() : ?string
    {
        if(isset($_SESSION['mensagemSucesso']))
        {
            return $_SESSION['mensagemSucesso'];
        }
        return null;
    }

    function removeMensagemErro() : void
    {
        if(isset($_SESSION['mensagemErro']))
        {
            unset($_SESSION['mensagemErro']);
        }
    }

    function removeMensagemSucesso() : void
    {
        if(isset($_SESSION['mensagemSucesso']))
        {
            unset($_SESSION['mensagemSucesso']);
        }
    }
?>