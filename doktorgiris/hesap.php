<?php include 'header.php'; ?>


<!DOCTYPE html>
<html lang="tr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Özel Özcan Hastanesi</title>
</head>
<body>
    <div class="hesabim_content">
        <div clas="label">
            <label>ADI SOYADI</label>
            <input type="text" placeholder="<?php echo $doktorcek['doktor_adsoyad']; ?>">
        </div> <br>
        <div clas="label">
            <label>KULLANICI ADI</label>
            <input type="text" placeholder="<?php echo $doktorcek['doktor_tc']; ?>">
        </div> <br>
        <div clas="label">
            <label>ŞİFRE</label>
            <input type="text" placeholder="<?php echo $doktorcek['doktor_password']; ?>">
        </div> <br>
    </div>
    
</body>
</html>