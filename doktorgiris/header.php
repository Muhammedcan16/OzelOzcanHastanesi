<?php

ob_start();
session_start();
include 'baglan.php';

$doktorsor=$db->prepare("SELECT * FROM doktor WHERE doktor_tc=:doktor_tc");
$doktorsor->execute([
    'doktor_tc' => $_SESSION['userdoktor_tc']
]);
$say=$doktorsor->rowCount();
$doktorcek=$doktorsor->fetch(PDO::FETCH_ASSOC);

if ($say==0) {
    header("location:index.php?durum=izinsiz");
    exit;
}



?>


<!DOCTYPE html>
<html lang="tr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title>Randevu alma </title>
</head>
<body>

<div class="ust_bar">
    <a href="anasayfa.php"><h1>Özel Özcan HASTANESİ</h1></a>
    <div class="menu">
        <a href="hesap.php"><h5>Hesap Bilgileri</h5></a>
        <a href="randevu.php"><h5>Randevu Bilgileri</h5></a>
    </div>
</div>

<a href="logout.php"><div class="cikis">
    Giriş Ekranı
</div></a>
    
</body>
</html>