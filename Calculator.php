<!Doctype html >
<html>
<head>

    <title>Title of the document</title>
    <style>
        #container{
            text-align: center;
        }
    </style>
</head>
<body>
<form>
    <div id="container">
    &nbsp;&nbsp;
    <input type="text" name="num1" placeholder="Number 1">
    &nbsp;&nbsp;&nbsp;
    <input type="text" name="num2" placeholder="Number 2">
    &nbsp;&nbsp;&nbsp;
    <select name="operation">
        <option>None</option>
        <option>Add</option>
        <option>Subtraction</option>
        <option>Multiplication</option>
        <option>Division</option>
    </select>
    </div>
    <br>
    <br>
    <div id="container">
    <button  name="submit"type="submit" value="submit">Calculate</button>
    </div>

</form>
</body>
</html>

<?php

if(isset($_GET['submit'])){
    $num1=$_GET['num1'];
    $num2=$_GET['num2'];
    $cal=$_GET['operation'];

switch ($cal) {
    case 'None':
        echo "<b>You have to select operation<b>";
        break;
    case 'Add':
        $n = $num1 + $num2;
        echo "<br>The addition of $num1 and $num2 is : " . $n;
        break;
    case 'Subtraction':
        $n = $num1 - $num2;
        echo "<br>The subtraction of $num1 and $num2 is : " . $n;
        break;
    case 'Multiplication':
        $n = $num1 * $num2;
        echo "<br>The multiplication of $num1 and $num2 is : " . $n;
        break;
    case 'Division':
        $n = $num1 / $num2;
        echo "<br>The division of $num1 and $num2 is : " . $n;
        break;
}
}
?>