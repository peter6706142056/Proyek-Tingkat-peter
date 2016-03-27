<?php session_start();
include "koneksi.php";
$username=$_POST['username'];
$password=$_POST['password'];
$query=mysql_query("select * from admin where username='$username' and password='$password'");
$cek=mysql_num_rows($query);
if($cek){
$_SESSION['username']=$username;
echo "<script>document.location.href='admindataartis.php';</script>";
}else{
echo "<script>document.location.href='index.php';</script>";
echo mysql_error();
}
?>  