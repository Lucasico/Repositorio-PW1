<html>  
    <head>
        <title>form</title>
    </head>
    <body>

        <form action="autentifica.php" method="POST">
            Login: <input type="text" name="login">
            Senha: <input type="password" name="senha">
            <input type="submit" name="enviar">
        </form>

    </body>
</html>
<?php
    if(isset($_GET['msg'])){
        $erro = $_GET['msg'];
        echo $erro;
    }
?>
