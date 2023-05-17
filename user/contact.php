<?php
session_start();
include('../php/connection.php');
if(isset($_POST['submitBtn']))
{
$acid=$_SESSION['acc_id'];
$msg=$_POST['Message'];
$query="INSERT INTO feedback(acc_id,feed) VALUES('$acid','$msg');";
$result=mysqli_query($conn,$query);
if($result)
{
    echo "<script>alert('Thank You For Your Response..\n We will be in Touch Shortly');top.location='../home.php';</script>";

}
else echo "Feedback Failed to Reach the Servers!";
}
?>
<html>
    <head>
    <title>CONTACT | PMS</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <meta name="keywords" content="Conjugality web template, Bootstrap Web Templates, Flat Web Templates, Android Compatible web template, Smartphone Compatible web template, free webdesigns for Nokia, Samsung, LG, SonyEricsson, Motorola web design" />
    <!--// Meta tag Keywords -->
    <!-- css files -->
    <link rel="stylesheet" href="../css/bootstrap.css"> <!-- Bootstrap-Core-CSS -->
    <link rel="stylesheet" href="../css/style.css" type="text/css" media="all" /> <!-- Style-CSS --> 
    <link rel="stylesheet" href="../css/font-awesome.css"> <!-- Font-Awesome-Icons-CSS -->
    <!-- //css files -->
    <!-- online-fonts -->
    <link href="//fonts.googleapis.com/css?family=Economica:400,400i,700,700i&amp;subset=latin-ext" rel="stylesheet">
    <link href="//fonts.googleapis.com/css?family=Exo:100,100i,200,200i,300,300i,400,400i,500,500i,600,600i,700,700i,800,800i,900,900i&amp;subset=latin-ext" rel="stylesheet">
    </head>
  <body>
        <div class="contact" id="contact">
            <div class="container" style="width: 100%;background-color:#999; height:fit-content;">
                <h3 class="w3_tittle">Contact Us</h3>	
                    <div class="contact-grid1">
                        <div class="contact-top1">
                            <form id="myForm" method="POST">
                                <div class="form-group">
                                    <label>Message</label>
                                        <textarea placeholder="Type Feedback" name="Message" required></textarea>
                                </div>
                                    <input type="submit" id="submitBtn" name="submitBtn" onclick="function sub(){document.getElementById('myForm').submit();}" value="Send">
                            </form>
                        </div>
                    </div>
            </div>
        </div>
            <script src="../js/jquery-2.1.4.min.js"></script>
			<script src="../js/bootstrap.js"></script> 
		    <script src="../js/responsiveslides.min.js"></script>
  </body>
</html>