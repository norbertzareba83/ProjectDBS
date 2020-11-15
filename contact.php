<?php include('header.php'); ?>

<div class="container-fluid">
<div class="row">

<div class="col-sm-4"><br/>
<div class="col-sm-12">

<h1>Contact user form</h1>

<form action="contact-view.php" method="post" target="_self">

<p>Please enter your name:<br>
<input type="text" name="name" size="50" maxlenght="50">
</p>

<p>Please enter your email:<br>
<input type="text" name="email" size="50" maxlenght="50">
</p>

</div>
</div>

<div class="col-sm-5"><br/>
<div class="col-sm-12">

<p>Comment:<br>
<textarea name="message" cols="80" rows="10" wrap="virtual"></textarea><br>
<input type="submit" name="submit" value="Submit">
</p>

</form>
</p>
</div>
</div>

<?php include('admin.php'); ?>

</div>
</div>

	
<?php include('footer.php'); ?>
