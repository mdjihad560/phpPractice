<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
  <title>IfElse</title>
</head>

<body>

  <div class="container">

    <?php

    $username = "jihad";
    $password = 12345;

    if (($username == "jihad") && ($password == 12345)) {
      echo "Login Successfull";
    } else {
      echo "Login Failed";
    }
    ?>

  </div>

</body>

</html>