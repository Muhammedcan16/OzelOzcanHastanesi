<!DOCTYPE html>
<html lang="tr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title>Header.php </title>
</head>
<body>

<div class="ust_bar">
    <a href="anasayfa.php"><h1>Özel Özcan HASTANESİ</h1></a>
    <div class="menu">
        <a href="hesap.php"><h5>Hesap Bilgileri</h5></a>
        <a href="anasayfa.php"><h5>Tüm Randevular</h5></a>
        
                       
    </div>
</div>

<a href="logout.php"><div class="cikis">
    Giriş Ekranı
</div></a>
    
</body>
</html>






<br><br><br>
<?php
 
 include "baglan1.php";
  
 if(isset($_GET['sil'])){
     $sqlsil="DELETE FROM `randevu` WHERE `randevu`.`randevu_id` = ?";
     $sorgusil=$baglan->prepare($sqlsil);
     $sorgusil->execute([
         $_GET['sil']
     ]);
  
     header('Location:anasayfa.php');
  
 }
  
 $sql ="SELECT * FROM randevu";
 $sorgu = $baglan->prepare($sql);
 $sorgu->execute();
  
 ?>
 <!DOCTYPE html>
 <html lang="tr">
 <head>
     <meta charset="UTF-8">
     <meta http-equiv="X-UA-Compatible" content="IE=edge">
     <meta name="viewport" content="width=device-width, initial-scale=1.0">
     <title>RANDEVU SİSTEMİ</title>
     <!-- CSS only -->
 <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-+0n0xVW2eSR5OomGNYDnhzAbDsOXxcvSN1TPprVMTNDbiYZCxYbOOl7+AMvyTG2x" crossorigin="anonymous">
 </head>
 <body>
     <main>
         <div class="container">
             <div class="row mt-4">
                 <div class="col">
                     <table class="table table-hover table-dark table-striped">
                         <thead>
                             <tr>
                               <th>Hasta No</th>
                                 <th>Randevu No</th>
                                 <th>Doktor</th>
                                 <th>Bölüm</th>
                                 <th>İşlem</th>
                                 
                             </tr>
                         </thead>
                         <tbody>
                         <?php while($satir = $sorgu->fetch(PDO::FETCH_ASSOC)) { ?>
                             <tr>
                              <td><?=$satir['randevu_hasta_id']?></td>
                                 <td><?=$satir['randevu_id']?></td>
                                 <td><?=$satir['randevu_doktor']?></td>
                                 <td><?=$satir['randevu_klinik']?></td>
                                
                                 <td>
                                     <div class="btn-group">
                                        
                                         <a href="?sil=<?=$satir['randevu_id']?>" onclick="return confirm('Silinsin mi?')" class="btn btn-danger">Kaldır</a>
                                     </div>
                                 </td>
                             </tr>
                         <?php } ?>
                         </tbody>
                     </table>
                 </div>
             </div>
         </div>
     
     </main>
     <footer></footer>
 </body>
 </html>