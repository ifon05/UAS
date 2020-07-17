<?php 

session_start();
include 'admin/koneksi.php';

if(empty($_SESSION['keranjang'])){
    echo "<script>alert('keranjang kosong');</script>";
    echo "<script>location='index.php';</script>";
   
  }
?>

<!DOCTYPE html>
<html lang="en">
    <head>
    <meta charset="utf-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
        <meta name="description" content="" />
        <meta name="author" content="" />
        <title>W-FOOD</title>
        <!-- Favicon-->
        <link rel="icon" type="image/x-icon" href="assets/assets/img/favicon.ico" />
        <!-- Font Awesome icons (free version)-->
        <script src="https://use.fontawesome.com/releases/v5.13.0/js/all.js" crossorigin="anonymous"></script>
        <!-- Google fonts-->
        <link href="https://fonts.googleapis.com/css?family=Montserrat:400,700" rel="stylesheet" type="text/css" />
        <link href="https://fonts.googleapis.com/css?family=Lato:400,700,400italic,700italic" rel="stylesheet" type="text/css" />
        <!-- Core theme CSS (includes Bootstrap)-->
        <link href="assets/css/styles.css" rel="stylesheet" />
    </head>

<body>
<div class="row">
                    <div class="col-lg-8 mx-auto">
                        <!-- To configure the contact form email address, go to mail/contact_me.php and update the email address in the PHP file on line 19.-->
                        <?php
         foreach($_SESSION['keranjang'] as $id => $jumlah): ?>
                <?php
           
                $ambil= $db->query("SELECT * FROM nama_makanan WHERE id=$id");
            
                $tampil = $ambil->fetch_assoc();
              
                ?>
                       
                        <form  method="post">
                           
                         
                       
                            <div class="control-group">
                            <label>Nama Pesanan</label>
                                <div class="form-group floating-label-form-group controls mb-0 pb-2">
                                 
                                <select class="form-control" name="restoran">
                                <option>
                                <?php echo $tampil['nama'];?><?php echo $tampil['harga'];?>
                            </option>
                            <?php endforeach ?>
                              
                                
                                
                                </select>
                                </div>
                                
                                
                            </div>
                            <div class="control-group">
                                <div class="form-group floating-label-form-group controls mb-0 pb-2">
                                    <label>Email Address</label>
                                    <input class="form-control" name="email" type="email" placeholder="Masukan Email" required="required" data-validation-required-message="Masukan Email Anda." />
                                    <p class="help-block text-danger"></p>
                                </div>
                            </div>
                            <div class="control-group">
                                <div class="form-group floating-label-form-group controls mb-0 pb-2">
                                    <label>Phone Number</label>
                                    <input class="form-control" name="notlpn" type="tel" placeholder="Nomor telpon" required="required" data-validation-required-message="Masukan Nomor Anda." />
                                    <p class="help-block text-danger"></p>
                                </div>
                            </div>
                            <div class="control-group">
                                <div class="form-group floating-label-form-group controls mb-0 pb-2">
                                    <label>Pesan</label>
                                    <textarea class="form-control" name="pesan" rows="5" placeholder="isi pesan" required="required" data-validation-required-message="masukan pesan."></textarea>
                                    <p class="help-block text-danger"></p>
                                </div>
                            </div>
                            <br />
             
                            <div class="form-group">
                                <input type="submit" class="btn btn-primary btn-xl" value="Kirim"  name="simpan"></div>
                        </form>
                             </form>
                            
                       
                              
</body>

    <script src="https://code.jquery.com/jquery-3.5.1.min.js" crossorigin="anonymous"></script>
        <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.bundle.min.js" crossorigin="anonymous"></script>
        <script src="admin/dist/js/scripts.js"></script>
 
</html>
