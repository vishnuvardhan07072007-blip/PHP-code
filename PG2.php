<html>
<body>
<form method="get">
Enter n: <input type="number"name="n">
<input type="submit"value="Find sum">
</form>
<?php
if(isset($_GET['n'])){
    $n=$_GET['n'];
    $count=0;
    $num=2;
    $sum=0;
    while($count<$n){
        $prime=1;
        for($i=2;$i<$num;$i++){
            if($num%$i==0){
                $prime=0;
                break;
            }
        }
        if($prime==1){
            $sum=$sum+$num;
            $count++;
        }
        $num++;
    }
    echo"sum of first $n prime numbers=$sum";
}
?>
</body>
</html>