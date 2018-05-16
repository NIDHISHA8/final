<?php
    $con= new mysqli("localhost","root","123456","it");
    $name = $_POST['search'];
    
    if (mysqli_connect_errno())
      {
      echo "Failed to connect to MySQL: " . mysqli_connect_error();
      }

$result = mysqli_query($con, "select * from menu where (item_name like '%{$name}%')");

while ($row = mysqli_fetch_array($result))
{
        echo $row['item_name'];
        echo "<br>";
}
    mysqli_close($con);
    ?>
