<?php
include("../../config/config.php");
$tenloaisp = $_POST['tendanhmuc'];
$thutu = $_POST['thutu'];
if (isset($_POST['themdanhmuc'])) {
  $sql_add = "INSERT INTO danhmuc(tendanhmuc,thutu) VALUE('" . $tenloaisp . "','" . $thutu . "')";
  mysqli_query($mysqli, $sql_add);
  header("Location:../../index.php?action=quanlydanhmucsanpham");
}
?>