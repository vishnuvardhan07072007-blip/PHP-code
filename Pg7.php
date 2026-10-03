<html>
<body>
<form method="POST">
enter a number:<input type="number"name="num">
<input type="submit"value="show">
</form>
<?php
if(isset($_POST['num'])){
    $num=$_POST['num'];
    for($i=1;$i<=10;$i++)
        echo"$num*$i=".($num*$i)."<br>";
}
?>
</body>
</html>