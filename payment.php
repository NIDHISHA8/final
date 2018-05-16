<html>
<?php if(!isset($_SESSION['user'])){
    header("Location:login.php");
}
?>
    <head>
        <title>Payment</title>
        
       
       
        <style>
       
input    {
width:375px;
display:block;
border: 1px solid #999;
height: 25px;
-webkit-box-shadow: 0px 0px 8px rgba(0, 0, 0, 0.3);
-moz-box-shadow: 0px 0px 8px rgba(0, 0, 0, 0.3);
box-shadow: 0px 0px 8px rgba(0, 0, 0, 0.3);
}
input.button {
width:100px;
position:absolute;
right:20px;
bottom:20px;
background:#09C;
color:#fff;
font-family: Tahoma, Geneva, sans-serif;
height:30px;
-webkit-border-radius: 15px;
-moz-border-radius: 15px;
border-radius: 15px;
border: 1p solid #999;
}
input.button:hover {
background:#fff;
color:#09C;
}
form    {
background: -webkit-gradient(linear, bottom, left 175px, from(#CCCCCC), to(#EEEEEE));
background: -moz-linear-gradient(bottom, #CCCCCC, #EEEEEE 175px);
margin:auto;
position:relative;
width:550px;
height:350px;
font-family: Tahoma, Geneva, sans-serif;
font-size: 14px;
font-style: italic;
line-height: 24px;
font-weight: bold;
color: #000000;
text-decoration: none;
-webkit-border-radius: 10px;
-moz-border-radius: 10px;
border-radius: 10px;
padding:10px;
border: 1px solid #999;
border: inset 1px solid #333;
-webkit-box-shadow: 0px 0px 8px rgba(0, 0, 0, 0.3);
-moz-box-shadow: 0px 0px 8px rgba(0, 0, 0, 0.3);
box-shadow: 0px 0px 8px rgba(0, 0, 0, 0.3);
}

input::-webkit-input-placeholder {
  color:     #f00;
}
textarea#feedback {
width:375px;
height:150px;
}
textarea.message {
display:block;
}
h2
{
    color:red;
}
        </style>
    </head>
    <body style="background:-webkit-linear-gradient(left top,BurlyWood,Chocolate,Darkkhaki,BlanchedAlmond,BurlyWood); background: linear-gradient(to bottom right,BurlyWood,CadetBlue,Darkkhaki,BlanchedAlmond,BurlyWood);">

        <!-- Header -->
            <header id="header">
                <h1><a href="index.php">BookMyTicket</a></h1>
                <nav id="nav">
                    <ul>
                        <li><a href="order.php">Home</a></li>
                   
                        <li><a href="order.php">Booking History</a></li>
                        <li><a href="order.php">View Profile</a></li>
                   
                        <li><a href="logout.php">Logout</a></li>
                    </ul>
                </nav>
            </header>
            <div class="container">
            <?php
        session_start();

       
        $_SESSION['Total_fare']=$_GET['Total_fare'];
        $_SESSION['Bus_id']=$_GET['Bus_id'];
        $_SESSION['Seats_no']=$_GET['Seats_no'];
        ?>

        <!-- Main -->
            <section id="main" class="wrapper">
                <div class="container">

                    <header class="major">
                        <center><i><font size="35"><strong>Hello <?php echo $_SESSION['user']?></font></i></strong></center>
                        <br>
                        <h3>Welcome to BookMyTicket</h3>
                    </header>

               

            </div>
            </section>
            <center>    <h2>Payment</h2> </center>
            <form action="book.php" method="POST">
  Select a bank
    <!-- &nbsp; &nbsp; &nbsp; &nbsp;-->
  <select name="Bank" class="form-control">
      <option value="SBH">State Bank of Hyderabad</option>
      <option value="SBI">State Bank of India</option>
      <option value="AB">Andhra Bank</option> </select>
      <br>
  Choose a payment method 
   <!-- &nbsp; &nbsp; &nbsp; &nbsp;-->
<select name="Payment_method" class="form-control">
      <option value="Net Banking">Net Banking</option>
      <option value="Debit card">Debit card</option> </select>
      <br>
      <p> <i>Total Fare: <?php echo $_GET['Total_fare'] ?></i></p>
  <br>
  <input class="btn btn-primary" type="submit" value="Submit">
</form>
<br>
<a href="#" class="image fit"><img src="images1/bus3.jpg" alt="" /></a>
</div>
   
        <?php include 'footer.php'; ?>
    </body>
</html>
