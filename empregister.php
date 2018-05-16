<?php
  session_start();

    include 'connection.php';
    
//query to see if the std_id is already registered
    if(isset($_POST['emp_id']))
    {
      $emp_id=$_POST['emp_id'];

      $query_select="select emp_id from register_e where emp_id='$emp_id'";
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
$emp_id=$_POST['emp_id'];
$gender=$_POST['sex'];
$cpassword=$_POST['cpassword'];
$password=$_POST['password'];
  //if not a member then insert into database
      $query_insert="insert into register_e values('$fname','$lname','$email','$emp_id','$password','$gender','$cpassword')";
      $insert_result =mysqli_query($dbc,$query_insert) or die ('error inserting');

   mysqli_close($dbc);
header('location:home.html');
?>


