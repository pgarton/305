<?php
/**
 * Buckle program
 * tostrander.greenriverdev.com/305b/buckle
 */

$number = $_POST['number'];
switch($number) {
    case 1 :case 2:
        print "Buckle my shoe";
        break;
    case 3 :
        print "Unlock the door";

}

//Turn on error reporting -- this is critical!
ini_set('display_errors', 1);
error_reporting(E_ALL);
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Buckle My Shoe</title>
</head>
<body>
<h2>Buckle My Shoe</h2>
<h3>Enter a number 1-10 to see what you should do!</h3>
<form method="post" action="#">
    <label>Number: <input type="text" name="number"></label>
    <input type="submit" value="Go">
</form>
</body>