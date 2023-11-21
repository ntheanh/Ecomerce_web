<h3>Thêm danh mục</h3>
<style>
  table {
    width: 50%;
    font-size: 2rem;
    border-collapse: collapse;
  }

  input {
    width: 100%;
    outline: none;
    border: none;
    padding: 1rem;
  }
</style>
<form action="modules/quanlydanhmucsp/xuly.php" method="POST">
  <table border="1">
    <tr>
      <th>Tên danh mục:</th>
      <td><input type="text" name="tendanhmuc" placeholder="Nhập tên danh mục"></td>
    </tr>
    <tr>
      <th>Thứ tự:</th>
      <td><input type="text" name="thutu" placeholder="Nhập số thứ tự"></td>
    </tr>
    <tr>
      <td colspan="2"><input type="submit" name="themdanhmuc" value="Thêm danh mục sản phẩm"></td>
    </tr>
  </table>
</form>