<h2>Liet ke danh muc</h2>
<?php
$sql_lietke_danhmucsp = "SELECT * FROM danhmuc ORDER BY thutu DESC";
$query_lietke_danhmucsp = mysqli_query($mysqli, $sql_lietke_danhmucsp);
?>
<table border="1" style="width: 100%">
  <tr>
    <td>ID</td>
    <td>Ten danh muc</td>
    <td>Quan ly</td>
  </tr>
  <?php
  $i = 0;
  while ($row = mysqli_fetch_array($query_lietke_danhmucsp)) {
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
        <?php echo $row['thutu'] ?>
      </td>
    </tr>
    <?php
  } ?>
</table>