<html>  
  <head>      
      <title>水仙花数</title>  
      </head>  
  <body>
<?php
function cube( $n )
{
    return $n * $n * $n;
}

function fun( $n )
{
    $hundreds = floor( $n / 100);
    $tens = floor( $n / 10 ) % 10;
    $ones = floor( $n % 10 );
    return (bool)(cube($hundreds)+cube($tens)+cube($ones) == $n);
}
for ( $i = 100; $i < 1000; ++ $i )
{
    if ( fun($i) )
        echo $i."\n";
}
?>
</body>
</html>
