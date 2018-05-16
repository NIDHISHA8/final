<?php
include('connection.php');
session_start(); // Starting Session
$id1=$_POST['item_id'];
$name1=$_POST['item_name'];
$price1=$_POST['price'];
$query_insert="insert into menu(item_id,item_name,price) values('$id1','$name1','$price1');";
mysqli_query($dbc,$query_insert) or die ('error inserting'.mysqli_error($dbc));
if(isset($_POST['upload'])){
  $target="it1/".basename($_FILES["file"]["name"]);

  $img1=$_FILES['file']['name'];
  $error=$_FILES['file']['error'];
$q="insert into image values('','$id1','$img1')";
mysqli_query($dbc,$q) or die ('error inserting'.mysqli_error($dbc));

   if(move_uploaded_file($_FILES['file']['tmp_name'],$target)){

  $msg="file uploaded succesfully";
  echo "<script>
  alert('successfully uploaded');
        window.location.href='admin.html';
        </script>";
}
else{
$msg="Failed to upload a file";
   echo "<script>
  alert('error uploading image');
        window.location.href='admin.php';
        </script>";
}
}
?>
