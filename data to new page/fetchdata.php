<?php
include "connection.php";
$sql = "select * from ecommerce";
$stmt = $conn->prepare($sql);        //constant code
$stmt->execute();                   //constant code      
$result = $stmt->get_result();      //constant code


if (mysqli_num_rows($result) > 0) {     //constant code
    echo'<div class="cards">';
while($result1 = $result->fetch_assoc()){    //constant code
    $name = $result1["name"];
    $image = $result1["image"];
    $price = $result1["price"];
    $description = $result1["description"];
    $id = $result1["id"];

    echo'  
    
    
    <div class="card" style="width: 18rem;">
  <img src="'.$image.'" class="card-img-top card_img" alt="images/book1.jpg">
  <div class="card-body">
    <h2> '.$name.'</h2>
    <h4> '.$price.'</h4>
    <p class="card-text"> '.$description.' .</p>
    
    </div>
 <a <button class="btn btn-success"  href = "newpage.php?id='.$id.'"> Read More</button></a>

</div> 
';
}

echo'</div>';
}
    ?>
  
<style>
  .cards{
    display:flex;
    justify-content:center;
    flex-wrap:wrap;
    gap:30px;
  }
</style>



