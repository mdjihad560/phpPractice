<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
  <title>PHP</title>
</head>
<body>
  <div class="container">

    <?php 
      $a = 10;
      $b = "jihad";
      $c = true;
      $d = array("jihad");
      $e = 10.2;
      $f = null;
      

      // var_dump($f);

      // echo (rand(1,6));

      $t = 10;

      if($t > 20){
        echo "this first conditions";
      } else{
        echo "this is second conditions";
      };

      echo (min(10,12,15));
      echo (max(10,12,15))



    ?>
   
  </div>
  
</body>
</html>