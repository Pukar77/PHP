<?php

include'connection.php';

?>


<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.1.3/dist/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
  
    <title>CRUD</title>
  </head>
  <body>
  <button type="submit" name="submit" class="btn btn-primary my-5 mx-5" ><a href="index.php" class="text-light" >Add user</button></a>
  
  <table class="table table-hover">
  <thead>
    <tr>
      <th scope="col">S.N</th>
      <th scope="col">Title</th>
      <th scope="col">Description</th>
      <th scope="col">Date</th>
      <th scope="col">Operation</th>
    </tr>
  </thead>
   <tbody> 
   <?php
$sql="Select * from `notes`";
$result=mysqli_query($conn, $sql);

if($result){
   while($row=mysqli_fetch_assoc($result)){
   
    $sn=$row['S.N'];       //bracket bhitra table ma j name xa tei huna parxa esma
    $Title=$row['Title'];
  $description=$row['Description'];
  $date=$row['Time'];   

  echo '<tr>
  <th scope="row">'.$sn.'</th>
  <th scope="row">'.$Title.'</th>
  <td>'.$description.'</td>
  <th scope="row">'.$date.'</th>
  <td>

  <button type="button" class="btn btn-primary"><a href="update.php" class="text-light">Update</button>
  <button type="button" class="btn btn-danger"><a href="delete.php?deleteid='.$sn.'" class="text-light">Delete</button>
  </td>
  
 
</tr>';
   }
}

?>
    
    <!-- <tr>
      <th scope="row">2</th>
      <td>Jacob</td>
      <td>Thornton</td>
      <td>@fat</td>
    </tr>
    <tr>
      <th scope="row">3</th>
      <td colspan="2">Larry the Bird</td>
      <td>@twitter</td>
    </tr> -->
  </tbody> 
  
</table>


    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.14.3/dist/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.1.3/dist/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>
  </body>
</html>


