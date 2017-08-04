<?php
include "koneksi.php"; 
error_reporting('E_NONE');
$sql = new sql();


$no_invoice = $_GET['no_invoice'];
$sql = "delete from transaksi where no_invoice = '$no_invoice'";
mysql_query($sql);
echo "<script>document.location.href='transaksi.php';</script>";
?>
