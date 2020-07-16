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
	<title>Consulter</title>
	<link href="css/globalcon.css" type="text/css" rel="stylesheet">
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
	
	<?php
		$F1 = fopen('python/f1.txt', 'r+');
		$nbr1 = (int)fgets($F1);
		fclose($F1);

		$F2 = fopen('python/f2.txt', 'r+');
		$nbr2 = (int)fgets($F2);
		fclose($F2);

		$F3 = fopen('python/f3.txt', 'r+');
		$nbr3 = (int)fgets($F3);
		fclose($F3);

		$F4 = fopen('python/f4.txt', 'r+');
		$nbr4 = (int)fgets($F4);
		fclose($F4);
	
		$etat1='';
		$etat2='';
		if(($nbr1<=$nbr3&&$nbr1<=$nbr4)&&($nbr2<=$nbr3&&$nbr2<=$nbr4)){
							$etat1='rouge';
							$etat2='vert';
						}
						else{
							$etat1='vert';
							$etat2='rouge';
						}
		include'config.php';
		//update route 1				
		$sql = "UPDATE route SET nbr_v=".$nbr1." where id=1";
		$stmt=$db->prepare($sql);
		$result=$stmt->execute();
		//update route 2
		$sql = "UPDATE route SET nbr_v=".$nbr2." where id=2";
		$stmt=$db->prepare($sql);
		$result=$stmt->execute();
		//update route 3
		$sql = "UPDATE route SET nbr_v=".$nbr3." where id=3";
		$stmt=$db->prepare($sql);
		$result=$stmt->execute();
		//update route 4
		$sql = "UPDATE route SET nbr_v=".$nbr4." where id=4";
		$stmt=$db->prepare($sql);
		$result=$stmt->execute();
        //update feu 1				
        $sql = "UPDATE feu SET etat='".$etat1."' where id=1";
		$stmt=$db->prepare($sql);
		$result=$stmt->execute();
		//update feu 2				
        $sql = "UPDATE feu SET etat='".$etat1."' where id=2";
		$stmt=$db->prepare($sql);
		$result=$stmt->execute();
		//update feu 3				
        $sql = "UPDATE feu SET etat='".$etat2."' where id=3";
		$stmt=$db->prepare($sql);
		$result=$stmt->execute();
		//update feu 1				
        $sql = "UPDATE feu SET etat='".$etat2."' where id=4";
		$stmt=$db->prepare($sql);
		$result=$stmt->execute();				
		//Insert all data in archive
		$sql = "INSERT INTO system (id_route,id_feu,nbr_v,etat)
				SELECT r.id,f.id,r.nbr_v,f.etat
				FROM route r,feu f
				where r.id_feu=f.id ";
		$stmt=$db->prepare($sql);
		$result=$stmt->execute();


	?>
	<div class="row">
		<div class="col-lg-3"></div>
		<div class="col-lg-6 ">
		<table style="text-align: center;background-color:rgba(0, 2, 0, 0.5)" class="table table-bordered table-striped table-dark b">
		<thead>
			<tr>
			    <th><b>LA ROUTE</b></th>
			    <th><b>LA DENSITÉ</b></th>
			    <th><b>L'ÉTAT DU FEU</b></th>
			</tr>
		</thead>
		<tbody>
			<tr>
				<td>
					ROUTE 1
				</td>
				<td>
					<?php
						echo $nbr1;	

					?>
					
				</td>
				<td>
					<?php
						if($etat1=='rouge'){
							echo'<img src="images/rouge.png" alt="rouge">';
						}
						else{
							echo'<img src="images/vert.png" alt="rouge">';
						}	
					?>	
				</td>	
			</tr>
			<tr>
				<td>
					ROUTE 2
				</td>
				<td>
					<?php
						echo $nbr2;	

					?>
					
				</td>
				<td>
					<?php
						if($etat1=='rouge'){
							echo'<img src="images/rouge.png" alt="rouge">';
						}
						else{
							echo'<img src="images/vert.png" alt="rouge">';
						}	
					
					?>	
				</td>	
			</tr>
			<tr>
				<td>
					ROUTE 3
				</td>
				<td>
					<?php
						echo $nbr3;	

					?>
					
				</td>
				<td>
					<?php
						
						if($etat2=='rouge'){
							echo'<img src="images/rouge.png" alt="rouge">';
						}
						else{
							echo'<img src="images/vert.png" alt="rouge">';
						}	
					
					?>	
				</td>	
			</tr>
			<tr>
				<td>
					ROUTE 4
				</td>
				<td>
					<?php
						echo $nbr4;	

					?>
					
				</td>
				<td>
					<?php
						
						if($etat2=='rouge'){
							echo'<img src="images/rouge.png" alt="rouge">';
						}
						else{
							echo'<img src="images/vert.png" alt="rouge">';
						}	
					
					?>	
				</td>	
			</tr>

		</tbody>

	</table>
</div>
<div class="col-lg-3"></div>
</div>
</body>
</html>