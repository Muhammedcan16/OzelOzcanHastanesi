<?php 
ob_start();
session_start();
include 'baglan.php';

if(isset($_POST['adminkaydet'])) {
    $admin_tc = isset($_POST['admin_tc']) ? $_POST['admin_tc'] : null;
    $admin_adsoyad = isset($_POST['admin_adsoyad']) ? $_POST['admin_adsoyad'] : null;
    $admin_password = isset($_POST['admin_password']) ? $_POST['admin_password'] : null;

    //veritabanı ekleme İşlemi
    $sorgu = $db->prepare('INSERT INTO admin SET
        admin_tc = ?,
        admin_adsoyad = ?,
        admin_password = ?');

        $ekle = $sorgu->execute([
            $admin_tc, $admin_adsoyad, $admin_password
        ]);
        if($ekle) {
            header('location: index.php?durum=basarili');
        } else{
           $hata = $sorgu->errorInfo();
           echo 'mysql hatası' .$hata[2];
        }
}

if(isset($_POST['giris_yap'])) {
    $admin_tc = $_POST['admin_tc'];
    $admin_password = $_POST['admin_password'];

    $adminsor = $db->prepare("SELECT * FROM admin WHERE admin_tc=:admin_tc and 
    admin_password=:admin_password");
    $adminsor->execute([
        'admin_tc' => $admin_tc,
        'admin_password' => $admin_password
    ]);

    $say = $adminsor->rowCount();

    if ($say==1) {
        $_SESSION['useradmin_tc']=$admin_tc;
        header('location: http://localhost/%C3%96zel%C3%96zcanHastanesi/doktorgiris/uye.php?durum=girisbasarili');
        exit;
    } else{
        header('location: index.php?durum=basarisizgiriş');
        exit;
    }
}


?>