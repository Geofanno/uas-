<?php
include("konek.php");
$id=$_GET['nomor'];
$hapus=mysqli_query($konek,"delete from mobil where nomor='$id'") or die(mysqli_error());
if($hapus){
    header("Location:index.php?x=mobil");
}