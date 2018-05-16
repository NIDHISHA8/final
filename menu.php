
<html>

<head>

<style>

.logo

{

background-color:tomato;

opacity:0.8;
padding:30px 40px 2px 50px;

height:62px;

display:inline-block;

width:100%;

}

.sub
{
background-color:tomato;

opacity:0.8;
padding:50px 60px 20px 50px;

position:absolute;
left:550px;
top:200px;
border-bottom-left-radius:1em;
border-bottom-right-radius:1em;
border-top-left-radius:1em;
border-top-right-radius:1em;
height:62px;

display:inline-block;

width:100px;

}
.sub a
{
font-size:30px;
color:white;
text-decoration:none;
border:none;
}
.logo a

{

font-size:20px;

color:white;

text-decoration:none;

border:none;


}
  html, body
  {
    margin: 0;
    padding: 0;
  }
  
  .col
  {
    width: 20%;
    padding: 30px;
    background-color: #eee;
    float: left;
  }
  
  .col img
  {
    width: 100%;
    height:40%;	
  }
  a.button
{
appearance:button;
}
  .btn
  {
    padding: 15px 30px;
    background-color: #333;
    color: white;
    border: none;
  }
</style>

<?php
include('connection.php');
$q='select item_name,price,img from menu join image on menu.item_id=image.item_id';
$result=mysqli_query($dbc,$q) or die();

while ($row = mysqli_fetch_array($result,MYSQLI_ASSOC))
{
//$iid=$row['item_id'];
 echo '<div class="col">';
	 
    echo '<h1>'.$row['item_name']; echo '</h1>';
	$x=$row['img'];
	
  echo '<img src="'.$x.'"/>';
  
   echo "Rs.".$row['price'];
echo '<br />';

    echo '<a href="cart.php?iid="$iid"><button class="btn">Add to Cart</button></a>';
  echo '</div>';
  }?>

<form action="sum.php" method="post">
<table>
<thead>
<tr>
<td>Item Name</td>
<td>Qunatity<td>
</tr>
</thead>
<tbody>
<tr>
<td><input type="text" name="itname"/></td>
<td><input type="number" name="qu"/></td>
</tr>
<tr><td>
<input type="submit" value="Get Total"/></td>
</tr>
</tbody>

</table>
</form>
<form action="pay.php" method="post">
<input type="submit" value="Payment"/>
</form>
</html>




