<?php

ini_set('display_startup_errors', 1);
ini_set('display_errors', 1);
error_reporting(-1);

if(isset($_POST['submit'])){
    $Username = $_POST['Username'];
    $Pass= $_POST['Pass'];
    header("Location:../php/adminmanage.php");
    
    
    $conn = mysqli_connect("localhost","root","","adysuliradio");

    $sql = "INSERT INTO tb_admin(Username,Pass) VALUES ('$Username','$Pass')";
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
    <title>Admin-Kezelő|Ady-sulirádió</title>
</head>
<body>
 
    <div class="container">
      <div class="wrapper">
        <div class="title"><span>Admin hozzáadás</span></div>
        <form action="#" method="post">
          
        <div class="row">
          <input type="text" class="field" name="Username" placeholder="Név" required="">
          </div>
          <div class="row">
          <input type="password" class="field" name="Pass" placeholder="Jelszó" required>
          </div>
          <div class="row button">
            <input type="submit" class="field" name="submit" value="Hozzáadás">
          </div>
          <center>
          <a href="../index.html">Főoldal</a>
          </center>
        </form>
        
      </div>
</div>

</body>
</html>