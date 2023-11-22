<style>
  table {
    width: 50%;
  }

  input {
    font-size: 2rem;
    width: 100%;
  }
</style>
<h2>Them danh muc san pham</h2>
<form action="modules/quanlydanhmucsp/xuly.php" method="POST">
  <table border="1">
    <tr>
      <td>Ten danh muc</td>
      <td><input type="text" name="tendanhmuc" placeholder="Nhap ten danh muc"></td>
    </tr>
    <tr>
      <td>Thu tu</td>
      <td><input type="number" name="thutu" min="1" max="50" placeholder="Nhap so thu tu"></td>
    </tr>
    <tr>
      <td colspan="2"><input type="submit" name="themdanhmuc" value="Them danh muc"></td>
    </tr>
  </table>
</form>