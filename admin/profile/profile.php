<?php
session_start();
include('../../php/connection.php');
$query="SELECT * FROM admins";
$res=mysqli_query($conn,$query);
$row=mysqli_fetch_array($res,MYSQLI_ASSOC);
if(isset($_POST['Sub']))
{
$aname=$_POST['aname'];
$apwd=$_POST['apwd'];
$sql="UPDATE admins SET a_name='$aname', a_pwd='$apwd' WHERE a_id=1";
$r=mysqli_query($conn,$sql);
if($r)
{
	?><script>alert('Admin Credentials Updated!!');top.location.replace('../admin.php');</script><?php
}
else
{
	?><script>alert('Admin Credentials Updation Failed!!');</script><?php
}
}
if(isset($_POST['bac']))
{
	?><script>top.location.replace('../admin.php');</script><?php
}
?>
<!doctype html>
<html lang="en">
  <head>
  	<title>PMS | ADMIN PROFILE</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

	<link href="https://fonts.googleapis.com/css?family=Lato:300,400,700&display=swap" rel="stylesheet">

	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
	
	<link rel="stylesheet" href="css/style.css">

	</head>
	<body>
	<section class="ftco-section">
		<div class="container">
			<div class="row justify-content-center">
				<div class="col-md-6 text-center mb-5">
					<h2 class="heading-section">ADMIN PROFILE</h2>
				</div>
			</div>
			<div class="row justify-content-center">
				<div class="col-md-7 col-lg-5">
					<div class="wrap">
						<div class="img" style="background-image: url(images/bg-1.jpg);"></div>
						<div class="login-wrap p-4 p-md-5">
			      	<div class="d-flex">
			      		<div class="w-100">
			      			<h3 class="mb-4">PROFILE</h3>
			      		</div>
							
			      	</div>
							<form action="" method="POST" class="signin-form">
			      		<div class="form-group mt-3">
			      			<input type="text" name="aname" value="<?php echo $row['a_name']; ?>" class="form-control" required>
			      			<label class="form-control-placeholder" for="username">Admin Username</label>
			      		</div>
						<br>
		            <div class="form-group">
		              <input id="password-field" name="apwd" value="<?php echo $row['a_pwd']; ?>" type="password" class="form-control" required>
		              <label class="form-control-placeholder" for="password">Password</label>
		              <span toggle="#password-field" class="fa fa-fw fa-eye field-icon toggle-password"></span>
		            </div>
		            <div class="form-group">
		            	<button type="submit" id="Sub" name="Sub" class="form-control btn btn-primary rounded submit px-3">UPDATE</button>
						<br><br>
						<button id="bac" name="bac" class="form-control btn btn-secondary rounded px-3">CANCEL</button>
		            </div>
		          </form>
		         
		        </div>
		      </div>
				</div>
			</div>
		</div>
	</section>
	<script src="js/jquery.min.js">
	</script>
  <script src="js/popper.js"></script>
  <script src="js/bootstrap.min.js"></script>
  <script src="js/main.js"></script>

	</body>
</html>

