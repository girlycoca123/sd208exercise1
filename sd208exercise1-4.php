<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP</title>
</head>
<body>
    <?php
    function check($num)
    {
      $result = $num % 3 == 0 ? ( $num % 5==0 ? "FizzBuzz" : "Fizz" ) : ( $num % 5 == 0  ? "Buzz" : $num );
      return $result;
    }
    function Divisble($start ,$end){
    for ($x = $start; $x <= $end; $x++) {
      echo check($x).'<br/>';
    }
  }
  Divisble(1,100);
    ?>
</body>
</html>