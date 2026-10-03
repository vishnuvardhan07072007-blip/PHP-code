<html>
<body>
<form method="post">
Enter seconds: <input type="number"name="sec">
<input type="submit"value="Run">
</form>
<?php
if(isset($_POST['sec'])) {
    $sec=$_POST['sec'];
    echo"waiting for $sec seconds...<br>";
    sleep($sec);
    echo"program executed";
}
?>
</body>
</html>