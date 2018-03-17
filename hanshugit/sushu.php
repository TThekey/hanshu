<html>  
  <head>      
      <title>判断素数</title>  
      </head>  
  <body>
<?php
check_ss(8);

function check_ss($num) {
    for($i=2; $i < $num ; $i++) {
        if($num % $i == 0) {
            echo $num. '不是素数';
            exit;
        }
    }

    echo $num. '是素数';
}
?>
</body>
</html>
