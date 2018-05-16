<?php
session_start();


include 'connection.php';


if(!isset($_GET['err'])){
  $error=0;}
else {
  $error=$_GET['err'];
}
?>
 

<?php
if(isset($_POST['std_id']))
{
$std_id=$_POST['std_id'];
$password=$_POST['password'];

$query_login="select * from register where std_id='$std_id' and password ='$password'";
$result_login=mysqli_query($dbc,$query_login) or die ("error in login query");
if(mysqli_num_rows($result_login)==0)
{
die("<script> alert('incorrect '); </script>");
}
else
{
$row=mysqli_fetch_array($result_login);
if($row['password']==$password)
{
$_SESSION['logged_in']=1;
$_SESSION['logged_user']=$row['fname'];
}
else 
{
die("<script> alert('Incorrect password') </script>");
}
}
}
mysqli_close($dbc);
header('location:home.html');
?>



