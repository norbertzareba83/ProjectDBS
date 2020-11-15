<?php include('header.php'); ?>

<div class="container-fluid">
<div class="row">

<div class="col-sm-4"><br/>
<div class="col-sm-12">

<h1>Please submit your opinion</h1>

<form action="opinion-view.php" method="post" target="_self">

<p>Select destination to add opinion about:<br>
<select name="country" >
		<option>Select a country</option>
		<option>Germany</option>
		<option>Switzerland</option>
		<option>Austria</option>
		<option>Italy</option>
		<option>France</option>
		<option>Poland</option>
</select>
<select name="destination" >
		<option>Select a destination</option>
		<option>Garmisch-Partenkirchen</option>
		<option>Winterberg</option>
		<option>Nobelhorn-Obersdorf</option>
		<option>Matterhorn</option>
		<option>St.Moritz-Corviglia</option>
		<option>Parsenn</option>
		<option>Ischgl</option>
		<option>Ellmau</option>
		<option>Obergargl-Hochgurgl</option>
		<option>Breuil-Cervinia</option>
		<option>Livigno</option>
		<option>Kronplatz</option>
		<option>Chamonix</option>
		<option>Tignez</option>
		<option>Megeve</option>
		<option>Kotelnica Bialczanska</option>
		<option>Szczyrk</option>
		<option>Polana Szymoszkowa</option>
</select>
</p>

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

<p>Opinion:<br>
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