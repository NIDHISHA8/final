<?php
    $con= new mysqli("localhost","root","123456","it");
    $name = $_POST['search'];
    
    if (mysqli_connect_errno())
      {
      echo "Failed to connect to MySQL: " . mysqli_connect_error();
      }
$name=$name."%";
$result = mysqli_query($con, "select item_name,price,description,img from menu,image  where menu.item_id=image.item_id and item_name like \"$name\"");


while ($row = mysqli_fetch_array($result,MYSQLI_ASSOC))
{
        
         echo '<h1>'.$row['item_name']; echo '</h1>';
	
	
 $x=$row['img'];
echo '<img src="'.$x.'"/>';
  echo "Rs.".$row['price'];
echo '<br />';
    echo '<a href="order.php"><button class="btn">ORDER</button></a>';
}
    mysqli_close($con);

    ?>
