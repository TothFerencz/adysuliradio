<?php 
session_start();

$con = mysqli_connect("localhost","root","","adysuliradio");


function dispaly_data(){
    global $con;
    $query = "select * from tb_admin";
    $result = mysqli_query($con,$query);
    return $result;
  }



$result = dispaly_data();


?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="../css/bootstrap.min.css">
  <title>Ady-sulirádió Admin Panel</title>
</head>
<body class="bg-dark">
    <div class="container">
      <div class="row mt-5">
        <div class="col">
          <div class="card mt-5">
            <div class="card-header">
              <h2 class="display-6 text-center">Ady-sulirádió Admin Panel</h2>
              <center>
              <p>Üdv <?php echo $_SESSION["Username"] ?> </p>
                <a href="./addadmin.php">

              <button class="btn btn-outline-dark">Admin Kezelés</button>
              </a>
              <a href="./logoutmanage.php">
                <button class="btn btn-outline-dark">Kijelentkezés</button>
              </a>        
              </center>
            </div>
            <div class="card-body">
              <table class="table table-bordered text-center">
                <tr class="bg-dark text-white">
                <td>ID</td>  
                <td> Név </td>
                  <td> Jelszó </td>
                  
                </tr>
                <tr>
                <?php 

                  while($row = mysqli_fetch_assoc($result))
                  {
                ?>
                <td><?php echo $row['id']; ?></td>
                  <td><?php echo $row['Username']; ?></td>
                  <td><?php echo $row['Pass']; ?></td>
                   
                </tr>
                <?php    
                  }
                
                ?> 
                
              </table>
            </div>
          </div>
        </div>
      </div>
    </div>
</body>
</html>