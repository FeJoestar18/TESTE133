<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Inicio - FrogTech</title>
    <style>
        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
        }

        body, html {
            height: 100%;
            display: flex;
            flex-direction: column;
            justify-content: center;
            align-items: center;
            font-family: Arial, sans-serif;
            background-color: #f5f5f5;
        }

        .header {
            position: absolute;
            top: 10px;
            width: 100%;
            display: flex;
            justify-content: center;
            z-index: 1;
        }

        header img.main-logo {
            width: 150px;
            transition: all 0.3s ease;
        }

        header img.main-logo:hover {
            transform: scale(1.1);
        }

        

        .Card {
            background-color: #ffffff;
            padding: 40px;
            border-radius: 10px;
            box-shadow: 0px 4px 12px rgba(0, 0, 0, 0.1);
            text-align: center;
            position: relative;
            z-index: 2;
            width: 300px;
            transition: all 0.3s ease;
        }

        .Card.left:hover {
            transform: scale(1.05);
            box-shadow: 0px 8px 16px rgba(0, 0, 0, 0.2);
        }

        .Card.middle:hover {
            transform: scale(1.05);
            box-shadow: 0px 8px 16px rgba(0, 0, 0, 0.2);
        }

        .Card.right:hover {
            transform: scale(1.05);
            box-shadow: 0px 8px 16px rgba(0, 0, 0, 0.2);
            background-color: #0a74059f;
            color: white;
        }

        .Card h1 {
            font-size: 24px;
            color: #333;
            margin-bottom: 20px;
        }

        .button {
            display: flex;
            justify-content: center;
            align-items: center;
            margin-top: 20px;
        }

        .button .btn {
            background-color: #0a74059f;
            color: white;
            border: none;
            padding: 10px 20px;
            border-radius: 5px;
            font-size: 16px;
            cursor: pointer;
            position: relative;
            display: flex;
            align-items: center;
            justify-content: center;
            transition: all 0.3s ease;
        }

        .button .btn:hover {
            background-color: #770000;
        }

        .button .btn::after {
            content: ' →';
            opacity: 0;
            margin-left: 5px;
            transition: opacity 0.3s, margin-left 0.3s;
        }

        .button .btn:hover::after {
            opacity: 1;
            margin-left: 10px;
        }

        footer {
            background-color: rgba(0, 71, 15, 0);
            color: rgb(0, 0, 0);
            text-align: center;
            padding: 10px 0;
            position: fixed;
            bottom: 0;
            left: 0;
            width: 100%;
        }

    </style>
</head>
<body>
    <div class="header">
        <img src="../img/logo2.png" alt="Logo" class="main-logo">
    </div>

    <div class="Cards-container" style="display: flex; justify-content: center; gap: 20px;">
        <div class="Card left">
            <h1>Por que comprar conosco?</h1>
            <p>Oferecemos atendimento personalizado e suporte técnico de qualidade. Nossa missão é garantir a satisfação do cliente com produtos de alta durabilidade.</p>
        </div>

        <div class="Card middle">
            <h1>O melhor custo-benefício</h1>
            <p>Produtos com a melhor relação qualidade/preço, sem abrir mão de desempenho e segurança.</p>
        </div>

        <div class="Card right">
            <h1>Vem ser Frog</h1>
            <div class="button">
                <button class="btn" onclick="window.location.href='../paginas_cadastros/login.php'">Vem ser Frog</button>
                
            </div>
        </div>
    </div>

    <footer>
        <p>&copy; 2024 Meu Site. Todos os direitos reservados a Frogtech.</p>
    </footer>
</body>
</html>
