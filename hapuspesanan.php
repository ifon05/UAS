<?php

$ambil = $db->query("SELECT * FROM produk WHERE id_produk= '$_GET[id]'");
$tampil = $ambil->fetch_assoc();


$db->query("DELETE FROM daftarpesanan WHERE id_produk= '$_GET[id]'");
echo "<scripit>alert('produk terhapus);</script>";
echo "<script>location='menu.php?';</script>";
?>
