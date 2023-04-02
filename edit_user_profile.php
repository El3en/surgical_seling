<?php
	session_start();
	if(!isset($_SESSION['user_id']))
		header('location:login.php');
?>
<!DOCTYPE HTML>
<html>
	<head>
		<title>Jewellery.Com | Home</title>
		<link href="css/bootstrap.css" rel="stylesheet" type="text/css" media="all" />
		<link href="css/font-awesome.css" rel="stylesheet">
		  
		
		<script src="js/jquery.min.js"></script>

<link href="css/bootstrap.css" rel="stylesheet" type="text/css" media="all" />
<link href="css/style.css" rel="stylesheet" type="text/css" media="all" />

<!--start slider -->
    <link rel="stylesheet" href="css/fwslider.css" media="all">
<!----------Menu----------------------->
<link href="css/memenu.css" rel="stylesheet" type="text/css" media="all" />
<!----------Filter----------------------->
<link href="css/filter.css" rel="stylesheet" type="text/css" media="all" />
<!----------Icons----------------------->
<link href="css/icon.css" rel="stylesheet" type="text/css" media="all" />
<link rel="stylesheet" href="css/font-awesome.min.css" />
<!----------Company----------------------->
<link rel="stylesheet" href="css/company.css" />
<!----------Footer----------------------->
<link href="css/footer.css" rel='stylesheet' type='text/css' />
<!-- MiniSlider files -->
<link href="css/minislider.css" rel='stylesheet' type='text/css' />
<link href="css/owl.carousel.css" rel="stylesheet">

<link href="css/footer.css" rel="stylesheet">


	
	
    <link href="css/profile/custom.css" rel="stylesheet">

<!------------ data table ------------------------>
	 <link href="css/profile/table/custom.css" rel="stylesheet">


		
		
	</head>
	<body style="background:black;">

<?php
	include("top_head.php");
	
	include("header.php");

?>

<div class="container">
<br>
<br>
<?php
	include('conection.php');
	
	$id = $_SESSION['user_id'];
	$user4 = "select * from user where u_id = '".$id."' ";
	$user3 = mysqli_query($connect,$user4);
	$user = mysqli_fetch_array($user3);
?>
	<div class="row" id="main">
        <div class="col-md-4 well" id="leftPanel">
            
                <div>
                	<div>
        				<img src="<?php echo('images/'.$user['image']); ?>" alt="Texto Alternativo" width="150px" class="img-circle img-thumbnail">
        				<h2><?php echo($user['name']); ?></h2>
        			</div>
					
        		</div>
			<div class="row1">
				<div class="profile-block" >
					<div class="panel text-center">
						<ul class="nav nav-pills nav-stacked" >
							<li><a href="user_profile.php" >Profile</a></li>
							<li class="active"><a href="edit_user_profile.php">Edit profile</a></li>
							<li><a href="message.php">Messages</a></li>
							<li><a href="purchase_record.php">Purchase Record</a></li>
							<li><a href="logout.php">Logout</a></li>
					
						</ul>
					 </div>
				</div>
            </div>
        </div>
    <div class="col-md-8 well" id="rightPanel" style="height:530px">
            <div class="row">
    <div class="col-md-12">
    	
			<h3>Edit your profile.<small>It's always easy</small></h3>
			<hr class="colorgraph">
			<div class="row">
		<form action="user_profile_edit_action.php" method="POST">
				<div class="col-xs-12 col-sm-6 col-md-6">
				<label>Name</label>
					<div class="form-group">
					<input type="hidden" name="id" value="<?php echo($user['u_id']);?>">
                        <input type="name" name="fname" id="first_name" value="<?php echo($user['name']); ?>" class="form-control input-lg" placeholder="First Name" title="First Name" tabindex="1">
				</div>
				</div>

<div class="col-xs-12 col-sm-6 col-md-6">
			<div class="form-group">
			<label>Phone No</label>
				<input type="name" name="phone" id="email" value="<?php echo($user['number']); ?>" class="form-control input-lg" placeholder="Phone No.." title="Phone No.." tabindex="4">
			</div>				
			</div>	
			</div>
			
			<div class="form-group">
			<label>Address</label>
				<input type="name" name="address" id="email" value="<?php echo($user['address']); ?>" class="form-control input-lg" placeholder="Address" title="Address" tabindex="4">
			</div>
			<div class="row">
				<div class="col-xs-12 col-sm-6 col-md-6">
				<label>Username</label>
					<div class="form-group">
						<input type="name" name="username" id="password" readonly value="<?php echo($user['username']); ?>" class="form-control input-lg" placeholder="Username" title="Username"tabindex="5">
					</div>
				</div>
				<div class="col-xs-12 col-sm-6 col-md-6">
				<label>Password</label>
					<div class="form-group">
						<input type="name" name="password" id="password" value="<?php echo($user['password']); ?>" class="form-control input-lg" placeholder="Password" title="Password"tabindex="6">
					</div>
				</div>
			</div>

			<div class="form-group">
			<label>City</label>
				<select class="form-control" name="city" title="City">
					<option><?php echo($user['city']); ?></option>
					<option>Dubai</option>
					<option>Abu Dhabi</option>
					<option>Zayed City</option>
					<option>Sharjah</option>
				</select>
			</div>
			<hr class="colorgraph">
			<div class="row">
				<div class="col-xs-12 col-md-6"></div>
				<div class="col-xs-12 col-md-6"><input type="submit" value="Save" class="btn btn-success btn-block btn-lg"></div>
			</div>
		</form>
	</div>
</div>

</div>
        </div>
     </div>       


	
<?php 
	include("footer.php");
?>
		
		<script type="text/javascript" src="js/megamenu.js"></script>
		<script>$(document).ready(function(){$(".megamenu").megamenu();});</script>
		<script src="js/bootstrap.min.js"></script>

		
		
	</section>
	</body>
</html>

