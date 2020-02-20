<!DOCTYPE html>
<html lang="en">
<head>
    <title>Arrays</title>
</head>
<body>
    <?php
        $arr = array("Uva", "Pera", "Maça");
        $arr2 = [
            "Fruta-1" => "Uva",
            "Fruta-2" => "Pera",
            "Fruta-2" => "Maçã"
        ];
        $arr3 = [];
        $arr3[10] = 1000;
        $arr3[5] = "Caderno";
        $arr3[6] = "Lucas";

        echo "<pre>";
        print_r($arr2);
        echo "</pre>";

        echo "<pre>";
        print_r($arr3);
        echo "</pre>";

    ?>
</body>
</html>