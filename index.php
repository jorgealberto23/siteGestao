<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>NINIVE</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            margin: 0;
            padding: 0;
            background-image: url('fundo.avif');
            background-repeat: no-repeat;
            background-attachment: fixed;
            background-size: cover; /* Ajuste para cobrir toda a área do fundo */
            background-position: center top 100px; /* Ajuste a posição da imagem de fundo */
            color: #333;
            text-align: center;
        } 
        h3{
            margin-top: 300px;
            color: white;
            font-size: 40px;
            
        
        }

        h2 {
            margin-top: 40px;
            color: red;
            font-size: 50px;
        }

        a {
            display: block;
            padding: 20px; /* Ajuste o padding conforme necessário */
            margin: 40px auto;
            width: 55px;
            background-image: url('iconCadastrar.jpeg');
            background-repeat: no-repeat;
            background-size: 100% 100%; /* Ajusta a imagem para cobrir todo o link */
            color: red;
            font-weight: bold;
            text-decoration: none;
            border-radius: 10px;
            transition: background-color 0.3s ease;
            background-position: center; /* Centraliza a imagem dentro do link */
        }

        a:hover {
            background-color: #0056b3; /* Cor de fundo quando o link é hover */
        }

        .button {
            position: fixed; /* Fixa o botão na tela */
            top: 20px; /* Ajuste a posição conforme necessário */
            left: 20px; /* Ajuste a posição conforme necessário */
            width: 60px; /* Ajuste o tamanho conforme necessário */
            height: 60px; /* Ajuste o tamanho conforme necessário */
            background: url('menu.ico') no-repeat center center;
            background-size: contain; /* Ajusta a imagem para caber dentro do botão */
            border: none; /* Remove a borda padrão */
            cursor: pointer; /* Muda o cursor para indicar que é clicável */
            z-index: 1000; /* Garante que o botão esteja acima de outros elementos */
        }

        .button:focus {
            outline: none; /* Remove a borda de foco padrão */
        }

        .img {
            position: fixed; /* Fixa a imagem na tela */
            top: 20px; /* Ajuste a posição vertical conforme necessário */
            left: 90px; /* Ajuste a posição horizontal conforme necessário */
            width: 60px; /* Ajuste o tamanho conforme necessário */
            height: auto; /* Mantém a proporção da imagem */
            z-index: 1000; /* Garante que a imagem esteja acima de outros elementos */
        }
    </style>
</head>
<body>
    <button class="button" onclick="alert('Botão clicado!')"></button>
    <img class="img" src="ninive.png" alt="Descrição da Imagem">
    <div class="content">            
        <!-- Conteúdo adicional pode ser inserido aqui -->
       
    </div>
  <h3>  <text> Bem-vindo ao Nínive, sua<br> ferramenta para organizar,<br> acompanhar e otimizar o acervo<br> de livros, facilitando o acesso e <br>a gestão de recursos educacionais.</text></h3>
</body>
</html>
