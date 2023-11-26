<?php
include("../../config/config.php");

$tensp = $_POST['tensanpham'];
$masp = $_POST['masp'];
$gia = $_POST['gia'];
$soluong = $_POST['soluong'];
$tomtat = $_POST['tomtat'];
$noidung = $_POST['noidung'];
$tinhtrang = $_POST['tinhtrang'];
$danhmuc = $_POST['danhmuc'];
$hinhanh = $_FILES['hinhanh']['name'];
$hinhanh_tmp = $_FILES['hinhanh']['tmp_name'];
$hinhanh = time() . '_' . $hinhanh;

if (isset($_POST['themsanpham'])) {
  //Them sp
  $sql_add = "INSERT INTO sanpham(ten_sp, ma_sp,gia_sp,soluong,hinhanh,tomtat,noidung,tinhtrang, id_danhmuc) VALUES('" . $tensp . "',' " . $masp . "','" . $gia . "','" . $soluong . "','" . $hinhanh . "','" . $tomtat . "','" . $noidung . "','" . $tinhtrang . "','" . $danhmuc . "')";
  mysqli_query($mysqli, $sql_add);
  move_uploaded_file($hinhanh_tmp, 'uploads/' . $hinhanh);
  header("Location:../../index.php?action=quanlysanpham&query=add");
} elseif (isset($_POST["suasanpham"])) {
  //Sua sp
  if ($hinhanh != '') {
    move_uploaded_file($hinhanh_tmp, 'uploads/' . $hinhanh);

    $sql_update = "UPDATE sanpham SET ten_sp='" . $tensp . "', ma_sp='" . $masp . "' , gia_sp='" . $gia . "', soluong='" . $soluong . "', hinhanh='" . $hinhanh . "', tomtat='" . $tomtat . "', noidung='" . $noidung . "', tinhtrang='" . $tinhtrang . "' , id_danhmuc='" . $danhmuc . "' WHERE id_sanpham='$_GET[idsanpham]'";
    $sql = "SELECT * FROM sanpham WHERE id_sanpham='$_GET[idsanpham]' LIMIT 1";
    $query = mysqli_query($mysqli, $sql);
    while ($row = mysqli_fetch_array($query)) {
      unlink('uploads/' . $row['hinhanh']);
    }
  } else {
    $sql_update = "UPDATE sanpham SET ten_sp='" . $tensp . "', ma_sp='" . $masp . "' , gia_sp='" . $gia . "', soluong='" . $soluong . "', tomtat='" . $tomtat . "', noidung='" . $noidung . "', tinhtrang='" . $tinhtrang . "', id_danhmuc='" . $danhmuc . "' WHERE id_sanpham='$_GET[idsanpham]'";
  }

  mysqli_query($mysqli, $sql_update);
  header("Location:../../index.php?action=quanlysanpham&query=add");
} else {
  //Xoa sp
  $id = $_GET['idsanpham'];
  $sql = "SELECT * FROM sanpham WHERE id_sanpham='$id' LIMIT 1";
  $query = mysqli_query($mysqli, $sql);
  while ($row = mysqli_fetch_array($query)) {
    unlink('uploads/' . $row['hinhanh']);
  }
  $sql_delete = "DELETE FROM sanpham WHERE id_sanpham='" . $id . "'";
  mysqli_query($mysqli, $sql_delete);
  header("Location:../../index.php?action=quanlysanpham&query=add");
}
?>