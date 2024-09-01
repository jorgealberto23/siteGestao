<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>NINIVE</title>
    <link rel="stylesheet" href="indexStyle.css">
</head>

<body>
    <div class="menu-container">
        <div class="menu-toggle" id="menu-toggle">
            <div class="bar bar1"></div>
            <div class="bar bar2"></div>
            <div class="bar bar3"></div>
        </div>
        <nav class="nav-menu">
            <ul>
                <li><a href="#">Gerenciar livros</a></li>
                <li><a href="#">Gerenciar alunos</a></li>
                <li><a href="#">Gerenciar acervo</a></li>
                <li><a href="#">Notificações</a></li>
                <li><a href="#">relatorio</a></li>
                <li><a href="#">anotações</a></li>
                <li><a href="#">Suporte / FAQ</a></li>
            </ul>
        </nav>
    </div>
    <header>
        <div class="header-left">
            <img src="assets/logo.png" class="logo">
        </div>

        <div class="header-right">
            <img src="assets/notificacao.png" class="icon">
            <img src="assets/conta.png" class="icon">
        </div>
    </header>
    <section>
        <img src="./assets/biblioteca.jpg" class="biblioteca">
        <h1 class="text">
            Bem-vindo ao Nínive, sua ferramenta para organizar, acompanhar e otimizar o acervo de livros, facilitando o acesso e a gestão de recursos educacionais.
        </h1>
    </section>
        <div>
            <h1>insira um texto</h1>
        </div>
    <script>
        document.addEventListener('DOMContentLoaded', function() {
            const menuToggle = document.getElementById('menu-toggle');

            menuToggle.addEventListener('click', function() {
                this.classList.toggle('active');
            });
        });
    </script>
</body>

</html>