<!DOCTYPE html>
<html lang="tr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="stil.css">
    <title>ADMİN GİRİŞ</title>
</head>
<body>
    <header>
        <h2>ADMİN Giriş </h2>
    </header>

    <div class="tableOuter">
        <h1>Giriş Yap</h1>
        <form action="islem.php" method="post">
            <div class="user">
                <input type="text" name="admin_tc" placeholder="Kullanıcı Adı">
            </div>
            <div class="pass">
                <input type="password" name="admin_password" placeholder="Şifre">
            </div>
            <button type="submit" class="sub" id="giris" name="giris_yap">Giriş Yap</button>
            <br>
        </form>
        
        <a href="http://localhost/%C3%96zel%C3%96zcanHastanesi/index.php"><button type="submit" class="sub" id="gerı">Anasayfaya Geri Dön</button></a>
    </div>
    
</body>
</html>