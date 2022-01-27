<?php
include "konek.php";
$polisi=$_POST['polisi'];
$nama=$_POST['txtNp'];   
$jk=$_POST['jk'];
$ktp=$_POST['txtKTP'];
$alamat=$_POST['txtAlamat'];
$tlp=$_POST['txtTlp'];
$tujuan=$_POST['txtTujuan'];
$tp= new DateTime($_POST['txtTp']);
$tk= new DateTime($_POST['txtTk']);
$selisih=$tk->diff($tp);
$x=$selisih->d;
$cari = mysqli_query($konek,"select * from mobil where id_mobil='$polisi'");
$data = mysqli_fetch_array($cari);
$harga=$x*$data['harga'];
$simpan=mysqli_query($konek,"insert into sewa(id_mobil,id_admin,nama_sewa,ktp,
                    jk_sewa,alamat,tlp_sewa,tujuan,tgl_sewa,tgl_kembali,lama,harga_total) values ('$polisi',
                    '$_SESSION[id_admin]','$nama','$ktp','$jk','$alamat','$tlp','$tujuan','$_POST[txtTp]','$_POST[txtTk]',
                    '$x','$harga')") or die (mysqli_error()); 
               
if($simpan){
    header("Location:index.php?x=order");
}