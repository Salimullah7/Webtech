<?PHP
session_start();

?>

<!DOCTYPE html>
<html>

<head>

	<title>xCompany</title>
	<link rel="stylesheet" type="text/css" href="homepage.css">

</head>

<body>

	<section class="sec-index">
	
		<img src="Capture.PNG" alt="xCompany" class="logo-img">

		<div class="right-float">

			<p>Logged in as <u><?php echo $_SESSION["name"]; ?></u> | <a href=""><u>Logout</u></a></p>

		</div>

		<h3>Welcome to xCompany</h3>

		<div class="account">
			
			<p><strong>Account</strong></p>
			
			<ul>

				<li><a href=""><u>Dashboard</u></a></li>
				<li><a href="ViewProfile.php"><u>View Profile</u></a></li>
				<li><a href="ProfileEdit.php"><u>Edit Profile</u><a/></li>
				<li><a href=""><u>Change Profile Picture</u></a></li>
				<li><a href="ChangePass.php"><u>Change Password</u></a></li>
				<li><a href="login.html"><u>Logout</u></a></li>

			</ul>

		</div>

		<div class="vertical-line"></div>

		<div class="welcome-name">


			
			<p><strong>PROFILE</strong><p>
				<ul>
				<li>Name: <?php echo $_SESSION["name"]; ?> </li> 
				<li>Email: <?php echo $_SESSION["email"]; ?> </li>
				<li>Gender: <?php print_r($_SESSION["gender"]); ?></li>
				<li>Date of Birth: <?PHP echo $_SESSION["dob"]; ?> </li>
					</ul>

		</div>

		<p class="copyright">Copyright &copy; 2017<p>

	</section>
</body>
</html>
<?php
$hostname="localhost"; 
$username="root";
$password="";
$database="xcompany";
$conn=mysqli_connect($hostname,$username,$password,$database);
 
if(!$conn)
{
die("Connection cannot be establish: " . mysqli_connect_error());
}
 
$query="SELECT image FROM reg WHERE UName='UName'";
$query=mysqli_query($conn,$query);
 
$image=mysqli_fetch_array($query);
?>
 
<html>
<head>
<title>Image fetching from Database</title>
</head>
<body>
 
<img src="<?php echo 'upload/'.$path['image'];?>" />
 

</body>
</html>
