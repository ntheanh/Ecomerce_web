<?php
$sql_list_danhmucsp = "SELECT * FROM danhmuc ORDER BY thutu ASC";
$query_list_danhmucsp = mysqli_query($mysqli, $sql_list_danhmucsp);
?>

<h2>Sua danh muc sp</h2>
<table border="1" style="width:100%; font-size: 2rem;">
  <tr>
    <td>ID</td>
    <td>Ten danh muc</td>
    <td>Quan ly</td>
    <td>So luong</td>
  </tr>
  <?php
  $i = 0;
  while ($row = mysqli_fetch_array($query_list_danhmucsp)) {
    $i++;
    ?>
    <tr>
      <td>
        <?php echo $i ?>
      </td>
      <td>
        <?php echo $row['tendanhmuc'] ?>
      </td>
      <td>
        <a href="modules/quanlydanhmucsp/xuly.php?iddanhmuc=<?php echo $row['id_danhmuc'] ?>">XOA</a> | <a
          href="?action=quanlydanhmucsanpham&query=update&iddanhmuc=<?php echo $row['id_danhmuc'] ?>">SUA</a>
      </td>
      <td>
        <?php echo $row['thutu'] ?>
      </td>
    </tr>
    <?php
  }
  ?>
</table>