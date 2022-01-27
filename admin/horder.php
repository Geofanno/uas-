<?php
include("konek.php");
$id=$_GET['kode'];
$hapus=mysqli_query($konek,"delete from sewa where kode='$id'") or die(mysqli_error());
if($hapus){
    header("Location:index.php?x=order");
}