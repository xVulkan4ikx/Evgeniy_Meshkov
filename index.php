<!DOCTYPE html>
<html>
    <head>
    </head>
    <body>
        <?php
        $array = array(10, 20, 15, 17, 24, 35);
        $result = 0;
        foreach ($array as $elem) {
            $result = $result + $elem;
        }
        echo $result;
        ?>
    </body>
</html>
