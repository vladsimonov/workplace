<!doctype html>
<html>
<head>
    <title>Lesson 5</title>
</head>
<body>
<?php
    $i=1;
        while($i <= 1000){
    $result = "";
    $zero = 4 - strlen($i);
        for($zero; $zero > 0; $zero--){
            $result .= 0;
    }
    $result .= $i;
    $firstHalf = $result[0] + $result[1];
    $secondHalf = $result[2] + $result[3];
if($firstHalf == $secondHalf){
    echo $result." - is a happy ticket! <br>";
}
    $i++;
}

?>
</body>
</html>