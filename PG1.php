<html>
<body>
<form method="get">
Enter A:<input type="number"name="a"><br><br>
Enter B:<input type="number"name="b"><br><br>
Enter C:<input type="number"name="c"><br><br>
Enter D:<input type="number"name="d"><br><br>
<input type="submit"value="calculate">
</form>
<?php
if(isset($_GET['a'])) {
    $a=$_GET['a'];
    $b=$_GET['b'];
    $c=$_GET['c'];
    $d=$_GET['d'];
    echo"<table border='1'>";
    echo"<tr>";
    echo"<td>$a</td><td>$b</td><td>".($a+$b)."</td>";
    echo"</tr>";
    echo"<tr>";
    echo"<td>$c</td><td>$d</td><td>".($c+$d)."</td>";
    echo"</tr>";
    echo"<tr>";
    echo"<td>".($a+$c)."</td><td>".($b+$d)."</td><td>".($a+$b+$c+$d)."</td>";
    echo"</tr>";
    echo"</table>";
}
?>
</body>
</html>