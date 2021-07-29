<meta charset="utf-8">
<form action="./engine/server.php" method="POST">
  <input type="number" name="firstNumber" value="4">

  <select name="operator">
    <option>+</option>
    <option>-</option>
    <option>*</option>
    <option>/</option>
  </select>

  <input type="number" name="secondNumber" value="7">

  <input type="submit" name="send" value="=">
  <span><?= $_GET['result'] ?></span>
</form>

