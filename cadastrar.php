<!DOCTYPE html>
<html>
<head>
    <title>Cadastro de Aluno - Academia Big Bang</title>
    <style>
        body {
            font-family: 'Arial', sans-serif;
            background-color: #f4f4f4;
            margin: 0;
            padding: 0;
            background-image: url('pesos.jpg');
            background-size: cover; /* Para cobrir todo o espaço do corpo */
            background-repeat: no-repeat; /* Evita repetir a imagem */
            background-attachment: fixed; /* Fixa a imagem para que ela não role com a página */
        }
        
        h2 {
            text-align: center;
            margin-top: 40px;
            color: white;
        }
        
        a {
            display: block;
            padding: 20px;
            margin: 20px auto;
            width: 200px;
            height:30px;
            background-color: #007bff;
            color: #fff;
            text-decoration: none;
            border-radius: 10px;
            transition: background-color 0.3s ease;
            text-align: center;
        }
        
        a:hover {
            background-color: #0056b3;
        }
        
        form {
            width: 60%;
            margin: 20px auto;
            background-color: #ffffff;
            padding: 30px;
            border-radius: 8px;
            box-shadow: 0 0 15px rgba(0, 0, 0, 0.2);
        }
        
        h3 {
            text-align: center;
            color: #333333;
        }
        
        input[type="text"],
        input[type="email"],
        input[type="tel"],
        input[type="date"],
        input[type="time"],
        textarea {
            width: 100%;
            padding: 10px;
            margin-bottom: 15px;
            border: 1px solid #cccccc;
            border-radius: 4px;
            box-sizing: border-box;
            font-size: 16px;
        }
        
        input[type="submit"] {
            background-color: #4CAF50;
            color: white;
            padding: 12px 20px;
            border: none;
            border-radius: 4px;
            cursor: pointer;
            font-size: 16px;
            text-align: center;
        }
        
        input[type="submit"]:hover {
            background-color: #45a049;
        }
        
        a {
            color: #007bff;
            text-decoration: none;
        }
        
        a:hover {
            text-decoration: underline;
        }
        
        .activities {
            margin-top: 20px;
            text-align: center;
        }
        
        .activities a {
            display: inline-block;
            padding: 10px 20px;
            margin: 0 10px;
            background-color: #007bff;
            color: #fff;
            text-decoration: none;
            border-radius: 10px;
            transition: background-color 0.3s ease;
        }
        
        .activities a:hover {
            background-color: #0056b3;
        }
        
        .activities h3 {
            margin-bottom: 10px;
            color: #333333;
        }
    </style>
</head>
<body>
    <div class="activities">
        <a href="testar.php">Testar a Conexão</a>
        <a href="cadastrar.php">Cadastre-se</a>
        <a href="exibe.php">Listar Eventos</a>
        <a href="atualizar.php">Atualizar Evento</a>
        <a href="deletar.php">Deletar Evento</a>
        <h2>Cadastro de Aluno - Academia Big Bang</h2>
    </div>

    <form action="cadastro_aluno.php" method="post">
        <label for="nome">Nome:</label>
        <input type="text" id="nome" name="nome">

        <label for="telefone">Telefone:</label>
        <input type="tel" id="telefone" name="telefone">

        <label for="email">E-mail:</label>
        <input type="email" id="email" name="email">

        <label for="endereco">Endereço:</label>
        <input type="text" id="endereco" name="endereco">

        <label for="complemento">Complemento:</label>
        <input type="text" id="complemento" name="complemento">

        <label for="cep">CEP:</label>
        <input type="text" id="cep" name="cep">

        <label for="cidade">Cidade:</label>
        <input type="text" id="cidade" name="cidade">

        <div class="activities">
            <h3>Selecione as atividades que deseja participar:</h3>
            <p><input type="checkbox" id="natacao" name="atividade" value="natacao">
                <label for="natacao">Natação</label></p>

            <p><input type="checkbox" id="musculacao" name="atividade" value="musculacao">
                <label for="musculacao">Musculação</label></p>

            <p><input type="checkbox" id="pilates" name="atividade" value="pilates">
                <label for="pilates">Pilates</label></p>

            <p><input type="checkbox" id="zumba" name="atividade" value="zumba">
                <label for="zumba">Zumba</label></p>

            <p><input type="checkbox" id="crossfit" name="atividade" value="crossfit">
                <label for="crossfit">Crossfit</label></p>
        </div>

        <input type="submit" value="Cadastrar">
    </form>
</body>
</html>
