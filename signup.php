<!DOCTYPE html>
<html>
<head>
	<title>Sign Up</title>
	<meta charset="utf-8">
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous">	
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<style type="text/css">
		label {
			font-size: 16px !important;
		}
	</style>
</head>
<body>
   
  

	<div class="container">

		<div class="card">
			
			<div class="card-header bg-primary text-white">
				Sign-up Form
			</div> <!--Card Head End-->
			<form action="" method="POST">
			<div class="card-body">
			    <div class="row">
				<div class="col-sm-6">
				<label>Enter your Full Name</label>
				<input type="text" name="fullname" class="form-control" placeholder="Enter Full Name">
				</div>
				<div class="col-sm-6" style="text-align: left;">
				<label>Sex</label>
				<input type="radio" name="sex" id="male" style="margin-left: 10px">Male
				<input type="radio" name="sex" id="female" style="margin-left: 10px">Female
				<input type="radio" name="sex" id="other" style="margin-left: 10px">Other
				</div>
				<div class="col-sm-6">
				<label>Choose Date of Birth</label>
				<input type="date" name="dob" class="form-control"></div>
				<div class="col-sm-6">
				<label>Enter your Place of Birth</label>
				<input type="text" name="place" class="form-control" placeholder="Enter Place of Birth"></div>
				<div class="col-sm-6">
				<label>Enter your Phone Number</label>
				<input type="number" name="phone" class="form-control" placeholder="Enter Phone Number"></div>
				<div class="col-sm-6">
				<label>Enter your Email</label>
				<input type="email" name="email" class="form-control" placeholder="Enter Email"></div>
				<div class="col-sm-6">
				<label>Choose your username</label>
				<input type="text" name="username" class="form-control" placeholder="Enter Username"></div>
				<div class="col-sm-6">
				<label>Enter your password</label><input type="password" name="password" class="form-control" placeholder="Enter Password"></div>
				<div class="col-sm-6">
				<label>Upload your Image</label>
				<input type="file" name="image" class="form-control"></div>
				<div class="col-sm-6">
				<button type="submit" class="btn btn-danger bt1 m-5" onclick="add()">Sign Up</button></div>
			</div>
			</div> <!--Card Body End-->
		</div> <!--Card End-->
		</form>
	</div>
</body>
</html>