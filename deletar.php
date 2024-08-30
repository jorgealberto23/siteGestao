<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Deletar Evento</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: black;
            margin: 0;
            padding: 0;
        }

        form {
            max-width: 600px;
            margin: 20px auto;
            background-color: #fff;
            padding: 20px;
            border-radius: 8px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
        }

        fieldset {
            border: none;
            margin: 0;
            padding: 0;
        }

        legend {
            font-size: 1.2em;
            font-weight: bold;
            margin-bottom: 20px;
        }

        label {
            display: block;
            margin-bottom: 10px;
        }

        input[type="number"] {
            width: calc(100% - 150px);
            padding: 8px;
            border: 1px solid #ccc;
            border-radius: 5px;
            box-sizing: border-box;
            margin-bottom: 10px;
        }

        input[type="image"] {
            border: none;
            background-color: transparent;
            cursor: pointer;
        }

        center {
            margin-top: 20px;
        }

        h3 {
            margin-top: 20px;
        }

        a {
            color: #007bff;
            text-decoration: none;
        }

        a:hover {
            text-decoration: underline;
        }
    </style>
</head>
<body>

<form action="deletar_evento.php" method="post">
    <fieldset>
        <legend><h2>Selecione o ID para deletar evento:</h2></legend>
        <p><label for="cNome">Código do evento:</label><input type="number" name="tCodigo" id="cCodigo" size="30" maxmaxlength="10" placeholder="Código Obrigatório" required=""></p>
    </fieldset>
    <input id="image" type="image" src="deletar.png" width="100" height="100">
</form>
<center><h3><a href='index.php'>Voltar para a página inicial</a></h3></center>

</body>
</html>
