<?php


include_once 'dbh.php';

$first=$_POST['first'];
$last=$_POST['last'];
$email=$_POST['email'];
$uid=$_POST['uid'];
$pswrd=$_POST['pswrd'];


$sql=" insert into users(user_first,user_last,user_email,user_uid,user_pswrd) values
        ('$first','$last','$email','$uid','$pswrd'); ";
mysqli_query($conn ,$sql);

header("Location :../GetData_from_database.php?signup=success");