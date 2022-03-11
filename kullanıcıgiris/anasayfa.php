<?php include 'header.php'; ?>


<!DOCTYPE html>
<html lang="tr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="stil.css">
    <title>Özel Özcan Hastanesi</title>

    <style type="text/css">  
    h4{
        font-size: 24px;
    }
    
    </style>

</head>
<body>

<div class="orta_div" id="randevu_div">

<form action="islem.php" method="post">
<h4>
        Sayın <?php echo $kullanicicek['kullanici_adsoyad']; ?>
    </h4>
    
    <input type="date" name="tarih">

    <select name="klinik" class="klinik">
        <option value="klinik">Klinik Seçin</option>
        <option value="Göz Hastalıkları">Göz Hastalıkları</option>
        <option value="Kardioloji">Kardioloji</option>
        <option value="Nöroloji">Nöroloji</option>
        <option value="Ortopedi & Tramvatoloji">Ortopedi & Tramvatoloji</option>
        <option value="Üroloji">Üroloji</option>
        <option value="Psikiyatri">Psikiyatri</option>
        <option value="Kulak, Burun, Boğaz Hastalıkları">Kulak, Burun, Boğaz Hastalıkları</option>
        <option value="Dahiliye">Dahiliye</option>

    </select>

    <select name="doktor" class="doktor">
        <option value="doktor">Doktor Seçin</option>
        <option value="Prof.Dr.Umut Berke NURAL(Göz)">Prof.Dr.Umut Berke NURAL(Göz)</option>
        <option value="Op.Dr.Arda KATİP(Göz)">Op.Dr.Arda KATİP(Göz)</option>
        <option value="Prof.Dr.Yağmur Dilan KAPLAN(Kardioloji)">Prof.Dr.Yağmur Dilan KAPLAN(Kardioloji)</option>
        <option value="Dr.Sıla DEDEOĞLU(Kardioloji)">Dr.Sıla DEDEOĞLU(Kardioloji)</option>
        <option value="Prof.Dr.Kutay Emir YAŞAR(Nöroloji)">Prof.Dr.Kutay Emir YAŞAR(Nöroloji)</option>
        <option value="Uzm.Dr.Bora NAS(Nöroloji)">Uzm.Dr.Bora NAS(Nöroloji)</option>
        <option value="Op.Dr.Emre KOÇYİĞİT(Ortopedi&Tramvatoloji)">Op.Dr.Emre KOÇYİĞİT(Ortopedi&Tramvatoloji)</option>
        <option value="Op.Dr.Ali BAYTAŞ(Üroloji)">Op.Dr.Ali BAYTAŞ(Üroloji)</option>
        <option value="Uzm.Psk.Oktay KUZU(Psikiyatri)">Uzm.Psk.Oktay KUZU(Psikiyatri)</option>
        <option value="Uzm.Psk.Nisa KIRAÇ(Psikiyatri)">Uzm.Psk.Nisa KIRAÇ(Psikiyatri)</option>
        <option value="Psk.Onur YAYLA(Psikiyatri)">Psk.Onur YAYLA(Psikiyatri)</option>
        <option value="Op.Dr.Tunakan TÜTÜNCÜ(Kulak, Burun, Boğaz)">Op.DrTunakan TÜTÜNCÜ(Kulak, Burun, Boğaz)</option>
        <option value="Op.Dr.Buğra ERGÜNAY(Kulak, Burun, Boğaz)">Op.Dr.Buğra ERGÜNAY(Kulak, Burun, Boğaz)</option>
        <option value="Uzm.Dr.Furkan İSTEKLİ(Dahiliye)">Uzm.Dr.Furkan İSTEKLİ(Dahiliye)</option>
        <option value="Dr.Ramazan TÜRK(Dahiliye)">Dr.Ramazan TÜRK(Dahiliye)</option>
    </select>
    <input type="hidden" name="kullanici_id" value="<?php echo $kullanicicek['kullanici_id']; ?>">
    <button name="randevu_kaydet">Randevu Kaydet</button>

    </form>

</div>


</div>
    
</body>
</html>