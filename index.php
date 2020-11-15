<?php session_start();
if(isset($_SESSION['login_user']))
{echo 'Siema Norbert'; die();
}
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
</div>
</div>
<?php include('admin.php'); ?>

</div>
</div>

	
<?php include('footer.php'); ?>