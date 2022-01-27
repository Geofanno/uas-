<?php
include("konek.php");
$nopolisi=$_POST['txtPolisi'];
$merek=$_POST['txtMerek'];
$tahun=$_POST['txtTahun'];
$harga=$_POST['txtHarga'];
$kode=$_POST['kode'];
$simpan=mysqli_query($konek,"update mobil set no_polisi='$nopolisi', merek='$merek',
tahun='$tahun',harga='$harga' where nomor='$kode'");
if($simpan){
    header("Location:index.php?x=mobil");
}