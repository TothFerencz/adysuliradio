<?php 
session_start();

/*require_once('config/db.php');
$query = "select * from users";
$result = mysqli_query($con,$query);
*/
require_once '../config/db.php';
require_once '../config/functions.php';

include 'config/db.php';

$result = dispaly_data();


?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="../css/bootstrap.min.css">
  <title>Adysulirádió Admin Panel</title>
</head>
<body class="bg-dark">
    <div class="container">
      <div class="row mt-5">
        <div class="col">
          <div class="card mt-5">
            <div class="card-header">
              <h2 class="display-6 text-center">Adysulirádió Admin Panel</h2>
              <center>
              <p>Üdv <?php echo $_SESSION["Username"] ?> </p>
              
              
              <a href="./adminmanage.php">
              <button class="btn btn-outline-dark">Adminok</button>
              </a>
              <a href="./logoutmanage.php">
                <button class="btn btn-outline-dark">Kijelentkezés</button>
              </a>        
              </center>
            </div>
            <div class="card-body">
              <table class="table table-bordered text-center">
                <tr class="bg-dark text-white">
                  <td> Felhasználó ID </td>
                  <td> Név </td>
                  <td> Előadó/Zene </td>
                  <td> Email </td>
                  <td> Törlés </td>
                </tr>
                <tr>
                <?php 

                  while($row = mysqli_fetch_assoc($result))
                  {
                ?>
                  <td><?php echo $row['user_id']; ?></td>
                  <td><?php echo $row['name']; ?></td>
                  <td><?php echo $row['last']; ?></td>
                  <td><?php echo $row['email']; ?></td> 
                  <td><a href="delete.php?user_id= <?php echo $row['user_id'];?> "class="btn btn-danger">Törlés</a></td>  
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
