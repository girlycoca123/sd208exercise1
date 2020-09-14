<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP</title>
</head>
<body>
    <?php

$string = "Knock Knock whos laban there laban";

$string_array = explode(" ",$string);


foreach($string_array as $value){

    if(isset($str_count[$value])){
        $str_count[$value]++;

    }else{
        $str_count[$value]=1;
    }
}
foreach($str_count as $key => $value){
    echo $key."=> ".$value."<br>";
}
    ?>


</body>
</html>