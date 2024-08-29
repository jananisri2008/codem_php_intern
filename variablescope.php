<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Global and Local and Static</title>
</head>
<body>
    <?php
    $a=10;
    $b=2;
    function first()
    {
        $GLOBALS['c']=$GLOBALS['a']-$GLOBALS['b'];
    }
    first();
    print $c;
    ?>
</body>
</html>