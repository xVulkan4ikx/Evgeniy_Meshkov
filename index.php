<!DOCTYPE html>
<html>
    <head>
    </head>
    <body>
        <?php
        $array = array(10, 20, 15, 17, 24, 35);
        $result = 0;
        for ($i=0;$i<=5;$i++) {
            $result = $result + $array[$i];
        }
        echo $result;
        ?>
    </body>
</html>
