<html>
<body>
<form method="post">
enter a number: <input type="number"name="num">
<input type="submit"value="show">
</form>
<?php
if(isset($_POST['num'])){
    $num=$_POST['num'];
    $fact=1;
    for($i=1;$i<=$num;$i++)
        $fact*=$i;
    echo"factorial of $num=$fact";
}
?>
</body>
</html>