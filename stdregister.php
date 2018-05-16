<?php
  session_start();

    include 'connection.php';
    
//query to see if the std_id is already registered
    if(isset($_POST['std_id']))
    {
      $std_id=$_POST['std_id'];

      $query_select="select std_id from register where std_id='$std_id'";
      $select_result= mysqli_query($dbc,$query_select) or die ('error selecting');
      if(mysqli_num_rows($select_result)!=0)
      {
        die ("<script>
        alert('Already a member. Try logging in')</script>");
      }
    }

$email=$_POST['email_id'];
$fname=$_POST['firstname'];
$lname=$_POST['lastname'];
$std_id=$_POST['std_id'];
$gender=$_POST['sex'];
$cpassword=$_POST['cpassword'];
$password=$_POST['password'];
  //if not a member then insert into database
      $query_insert="insert into register values('$fname','$lname','$email','$std_id','$password','$gender','$cpassword')";
      $insert_result =mysqli_query($dbc,$query_insert) or die ('error inserting');

   mysqli_close($dbc);
 header('location:home.html');
?>


