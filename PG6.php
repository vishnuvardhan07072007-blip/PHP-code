<html>
<body>
<form method="post">
Enter a word: <input type="text"name="word">
<input type="submit"value="show">
</form>
<?php
if(isset($_POST['word'])) {
    $word=$_POST['word'];
    echo"<span style='color:red'>".$word[0]."</span>".substr($word,1);
}
?>
</body>
</html>