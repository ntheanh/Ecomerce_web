<style>
  table {
    width: 50%;
  }

  input {
    font-size: 2rem;
    width: 100%;
  }
</style>
<?php
$sql_update_sp = "SELECT * FROM sanpham WHERE id_sanpham = '$_GET[idsanpham]' ";
$query_update_sp = mysqli_query($mysqli, $sql_update_sp
?>

<h2>Update san pham</h2>
<table border="1">
  <?php
  while ($line = mysqli_fetch_array($query_update_sp)) {
    ?
    <form action="modules/quanlysp/xuly.php?idsanpham=<?php echo $_GET['idsanpham'] ?>" enctype="multipart/form-data"
      method="POST"
    <form action="modules/quanlysp/xuly.php?idsanpham=<?php echo $_GET['idsanpham'] ?>" method="POST">

// echo $query_update_danhmuc;
?>

<h2>Update san pham</h2>
<form action="modules/quanlysp/xuly.php?idsanpham=<?php echo $_GET['idsanpham'] ?>" method="POST">
  <table border="1">
    <?php
    while ($line = mysqli_fetch_array($query_update_sp)) {
      ?
      <tr>
        <td>Ten san pham</td>
        <td><input type="text" name="tensanpham" value="<?php echo $line['ten_sp'] ?>"></td>
      </tr>
      <tr>
        <td>Ma san pham</td>
        <td><input type="text" name="masp" value="<?php echo $line['ma_sp'] ?>"></td>
      </tr>
      <tr>
        <td>Gia</td>
        <td><input type="text" name="gia" value="<?php echo $line['gia_sp'] ?>"></td>
      </tr>
      <tr>
        <td>So luong</td>
        <td><input type="text" name="soluong" value="<?php echo $line['soluong'] ?>"></td>
      </tr>
      <tr>
        <td>Hinh anh</td>
        <td>
          <input type="file" name="hinhanh">
          <img src="modules/quanlysp/uploads/<?php echo $line['hinhanh'] ?>" alt="" width="150px">
        </td>
      </tr>
      <tr>
        <td>Tom tat</td>
        <td><textarea rows="10" name="tomtat" style="resize: none"><?php echo $line['tomtat'] ?></textarea></td>
      </tr>
      <tr>
        <td>Noi dung</td>
        <td><textarea rows="10" name="noidung" style="resize: none"><?php echo $line['noidung'] ?></textarea></td>
      </tr>
      <tr>
        <td>Danh muc san pham</td>
        <td>
          <select name="danhmuc">
            <?php
            $sql_danhmuc = "SELECT * FROM danhmuc ORDER BY id_danhmuc DESC";
            $query_danhmuc = mysqli_query($mysqli, $sql_danhmuc);
            while ($row_danhmuc = mysqli_fetch_array($query_danhmuc)) {
              if ($row_danhmuc["id_danhmuc"] == $line["id_danhmuc"]) {
                ?>
                <option selected value="<?php echo $row_danhmuc['id_danhmuc'] ?>">
                  <?php echo $row_danhmuc['tendanhmuc'] ?>
                </option>
                <?php
              } else {
                ?>
                <option value="<?php echo $row_danhmuc['id_danhmuc'] ?>">
                  <?php echo $row_danhmuc['tendanhmuc'] ?>
                </option>
                <?php
              }
              ?>
              <?php
            }
            ?>
          </select>
        </td>
        <td><input type="file" name="hinhanh"></td>
      </tr>
      <tr>
        <td>Tom tat</td>

        <td><textarea rows="10" name="tomtat" style="resize: none"><?php $line['tomtat'] ?></textarea></td>
      </tr>
      <tr>
        <td>Noi dung</td>
        <td><textarea rows="10" name="noidung" style="resize: none"><?php $line['noidung'] ?></textarea></td>

        <td><textarea rows="10" name="tomtat" style="resize:none" value="<?php echo $line['tomtat'] ?>"></textarea></td>
      </tr>
      <tr>
        <td>Noi dung</td>
        <td><textarea rows="10" name="noidung" style="resize:none" value="<?php echo $line['noidung'] ?>"></textarea></td>


      </tr>
      <tr>
        <td>Tinh trang</td>
        <td>
          <select name="tinhtrang">
            <?php
            if ($line['tinhtrang'] == 1) {
              ?>
              <option value="1" selected>Kich hoat</option>
              <option value="0">An</option>
              <?php
            } else {
              ?>
              <option value="1">Kich hoat</option>
              <option value="0" selected>An</option>
              <?php
            }
            ?>
            <option value="1">Kich hoat</option>
            <option value="0">An</option>

          </select>
        </td>
      </tr>
      <tr>
        <td colspan="2"><input type="submit" name="suasanpham" value="Update san pham"></td>
      </tr>
    </form>
    <?php
  }
  ?>
</table>
</table>

      <?php
    }
    ?>
  </table>
</form>
