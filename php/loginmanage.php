<?php

ini_set('display_startup_errors', 1);
ini_set('display_errors', 1);
error_reporting(-1);

session_start();
$con = mysqli_connect('localhost','root','','adysuliradio') or die('Nem lehet csatlakozni');
?>
<!DOCTYPE html>

<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
     <title>Adyrádió-Admin</title> 
    <link rel="stylesheet" href="../css/manage.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.2/css/all.min.css"/>
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
  </head>
  <body>
    <div class="container">
      <div class="wrapper">
        <div class="title"><span>Adyrádió-Admin</span></div>
        <form action="loginmanage.php" method="post">
          <div class="row">
            <i class="fas fa-user"></i>
            <input type="text" class="field" name="Username" placeholder="Felhasználónév" required="">
          </div>
          <div class="row">
            <i class="fas fa-lock"></i>
            <input type="password" class="field" name="Pass" placeholder="Jelszó" required>
          </div>
         
          <div class="row button">
            <input type="submit" class="field" name="login" value="Bejelentezés">
          </div>
          <center>
          <a href="../index.html">Főoldal</a>
          </center>
          
        </form>
      </div>
    </div>
    <?php
    if(isset($_POST['login'])){
        $Username = $_POST['Username'];
        $Pass = $_POST['Pass'];

        $select = mysqli_query( $con, "SELECT * FROM tb_admin Where Username = '$Username' AND Pass = '$Pass' ");
        $row = mysqli_fetch_array($select);

        if(is_array($row)){
            $_SESSION["Username"] = $row['Username'];
            $_SESSION["Pass"] = $row['Pass'];
        }
            else
            {
             
            }
        }
        if(isset($_SESSION["Username"])){
            header("Location:../php/manage.php");
        }
    
    ?>

  </body>
</html>