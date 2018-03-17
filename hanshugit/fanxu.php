<html>  
  <head>      
      <title>反序递归</title>  
      </head>  
  <body>
    <?php
    $a=12345;
      echo $a;
      echo "<br/>";
    function fun($n){
        echo $n%10;
        if($n>10)
            fun($n/10);
    }

    fun($a);
?>
</body>
</html>
