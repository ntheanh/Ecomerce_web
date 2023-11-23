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
$sql_update_danhmucsp = "SELECT * FROM danhmuc WHERE id_danhmuc='$_GET[iddanhmuc]' LIMIT 1";
$query_update_danhmucsp = mysqli_query($mysqli, $sql_update_danhmucsp);
?>
<h2>Sua danh muc san pham</h2>
<form action="modules/quanlydanhmucsp/xuly.php?iddanhmuc=<?php echo $_GET['iddanhmuc'] ?>" method="POST">
  <table border="1">
    <?php
    while ($dong = mysqli_fetch_array($query_update_danhmucsp)) {
      ?>
      <tr>
        <td>Ten danh muc</td>
        <td><input type="text" name="tendanhmuc" value="<?php echo $dong['tendanhmuc'] ?>"
            placeholder="Nhap ten danh muc">
        </td>
      </tr>
      <tr>
        <td>Thu tu</td>
        <td><input type="number" name="thutu" min="1" max="50" value="<?php echo $dong['thutu'] ?>"
            placeholder="Nhap so thu tu"></td>
      </tr>
      <tr>
        <td colspan="2"><input type="submit" name="suadanhmuc" value="Sua danh muc"></td>
      </tr>
      <?php
    } ?>
  </table>
</form>