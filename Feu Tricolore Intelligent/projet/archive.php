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
	<title>Archive</title>
	<link href="css/archive.css" type="text/css" rel="stylesheet">
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css">	
	<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js"></script>
	<link href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css"
	rel="stylesheet">
</head>
<body class="a">
	<nav class="navbar " style="background-color: rgba(0, 2, 0, 0.7) ">
	 	<div >
	    <h5><img src="images/logo.png" width="30" height="30" class="d-inline-block align-top" alt=""/>
	    Feu Tricolore Intelligent</h4>
		</div>
		<h5>
		<i class="fa fa-user-circle-o" ></i>
		<?php
			echo $prenom ;
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
	<div class="row">
		<div class="col-lg-3"></div>
		<div class="col-lg-6 ">
		<table style="text-align: center;background-color:rgba(0, 2, 0, 0.5)" class="table table-bordered table-striped table-dark b">
		<thead>
			<tr>
			    <th><b>L'ID DE LA ROUTE</b></th>
			    <th><b>L'ID DU FEU</b></th>
			    <th><b>LA DENSITÉ</b></th>
			    <th><b>L'ÉTAT DU FEU</b></th>
			</tr>
			<?php
				$db_username = 'root';
			    $db_password = '';
			    $db_name     = 'projet';
			    $db_host     = 'localhost:3308';
			    $db = mysqli_connect($db_host, $db_username, $db_password,$db_name)
           or die('could not connect to database');
			

			$sql = "SELECT id_route,id_feu,nbr_v,etat FROM system";
            $result= mysqli_query($db,$sql);
			  while($row = mysqli_fetch_assoc($result)) {
			    echo "<tr><td>" . $row["id_route"]. "</td><td>" .$row["id_feu"]. "</td><td>" .$row["nbr_v"] . " </td><td>".$row["etat"]."</td></tr>";
			  }

		?>
		</tbody>

	</table>
</div>
<div class="col-lg-3"></div>
</div>
</body>
</html>
