<?php 
ob_start();
session_start();
include 'baglan.php';

if(isset($_POST['doktorkaydet'])) {
    $doktor_tc = isset($_POST['doktor_tc']) ? $_POST['doktor_tc'] : null;
    $doktor_adsoyad = isset($_POST['doktor_adsoyad']) ? $_POST['doktor_adsoyad'] : null;
    $doktor_password = isset($_POST['doktor_password']) ? $_POST['doktor_password'] : null;

    //veritabanı ekleme İşlemi
    $sorgu = $db->prepare('INSERT INTO doktor SET
        doktor_tc = ?,
        doktor_adsoyad = ?,
        doktor_password = ?');

        $ekle = $sorgu->execute([
            $doktor_tc, $doktor_adsoyad, $doktor_password
        ]);
        if($ekle) {
            header('location: index.php?durum=basarili');
        } else{
           $hata = $sorgu->errorInfo();
           echo 'mysql hatası' .$hata[2];
        }
}

if(isset($_POST['giris_yap'])) {
    $doktor_tc = $_POST['doktor_tc'];
    $doktor_password = $_POST['doktor_password'];

    $doktorsor = $db->prepare("SELECT * FROM doktor WHERE doktor_tc=:doktor_tc and 
    doktor_password=:doktor_password");
    $doktorsor->execute([
        'doktor_tc' => $doktor_tc,
        'doktor_password' => $doktor_password
    ]);

    $say = $doktorsor->rowCount();

    if ($say==1) {
        $_SESSION['userdoktor_tc']=$doktor_tc;
        header('location: anasayfa.php?durum=girisbasarili');
        exit;
    } else{
        header('location: index.php?durum=basarisizgiriş');
        exit;
    }
}

if(isset($_POST['randevu_kaydet'])) {
    $randevu_doktor = isset($_POST['doktor']) ? $_POST['doktor'] : null;
    $randevu_tarih = isset($_POST['tarih']) ? $_POST['tarih'] : null;
    $randevu_klinik = isset($_POST['klinik']) ? $_POST['klinik'] : null;
    $randevu_hasta_id = isset($_POST['doktor_id']) ? $_POST['doktor_id'] : null;

    $kaydet=$db->prepare("INSERT INTO randevu SET
       
        randevu_doktor = ?,
        randevu_tarih = ?,
        randevu_klinik = ?,
        randevu_hasta_id = ?
    ");

    $insert=$kaydet->execute([
         $randevu_doktor, $randevu_tarih, $randevu_klinik, $randevu_hasta_id
    ]);
    if($insert) {
        header("location:index.php?kayıt_basarili");
    } else{
        header("location:anasayfa.php?kayıt_basarisiz");
    }


}



?>

