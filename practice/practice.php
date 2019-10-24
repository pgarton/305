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
    <title><?php
        function average($num1, num2) {
            return ($num1/$num2);
        };

        function largest($num1, $num2) {
            if ($num1 > $num2)
                return $num1;
            else
                return $num2;
        }

        print("the largest is ". largest(3, 4););


    ?></title>
</head>
<body>
<?php echo '<h1> average(3,5)</h1>'; ?>
</body>
</html>