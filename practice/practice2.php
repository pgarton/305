_A<?php
/*  This is a demo page for PHP basics
 *  Oct 14th 2019
 *  Paul Garton
 */

    // turn on error reporting -- this is critical;
    ini_set('display_errors', 1);
    error_reporting(E_ALL);

    // declare variables
    $title = 'Hello World!';
    $heading = 'Happy Monday!';


?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title><?php echo $title; ?></title>
</head>
<body>
<?php echo '<h1> Happy monday</h1>'; ?>
</body>
</html>