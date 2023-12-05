<<<<<<< HEAD
=======
<?php
$sql_list_danhmucsp = "SELECT * FROM danhmuc ORDER BY thutu ASC";
$query_list_danhmucsp = mysqli_query($mysqli, $sql_list_danhmucsp);
?>
<table border="1" style="width:100%; font-size: 2rem;">
>>>>>>> 9d877e60adcb89337f499096258111e012d95aee
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
<<<<<<< HEAD
  while ($row = mysqli_fetch_array($query_lietke_danhmucsp)) {
=======
  while ($row = mysqli_fetch_array($query_list_danhmucsp)) {
  </tr>
  <?php
  $i = 0;

  while ($row = mysqli_fetch_array($query_list_danhmucsp)) {

  while ($row = mysqli_fetch_array($query_lietke_danhmucsp)) {

>>>>>>> 9d877e60adcb89337f499096258111e012d95aee
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
<<<<<<< HEAD
=======
        <a href="modules/quanlydanhmucsp/xuly.php?iddanhmuc=<?php echo $row['id_danhmuc'] ?>">XOA</a> | <a
          href="?action=quanlydanhmucsanpham&query=update&iddanhmuc=<?php echo $row['id_danhmuc'] ?>">SUA</a>
      </td>
      <td>
        <?php echo $row['thutu'] ?>
        <a href="modules/quanlydanhmucsp/xuly.php?iddanhmuc=<?php echo $row['id_danhmuc'] ?>">XOA</a> | <a
          href="?action=quanlydanhmucsanpham&query=sua&iddanhmuc=<?php echo $row['id_danhmuc'] ?>">SUA</a>
      </td>
    </tr>
    <?php
  }
  ?>
>>>>>>> 9d877e60adcb89337f499096258111e012d95aee
        <?php echo $row['thutu'] ?>
      </td>
    </tr>
    <?php
  } ?>
</table>