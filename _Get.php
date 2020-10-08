

<!doctype html>
<html lang="en">
<head>
    <title>Documents</title>
</head>
<body>
<form>
    <input type="text" name="keyword" placeholder="Type and hit enter">
    <button>Search</button>
</form>
</body>
</html>

<?php
//echo '<pre>';
//print_r( $_GET);
//echo '<pre>';


$value=$_GET['keyword']; // get and in bracket the name of input tag
echo "Value which is in search : ".$value.'<br>';

?>


