<?php 
 $server = "localhost";
 $username ="root";
 $pass ="";
 $namadatabase = "pesanmakanan";


 $db = mysqli_connect($server,$username,$pass,$namadatabase);

 if(!$db){
     die("gagal terhubung");
 }