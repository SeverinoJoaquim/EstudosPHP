<?php

function mensagem_javascript($mensagem, $redirecionamento){
    echo "<script type='text/javascript'>";
    echo "alert('$mensagem');";
    if ($redirecionamento != ""){
        echo "window.location.assign('$redirecionamento');";
    }
    echo "</script>";
}

function executar_query($comando) {
    include('conectar_bd.php');
    $resposta = $PDO->query($comando);
    return $resposta;
}