<meta charset="utf-8">
<form action="./engine/server.php" method="POST">
  <input type="number" name="firstNumber" value="4"> 

  <input type="radio" name="operator" value="+" checked="checked"> + 
  <input type="radio" name="operator" value="-"> - 
  <input type="radio" name="operator" value="*"> * 
  <input type="radio" name="operator" value="/"> / 

  <input type="number" name="secondNumber" value="7">

  <input type="submit" name="send" value="=">
  <span><?= round($_GET['result'], 3) ?></span>
</form>

