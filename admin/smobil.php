<?php
include("konek.php");
$nopolisi=$_POST['txtPolisi'];
$merek=$_POST['txtMerek'];
$tahun=$_POST['txtTahun'];
$harga=$_POST['txtHarga'];
$simpan=mysqli_query($konek,"insert into mobil(no_polisi,merek,tahun,harga,s_mobil) 
values('$nopolisi','$merek','$tahun','$harga','AKTIF')");
if($simpan){
    header("Location:index.php?x=mobil");
}