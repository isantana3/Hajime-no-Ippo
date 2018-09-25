<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Fale conosco</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" type="text/css" media="screen" href="main.css" />
    <script src="main.js"></script>
</head>
<body>
    <form method="post" action="report.php">
        <label for="nome"> Nome Completo: </label>
        <input type="text" id="nome" name="nome" /> <br />
        <label for="email"> E-mail: </label>
        <input type="text" id="email" name="email"/> <br />

        <label for="coment"> Comentário: </label>
        <input type="text" id="coment" name="coment"> <br />
        <input type="submit" value="Enviar" name="submit"> <br />
    </form>    
</body>
</html>