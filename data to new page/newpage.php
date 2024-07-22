
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
</head>


<style>
.carded{
  margin-left:300px;
}

.card-img-top{
  height:450px;
}


</style>
<body>



<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script> 


</body>
</html>

<?php

include "connection.php";
if(isset($_GET["id"])){
$id = $_GET["id"];


$sql = "select * from ecommerce where id = ".$id.";";
$stmt = $conn->prepare($sql);        //constant code
$stmt->execute();                   //constant code      
$result = $stmt->get_result();      //constant code


if (mysqli_num_rows($result) > 0) {     //constant code
   $result1 = $result->fetch_assoc();
    $name = $result1["name"];
    $image = $result1["image"];
    $price = $result1["price"];
    $description = $result1["description"];
    $id = $result1["id"];

echo'

<h1 style="text-align:center;" >'.$name.'</h1>
<div class="carded" style="width: 40rem;">
  <img src='.$image.' class="card-img-top" alt="...">
  <div class="card-body">
    <p class="card-text">'.$description.'</p>
  </div>
  <button type="button" class="btn btn-info btn">Info</button>
</div>

';

   

}
}
    ?>
  <script src="index.js"></script>




