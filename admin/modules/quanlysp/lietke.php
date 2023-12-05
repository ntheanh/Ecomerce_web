<?php

$sql_list_sp = "SELECT * FROM sanpham, danhmuc WHERE sanpham.id_danhmuc = danhmuc.id_danhmuc ORDER BY id_sanpham DESC";

$sql_list_sp = "SELECT * FROM sanpham ORDER BY id_sanpham DESC";

$query_list_sp = mysqli_query($mysqli, $sql_list_sp);
?>

<h2>Liet ke san pham </h2>
<table border="1" style="width:100%; font-size: 2rem;">
  <tr>
    <td>Ten san pham</td>
    <td>Ma san pham</td>
    <td>Hinh anh</td>
    <td>Gia</td>
    <td>So luong</td>

    <td>Danh muc</td>


    <td>Tom tat</td>
    <td>Noi dung</td>
    <td>Tinh trang</td>
    <td>Quan ly</td>
  </tr>
  <?php
  $i = 0;
  while ($row = mysqli_fetch_array($query_list_sp)) {
    $i++;
    ?>
    <tr>
      <td>
        <?php echo $row['ten_sp'] ?>
      </td>
      <td>
        <?php echo $row['ma_sp'] ?>
      </td>
      <td>
        <img src="modules/quanlysp/uploads/<?php echo $row['hinhanh'] ?>" alt="" width="150px">
      </td>
      <td>
        <?php echo $row['gia_sp'] ?>
      </td>
      <td>
        <?php echo $row['soluong'] ?>
      </td>
      <td>

        <?php echo $row['tendanhmuc'] ?>
      </td>
      <td>

        <?php echo $row['tomtat'] ?>
      </td>
      <td>
        <?php echo $row['noidung'] ?>
      </td>
      <td>
        <?php if ($row['tinhtrang'] == 1) {
          echo 'Kich hoat';
        } else {
          echo 'An';
        } ?>
      </td>
      <td>
        <a href="modules/quanlysp/xuly.php?idsanpham=<?php echo $row['id_sanpham'] ?>">XOA</a> | <a
          href="?action=quanlysanpham&query=update&idsanpham=<?php echo $row['id_sanpham'] ?>">SUA</a>
      </td>
    </tr>
    <?php
  }
  ?>
</table>