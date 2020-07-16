<!DOCTYPE html>
<html>
	<head>
		<link rel="shortcut icon" href="images/logo.ico" />
		<title>S'IDENTIFIER</title>
		<meta name="viewport" content="width-device-width, initial-scale-1"/>
		<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css">
		<link href="css/login.css" type="text/css" rel="stylesheet">
		<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js"></script>

	</head>
	<body class="bg">
		
		<div class=" container-fluid">
			<div class="row">
			
				<div class="col-md-4 col-sm-4 col-xs-12"></div>
				<div class="col-md-4 col-sm-4 col-xs-12">
					<form action="verification.php" method="POST" class="form-con">
						<h1 class=" text-center">S'IDENTIFIER</h1>
						<div class="form-group">
							<label for="email">E-mail</label>
							<input id="email" name="email" type="text" class="form-control" placeholder="Entrez votre E-mail .."/>
						</div>
						<div class="form-group">
							<label for="password">Le Mot De Passe</label>
							<input id="pwd" name="pwd" type="password" class="form-control" placeholder="Entrez le mot de passe .."/>
						</div>
						<div class="checkbox">
							<label><input type="checkbox" value=""  />Remembre me<label>
						</div>
						
						<button type="submit" name="save" class="btn btn-block btn-success" >CONNEXION</button>
						<?php
			                if(isset($_GET['erreur'])){
			                    $err = $_GET['erreur'];
			                    if($err==1 || $err==2)
			                        echo "<p style='color:red'>E-mail ou mot de passe incorrect</p>";
			                }
			            ?>
						<div class="mt-4">
				<div class="d-flex justify-content-center links">
					Vous n'avez pas de compte? <a href="signup.php" class="ml-2">S'INSCRIRE</a>
				</div>

					</form>

				</div>
				<div class="col-md-4 col-sm-4 col-xs-12"></div>
			</div>
		</div>
	</body>
</html>	