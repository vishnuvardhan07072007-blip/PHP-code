<html>
<body>
<form method ="post">
Enter Email: <input type="text"name="email">
<input type="submit"value="check">
</form>
<?php
if(isset($_POST['email'])){
    $email=$_POST['email'];
    if(filter_var($email,FILTER_VALIDATE_EMAIL))
        echo"valid Email Address";
    else
        echo"Invalid Email Address";
}
?>
</body>
</html>