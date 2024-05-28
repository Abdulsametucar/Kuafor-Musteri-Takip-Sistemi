<!DOCTYPE html>
<html lang="tr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Berber Takip Sistemi</title>
    <link rel="stylesheet" href="web-proje2/css/styles.css">
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #f4f4f4;
            margin: 0;
            padding: 0;
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
        }

        .container {
            text-align: center;
        }

        .title {
            font-size: 2.5rem;
            margin-bottom: 20px;
            color: #333;
        }

        .welcome-text {
            font-size: 1.2rem;
            color: #666;
            margin-bottom: 30px;
        }

        .buttons {
            margin-top: 20px;
        }

        .buttons a {
            display: inline-block;
            text-decoration: none;
            background-color: #007bff;
            color: #fff;
            padding: 10px 20px;
            border-radius: 5px;
            margin: 0 10px;
            transition: background-color 0.3s ease;
        }

        .buttons a:hover {
            background-color: #0056b3;
        }
    </style>
</head>
<body>
    <div class="container">
        <h2 class="title">Kuaför-Müşteri Takip Sistemi</h2>
        <p class="welcome-text">Kuaför-Müşteri Takip Sistemi'ne hoş geldiniz. Lütfen giriş yapın veya üye olun.</p>
        <div class="buttons">
            <a href="web-proje2/pages/giris.php">Giriş Yap</a>
            <a href="web-proje2/pages/kayit.php">Üye Ol</a>
        </div>
    </div>
</body>
</html>
