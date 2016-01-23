<?
  $root = realpath($_SERVER["DOCUMENT_ROOT"]);
?>

<form action="awc.php" method="POST">
  ICAO Airport Code: <input type="text" name="code"><br>
  <input type="submit" value="Submit">
</form>
