<?php

    include "servicos/mensagemSessao.php";
    include "servicos/validacao.php";
    include "servicos/categoriaCompetidor.php";

    $nome = $_POST['nome'];
    $idade = $_POST['idade'];

    // var_dump($nome);
    // var_dump($idade);

    setCategoriaCompetidor($nome, $idade);

    header('location: index.php');

?>