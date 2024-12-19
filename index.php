<!DOCTYPE html>
<html>

<head>
    <title>PHP</title>
</head>

<body>
    <h1>PHP index.php</h1>
    <h1><?php echo $myvar; ?></h1>
    <?php $x = 1;
    function myfunction($myparam)
    {
        global $x;
        $x = "Hello";
        return $myparam;
    }
    echo "<p>" . MYFunCTION("Hello World!") . "</p>"
    ?>
    <h1><?php echo $x; ?></h1>
    <?php echo "1" + '1'; //2//11 
    ?>
    <?php
    $mychar = "a";
    ?>
    <h1 ><?php echo ++ $mychar; ?></h1>
        <?php
        if (1 == 1) {
            echo "1 == \"1\"";
        } elseif (true) {
            echo "1 != \"1\"";
        }

        $my_array = array(1, 2, 3, 4, 5);
        for ($i = 0; $i < count($my_array); $i++) {
            echo $my_array[$i];
        }
        echo "<br>";
        foreach ($my_array as $index => $value) {
            echo $value;
        }
        echo "</br>";
        $my_array[] = 1;
        $my_array[] = 2;
        $my_array[] = 3;
        $my_array[] = 4;
        $my_array[] = 5;
        print_r($my_array2);
        echo "<br>";
        $my_arra3 = array(1, 2, 3, "myindex" => 4, 0 => 9);
        $my_arra3["myindex"] = 1;
        print_r($my_arra3);
        foreach ($my_array as $value) {
            echo $value;
        }
        ?>
        </body>

</html>