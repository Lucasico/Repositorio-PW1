<html>  
    <head>
        <title>form</title>
    </head>
    <body>

        <form action="processa.php" method="POST">
            <label>Nome completo:</label><br>
            <input type="text" name="nome"><br>

            <label>Email:</label><br>
            <input type="text" name="email"><br>

            <label>Telefone1:</label><br>
            <input type="text" name="fone1"><br>

            <label>Telefone2:</label><br>
            <input type="text" name="fone2"><br>

            <label>Profissão</label><br>
            <select name="profissao">
                <option value="estudante">Estudante</option>
                <option value="professor">Professor</option>
                <option value="agAdm">Agente administrativo</option>
                
            </select>

           <br> <label>Escolaridade</label><br>
            <input type="radio" name="superior" value="superior">
            <label for="male">Superior</label>
            <input type="radio" name="medio" value="medio">
            <label for="female">Médio</label>
            <input type="radio" name="fundamental" value="fundamental">
            <label for="other">Fundamental</label><br>
            
            <input type="checkbox" name="concorda" value="concorda">
            <label for="vehicle1">Concorda com os termos de contrato</label><br>
            <input type="submit" name="enviar">
        </form>

    </body>
</html>

