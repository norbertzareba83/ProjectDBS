<?php
include 'dbconfig.php';

if(isset($_POST['submit'])){

	$funame = $_POST['uname'];
	$fpword = $_POST['pword'];
	
	$link = mysqli_connect($server,$dbuname,$dbpass,$dbname);


	$myquery = "SELECT * FROM users where 
	username = '$funame' AND password = '$fpword'";

	$result = mysqli_query($link,$myquery);

	if($result){
		
	$row_cnt = $result->num_rows;
	
	$row = $result->fetch_assoc();
	
	if($row_cnt > 0){
		
		$_SESSION['loggedinuser'] = $row['username'];
	
	}
	else{
		echo "<h1>Wrong username or password</h1>" ;
		
	}
	}
}

$logged_in = false;

if (isset($_SESSION['loggedinuser'])){
	$user = $_SESSION['loggedinuser'];
	$logged_in = true;
}
if ($logged_in) {
	
	echo 'Logged as: <b>'.$_SESSION['loggedinuser'] .'</b>';
	echo '<br><a href="/logout.php">Log Out</a>';
} else {
?>


<?php include('header.php'); ?>

<div class="container-fluid">
<div class="row">

<div class="col-sm-9"><br/>
<div class="col-sm-12">

<h3>Ski & Snowboard Destination website</h3>
<p align="justify">
<p>On this website you can find most popular ski and snowboard destination across Europe</p>
<p>You can see map of the resourt with all useful information about each resort</p>
<p>Also you can view sample YouTube video from each place</p>
<p>At the end there is a direct link to TripAdvisor website for the resort</p>

</p>
</p>
</div>
</div>

<div class="col-sm-3"><br/>
<div class="col-xs-12">
<h3 class="text-center">Login for Admin</h3><br>

<form method='post'>

	<input type='text' name='uname' placeholder='username'/>
	<input type='password' name='pword' placeholder='password'/>

	<input type='submit' name='submit' value='submit'/>
	
</form>

</div>
</div>

</div>
</div>

	
<?php include('footer.php'); ?>



<?php	
}

?>



