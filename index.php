<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Factors of a Positive Integer</title>
</head>
<body>
    <?php
     $num = 44;
     $i = 1;
 
     echo "Factors of $num are:<br>";
     while ($i <= $num) {
         if ($num % $i == 0) {
             echo "$i<br>";
         }
         $i++;
     }
    ?>
</body>
</html>