<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
        $a = rand(1,20);
        $b = rand(1,20);
        $c = rand(1,20);
        
        echo "<p> le premier nombre est:$a </p>";
        echo "<p> le deuxieme nombre est:$b </p>";
        echo "<p> le troisieme nombre est:$c </p>";
        if ($a > $b and $a > $c) {
            echo "le max est:", $a;

        }
        else if ($b>$a and $b>$c ) {
            echo "le max est:", $b;
        }
        else {
            echo "le max est:", $c; 
        }
    ?>

</body>
</html>
