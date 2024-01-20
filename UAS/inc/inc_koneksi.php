<?php 
$host       = "localhost";
$user       = "id21800289_fadly";
$pass       = "FadlyHidayat12345#";
$db         = "id21800289_uas";

$koneksi    = mysqli_connect($host,$user,$pass,$db);
if(!$koneksi){
    die("Gagal terkoneksi");
}