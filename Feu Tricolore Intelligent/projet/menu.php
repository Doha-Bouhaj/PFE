<?php
session_start();
if($_SESSION['fname'] !== ""){
                    $prenom =$_SESSION['fname'];
                }
?>
<!DOCTYPE html>
<html>
<head>
	<link rel="shortcut icon" href="images/logo.ico" />
	<title>ACCUEIL</title>
	<link href="css/menu.css" type="text/css" rel="stylesheet">
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css">	
	<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js"></script>
	<link href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css"
	rel="stylesheet">
</head>
<body>
	<nav class="navbar " style="background-color: rgba(0, 2, 0, 0.7) ">
	 	<div >
	    <h5><img src="images/logo.png" width="30" height="30" class="d-inline-block align-top" alt=""/>
	    Feu Tricolore Intelligent</h5>
		</div>
		<h5>
		<i class="fa fa-user-circle-o" ></i>

		<?php
			
			echo $prenom;
                if(isset($_GET['deconnexion']))
                { 
                   if($_GET['deconnexion']==true)
                   {  
                      session_unset();
                      header("location:index.php");
                   }
                }
		?>
		<button class="btn btn-outline-primary"><a href='menu.php?deconnexion=true'><span>Déconnexion</span></a></button>
		</h5>
	</nav>
	<div class="container">
		<div class="services">
			<h1>BIENVENUE</h1>
			
		</div>
		<div class="row">
			<div class="col-md-2"></div>
			<div class="col-md-3 text-center">
				<div class="icon">
					<i class="fa fa-archive"></i>
				</div>
				<a href="archive.php"><h3>L'ARCHIVE</h3></a>
				<p>Ici vous trouverez les anciens états Des feux tricolores intelligents des routes   </p>
			</div>
			<div class="col-md-2"></div>
			
			<div class="col-md-3 text-center">
				<div class="icon ">
					<i class="fa fa-clock-o"></i>
				</div>
				<a href="consulter.php"><h3>L'ÉTAT ACTUEL</h3></a>
				<p>Là vous pouvez consulter l'état actuel Des feux tricolores intelligents dans chaque route</p>
			</div>

			<div class="col-md-2"></div>
		</div>	
		
	</div>		

</body>
</html>