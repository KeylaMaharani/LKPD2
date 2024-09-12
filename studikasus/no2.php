<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<?php

$a;
for ($a = 1; $a <= 100; $a++) {
    if ($a % 3 == 0 && $a % 5 == 0 ) {
        echo "FizzBuzz";
    } elseif ($a % 3 == 0) {
        echo "Fizz";
    } elseif ($a % 5 == 0) {
        echo "Buzz";
    } else {
        echo $a;
    }
        echo "<br>";
}
?>
</body>
</html>