<!DOCTYPE html>
<html lang="tr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="stil.css">
    <title>Özel Özcan Hastanesi</title>
</head>
<body>
    <header>
        <h2>ÖZEL ÖZCAN HASTANESİ</h2>
    </header>

    <div class="tableOuter">
        <h1>Üye Ol</h1>
        <form action="islem.php" method="post">
        <div class="user">
                <input type="text" name="admin_adsoyad" placeholder="Ad Soyad">
            </div>
            <div class="user">
                <input type="text" name="admin_tc" placeholder="Tc Kimlik No">
            </div>
            <div class="pass">
                <input type="password" name="admin_password" placeholder="Şifre">
            </div>
            <button type="submit" class="sub" id="giris" name="adminkaydet">Üye Ol</button>
            <br>
        </form>
        <a href="index.php"><button type="submit" class="sub" id="uye1">Geri Çık</button></a>
    </div>
    
</body>
</html>