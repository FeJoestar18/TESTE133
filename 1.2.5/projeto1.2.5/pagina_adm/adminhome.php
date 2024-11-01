<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Página de Administração</title>
    <link rel="stylesheet" href="style.css">
    <style>
        body {
            display: flex;
            min-height: 100vh;
            flex-direction: column;
            margin: 0;
            font-family: Arial, sans-serif;
            overflow-x: hidden; /* Impede a rolagem horizontal */
        }

        header {
            background-color: white;
            box-shadow: 0 20px 40px rgba(0, 0, 0, 0.1);
            color: white;
            text-align: center;
            padding: 1em;
            z-index: 1;
        }
        .logo {
            display: flex;
            justify-content: center;
            align-items: center;
            margin-left: 270px; /* Remover margem à esquerda */
            margin-right: auto; /* Cria margem à direita automática */
            height: 60px; /* Ajuste a altura da div da logo */
        }
        .logo img {
    max-height: 180%; /* Ajuste a altura máxima da imagem */
    height: auto; /* Mantém a proporção da imagem */
    width: auto; /* Mantém a proporção da imagem */
    margin-top: -20px; /* Ajuste o valor conforme necessário */
}


        .container {
            display: flex;
            flex: 1;
            justify-content: flex-start; /* Alinhamento inicial à esquerda */
            margin-top: 1em; /* Para dar espaço entre o header e o conteúdo */
        }
        .sidebar {
    width: 250px;
    background-color: #2e7d32;
    padding: 1em;
    position: fixed;
    top: 0;
    left: 0;
    height: 100%;
    z-index: 2;
    color: white;
    margin-left: -4px; /* Ajuste este valor conforme necessário para mover a sidebar inteira para a esquerda */
}


.sidebar img {
    max-width: 100%; /* Ajusta para que a imagem não ultrapasse a largura da sidebar */
    height: auto; /* Mantém a proporção da imagem */
    width: 80px; /* Ajuste a largura conforme necessário */
    margin-bottom: 1em; /* Espaçamento abaixo da imagem, se necessário */
}
        
        .sidebar a {
            display: block;
            color: white;
            padding: 10px;
            text-decoration: none;
        }
        .sidebar a:hover {
            background-color: #ddd;
            color: black;
        }
        .content {
            margin-left: 250px;
            padding: 1em;
            flex: 1;
            display: flex;
            flex-direction: column; /* Para permitir uma coluna principal */
            gap: 1em; /* Espaçamento entre as linhas de cards */
        }
        .row {
            display: flex; /* Flexbox para a linha de cards */
            justify-content: space-between; /* Espaçamento entre os cards */
            margin-bottom: 1em; /* Espaçamento entre as linhas */
        }
        .card {
            flex: 1 1 calc(48% - 1em); /* Largura dos cards ajustada para 48% da linha */
            height: 200px; /* Altura fixa dos cards */
            background-color: #fff;
            border: 1px solid #ddd;
            border-radius: 50px;
            padding: 20px;
            box-shadow: 0 20px 40px rgba(0, 0, 0, 0.1);
            display: flex;
            flex-direction: column; /* Alinhamento vertical dos elementos dentro do card */
            justify-content: space-between; /* Espaço entre o título e o conteúdo */
            box-sizing: border-box;
            margin-right: 1em; /* Margem direita para espaçamento entre os cards */
        }
        .card:last-child {
            margin-right: 0; /* Remove a margem direita do último card da linha */
        }
        .card h3 {
            margin: 0; /* Remove a margem do título */
            font-size: 1.2em; /* Tamanho do título */
        }
        .card p {
            font-size: 0.9em; /* Tamanho menor para o texto */
            margin: 0; /* Remove a margem do parágrafo */
        }
        .acessar {
    color: #1e5d23; /* Cor inicial do texto (mais escura) */
    cursor: pointer; /* Cursor em forma de mão ao passar sobre o texto */
    transition: color 0.3s; /* Transição suave para a cor */
    margin-left: 85%; /* Faz o texto se alinhar à direita do card */
}
.acessar:hover {
    color: #2e7d32; /* Cor ao passar o mouse (mais clara) */
}

        footer {
            text-align: right; /* Alinha o texto à direita */
            padding: 1em;
            background-color: white;
            position: relative;
            bottom: 0;
            width: 70%;
            color: black;
        }

        .spaced-card {
            margin-left: 40px; /* Afastar o card da barra lateral */
        }
    </style>
</head>
<body>
    <div class="sidebar">
        <img src="../img/logo1.png" alt="Logo">
        <a href="../paginas_iniciais/paginahome.php">PAGINA HOME</a>
        <a href="../pagina_adm/funcionario.php">FUNCIONÁRIOS</a>
        <a href = "../pagina_adm/usuarios_visualizar.php">USUARIOS</a>
        <a href="#">ESTOQUE</a>
       
    </div>

    <header>
        <div class="logo">
            <img src="../img/logo2.png" alt="Frog Tech Logo">
        </div>
    </header>
    <div class="container">
        <main class="content">
            <div class="row">
                <div class="card spaced-card">
                    <h3>Registro de Funcionários</h3>
                    <p>Gerencie o registro de novos funcionários.</p>
                    <span class="acessar" onclick="location.href='../pagina_adm/cadastro_funcionario.php'">Acessar</span>
                </div>
                <div class="card">
                    <h3>Acesso aos Produtos</h3>
                    <p>Visualize e edite informações dos produtos.</p>
                    <span class="acessar" onclick="location.href='acesso_produtos.php'">Acessar</span>
                </div>
            </div>
            <div class="row">
                <div class="card spaced-card">
                    <h3>Departamentos</h3>
                    <p>Gere relatórios de desempenho e vendas.</p>
                    <span class="acessar" onclick="location.href='../pagina_adm/departamento.php'">Acessar</span>
                </div>
                <div class="card">
                    <h3>Configurações</h3>
                    <p>Gerencie configurações do sistema.</p>
                    <span class="acessar" onclick="location.href='configuracoes.php'">Acessar</span>
                </div>
            </div>
        </main>
    </div>
    <footer>
        <p>&copy; 2024 Loja Frog Tech. Todos os direitos reservados.</p>
    </footer>

</body>
</html>
