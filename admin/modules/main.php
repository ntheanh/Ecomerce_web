<div class="main">
  <?php
  if (isset($_GET["action"]) && $_GET['query']) {
    $tam = $_GET["action"];
    $query = $_GET["query"];
  } else {
    $tam = "";
    $query = "";
  }
  if ($tam == "quanlydanhmucsanpham" && $query == "add") {
    include("modules/quanlydanhmucsp/them.php");
    include("modules/quanlydanhmucsp/lietke.php");
  } elseif ($tam == "quanlydanhmucsanpham" && $query == "update") {
    include("modules/quanlydanhmucsp/sua.php");
  } else {
    include("dashboard.php");
  }

  ?>
</div>