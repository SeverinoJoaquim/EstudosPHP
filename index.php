<html>
    <head>
        <meta charset="UTF-8">
        <title></title>
    </head>
    <body>
        <?php
        include("classe_usuario.php");
        
        $objeto_usuario = new classe_usuario();
        
        $objeto_usuario->setNome("teste273");
        $objeto_usuario->setEmail("teste267@globo.com");
        $objeto_usuario->setSenha("123123");
        $objeto_usuario->setCpf("40000000044");
        
        echo $objeto_usuario->inserir();
        
        ?>
    </body>
</html>
