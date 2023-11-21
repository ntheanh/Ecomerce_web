<div class="main">
  <?php
  if (isset($_GET["action"])) {
    $tam = $_GET["action"];
  } else {
    $tam = "";
  }
  if ($tam == "quanlydanhmucsanpham") {
    include("modules/quanlydanhmucsp/them.php");
  } else {
    include("dashboard.php");
  }

  ?>
</div>