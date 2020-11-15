<html>
<head>
<title>Website</title>
<link rel="stylesheet" href="css/bootstrap.min.css">
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js" integrity="sha384-B4gt1jrGC7Jh4AgTPSdUtOBvfO8shuf57BaghqFfPlYxofvL8/KUEfYiJOMMV+rV" crossorigin="anonymous"></script>
<style>
.banner-bg{
	background-image:url('images/picture.jpg');
	max-width:100%;
	height:460px;
	background-repeat: no-repeat;
	background-size: cover;
	color:#fff;
	text-align:center;
}
.side-menu{
	list-style:none;
}
.side-menu li{
	
}
.side-menu li a{
	border: 0px black solid;
    padding: 5px 15px;
    display: block;
    color: #fff;
    background: #15c8f1;
    border-radius: 3px;
    margin-top: 6px;
}
.side-menu li a:hover{
	text-decoration:none;
}
h3{
	    font-weight: 400;
}
#footer{
	
    background: #000;
    padding-top: 50px;
    color: #fff;
}
#footer a{
	color:#fff;
}
.dropdown:hover>.dropdown-menu {
  display: block;
}

.dropdown>.dropdown-toggle:active {
  /*Without this, clicking will make it sticky*/
    pointer-events: none;
}
</style>
</head>
<body>

<div class="container-fluid banner-bg">
<h1></h1>
</div>

<nav class="navbar navbar-expand-lg navbar-light bg-light">
  <a class="navbar-brand" href="#">Ski & Snowboard Destinations</a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>
  <div class="collapse navbar-collapse" id="navbarNavDropdown">
    <ul class="navbar-nav">
<li class="nav-item active"><a class="nav-link" href="index.php">Home <span class="sr-only">(current)</span></a></li>
     

<li class="nav-item dropdown">
<a class="nav-link dropdown-toggle" href="#" id="germany" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
Germany</a>
<div class="dropdown-menu" aria-labelledby="germany">
<a class="dropdown-item" href="garmisch.php">Garmisch-Partenkirchen</a>
<a class="dropdown-item" href="winterberg.php">Winterberg</a>
<a class="dropdown-item" href="nebelhorn.php">Nebelhorn–Oberstdorf</a>
</div>
</li>

<li class="nav-item dropdown">
<a class="nav-link dropdown-toggle" href="#" id="swit" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
Switzerland</a>
<div class="dropdown-menu" aria-labelledby="swit">
<a class="dropdown-item" href="matterhorn.php">Matterhorn</a>
<a class="dropdown-item" href="stmoritz.php">St.Moritz-Corviglia</a>
<a class="dropdown-item" href="parsenn.php">Parsenn</a>
</div>
</li>

<li class="nav-item dropdown">
<a class="nav-link dropdown-toggle" href="#" id="austria" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
Austria</a>
<div class="dropdown-menu" aria-labelledby="austria">
<a class="dropdown-item" href="ischgl.php">Ischgl</a>
<a class="dropdown-item" href="ellmau.php">Ellmau</a>
<a class="dropdown-item" href="obergargl.php">Obergargl-Hochgurgl</a>
</div>
</li>

<li class="nav-item dropdown">
<a class="nav-link dropdown-toggle" href="#" id="italy" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
Italy</a>
<div class="dropdown-menu" aria-labelledby="italy">
<a class="dropdown-item" href="breuil.php">Breuil-Cervinia</a>
<a class="dropdown-item" href="livigno.php">Livigno</a>
<a class="dropdown-item" href="kronplatz.php">Kronplatz</a>
</div>
</li>

<li class="nav-item dropdown">
<a class="nav-link dropdown-toggle" href="#" id="france" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
France</a>
<div class="dropdown-menu" aria-labelledby="france">
<a class="dropdown-item" href="chamonix.php">Chamonix</a>
<a class="dropdown-item" href="tignez.php">Tignez</a>
<a class="dropdown-item" href="megeve.php">Megeve</a>
</div>
</li>

<li class="nav-item dropdown">
<a class="nav-link dropdown-toggle" href="#" id="spain" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
Poland</a>
<div class="dropdown-menu" aria-labelledby="spain">
<a class="dropdown-item" href="kotelnica.php">Kotelnica Bialczanska</a>
<a class="dropdown-item" href="szczyrk.php">Szczyrk</a>
<a class="dropdown-item" href="polana.php">Polana Szymoszkowa</a>
</div>
</li>

<li class="nav-item dropdown">
<a class="nav-link dropdown-toggle" href="#" id="about" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
Quick links</a>
<div class="dropdown-menu" aria-labelledby="about">
<a class="dropdown-item" href="login.php">Login</a>
<a class="dropdown-item" href="contact.php">Contact form</a>
<a class="dropdown-item" href="opinion.php">Opinion</a>
</div>
</li>


    </ul>
  </div>
</nav>

