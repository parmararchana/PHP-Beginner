<?php

include_once ("dbh.php");

?>

<!doctype html>
<html>
<head>
    <title></title>
</head>
<body>
<form action="signup.php" method="post">

    <input type="text" name="first" placeholder="Firstname">
    <br>
    <input type="text" name="last" placeholder="Lastname">
    <br>
    <input type="text" name="email" placeholder="Email Id">
    <br>
    <input type="text" name="uid" placeholder="User id">
    <br>
    <input type="password" name="pswrd" placeholder="Password">
    <br>
    <button type="submit" name="submit">Sign up</button>


</form>

</body>
</html>
