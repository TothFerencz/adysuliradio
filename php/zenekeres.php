<?php

ini_set('display_startup_errors', 1);
ini_set('display_errors', 1);
error_reporting(-1);

if(isset($_POST['submit'])){
    $name = $_POST['name'];
    $last = $_POST['last'];
    $email = $_POST['email'];
    
    $conn = mysqli_connect("localhost","root","","adysuliradio");

    $sql = "INSERT INTO users(name,last,email) VALUES ('$name','$last','$email')";
    mysqli_query($conn,$sql);

}

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../css/manage.css">
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
    <title>Zenekérés|Ady-sulirádió</title>
</head>
<body>
    <div class="container">
      <div class="wrapper">
        <div class="title"><span>Zenekérés</span></div>
        <form action="#" method="post">
          
        <div class="row">
          <input type="text" class="field" name="name" placeholder="Név" required="">
          </div>
          <div class="row">
          <input type="text" class="field" name="last" placeholder="Zene-előadó" required="">
          </div>
          <div class="row">
          <input type="email" class="field" name="email" placeholder="Email" required="">
          </div>
          <div class="row button">
            <input type="submit" onclick="validation();" class="field" name="submit" value="Beküldés">
            </script>
          </div>
          <center>
          <a href="../index.html">Főoldal</a>
          </center>
        </form>
      </div>
</div>

</body>
</html>