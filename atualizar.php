


<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Atualizar Evento</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: BLACK;
            margin: 0;
            padding: 0;
        }

        form {
            font-weight: white;
            max-width: 800px;
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

        input[type="text"],
        input[type="number"],
        input[type="date"],
        input[type="time"] {
            width: calc(100% - 150px);
            padding: 8px;
            border: 1px solid #ccc;
            border-radius: 5px;
            box-sizing: border-box;
            margin-bottom: 10px;
        }

        input[type="radio"] {
            margin-right: 10px;
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

<form action="atualizar_evento.php" method="post">
    <fieldset>
        <legend><h2>Selecione uma das Opções e Faça a atualização na caixa de Texto da opção selecionada:</h2></legend>
        <p><label for="cNome">Código do evento:</label><input type="number" name="tCodigo" id="cCodigo" size="30" maxmaxlength="10" placeholder="Código Obrigatório" required=""></p>
        <p><input type="radio" name="atualizar" value="1"><label for="cNome">Nome do Evento:</label><input type="text" name="tNome" id="cNome" size="50" maxmaxlength="50" placeholder="Digite o nome do evento para atualização"></p>
        <p><input type="radio" name="atualizar" value="2"><label for="cData">Data do Evento:</label><input type="date" name="tData" id="cData"></p>
        <p><input type="radio" name="atualizar" value="3"><label for="cHoraIni">Hora Inicial do Evento:</label><input type="time" name="tHoraIni" id="cHoraIni"></p>
        <p><input type="radio" name="atualizar" value="4"><label for="cHoraFim">Hora do final do Evento:</label><input type="time" name="tHoraFim" id="cHoraFim"></p>
        <p><input type="radio" name="atualizar" value="5">Descrição do Evento:</label><input type="text" name="tDescricao" id="cDescricao" size="50" maxmaxlength="50" placeholder="Digite a descrição do evento para atualização"></p>
        <p><input type="radio" name="atualizar" value="6"><label for="cLocal">Local do Evento:</label><input type="text" name="tLocal" id="cLocal" size="50" maxmaxlength="50" placeholder="Digite a descrição do evento para atualização"></p>
        <p><input type="radio" name="atualizar" value="7">Responsável do Evento:</label><input type="text" name="tResponsavel" id="cResponsavel" size="50" maxmaxlength="50" placeholder="Digite o Nome do Responsável do evento para atualização"></p>
    </fieldset>
    <input id="image" type="image" src="atualizar.png" width="100" height="100">
</form>
<center><h3><a href='index.php'>Voltar para a página inicial</a></h3></center>

</body>
</html>
