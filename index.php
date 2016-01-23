<?
  $root = realpath($_SERVER["DOCUMENT_ROOT"]);
?>

<form action="demo_form_method.asp" method="POST">
  ICAO Airport Code: <input type="text" name="code"><br>
  <input type="submit" value="Submit">
</form>
