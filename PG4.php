<html>
<body>
<form method="post">
Enter numbers in words: <input type="text"name="word">
<input type="submit"value="convert">
</form>
<?php
if(isset($_POST['word'])){
    $word=strtolower($_POST['word']);
    switch($word){
        case"zero":echo"0";break;
        case"one":echo"1";break;
        case"two":echo"2";break;
        case"three":echo"3";break;
        case"four":echo"4";break;
        case"five":echo"5";break;
        case"six":echo"6";break;
        case"seven":echo"7";break;
        case"eight":echo"8";break;
        case"nine":echo"9";break;
        case"ten":echo"10";break;
        default:echo"invalid input";
    }
}
?>
</body>
</html>