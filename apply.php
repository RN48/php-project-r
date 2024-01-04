<form action="apply.php" method="POSt">
Name: <input type="text" name="fname">
<br>
Name: <input type="text" name="lname">
<br>
<input type="submit">

</form>

<?php
echo $_POST["fname"];
echo $_POST["lname"];
?>
