<html>  
  <head>      
      <title>最大公约数/最小公倍数</title>  
      </head>  
  <body>
<?php
$a=9;
$b=21;
function gys($m, $n) {
    if($m ==0 && $n == 0) {
        return false;
    }
    $min = min($m, $n);
    while($min >= 1) {
        if($m % $min == 0){
            if($n % $min ==0) {
                return $min;
            }
        }
        $min -= 1;
    }
    return $min;
}
echo "最大公约数";
echo gys($a,$b);

$c=$a*$b/gys($a,$b);
echo "<br/>";
echo "最小公倍数";
echo $c;



?>
</body>
</html>