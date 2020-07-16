<?php
	require_once('config.php');
?>
<!DOCTYPE html>
<html>
	<head>
		<link rel="shortcut icon" href="images/logo.ico" />
		<title>INSCRIPTION</title>
		<meta name="viewport" content="width-device-width, initial-scale-1"/>
		<meta http-equiv="X-UA-Compatible" content="ie=edge">
		<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css">
		<link href="css/ins.css" type="text/css" rel="stylesheet">
		<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
		<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js"></script>
		
    
	</head>
	<body class="all" >
		<div class="container-fluid ">
			<div class="row">
				<div class="col-lg-3"></div>
				<div class="col-lg-6">
						<form class="form-group ui text-center" action="process.php" method="POST" id="reg">
							<h1 class=" text-center"><b><i>INSCRIPTION</i></b></h1>
							<div class="row">
								<div class="col-lg-6">
									<label><b>Prénom :</b></label>
									<input type="text" name="fname" id="fname" class="form-control" placeholder="Entrez votre prénom .." required/>
									<span class="error_form" id="fname_error_message"></span>
								</div>
								<div class="col-lg-6">
									<label><b>Nom :</b></label>
									<input type="text" name="lname" id="lname" class="form-control" placeholder="Entrez votre nom .." required=""/>
									<span class="error_form" id="lname_error_message"></span>
								</div>
							</div>
							<br/>
							<div>
									<label><b>E-mail :</b></label>
									<input type="email" name="email" id="email" class="form-control" placeholder="Entrez votre E-mail .." required/>
									<span class="error_form" id="email_error_message"></span>
							</div>
							<br/>
							<div class="row">
								<div class="col-lg-6">
									<label><b>Mot De Passe :</b></label>
									<input type="password" name="pwd" id="pwd" class="form-control" placeholder="Entrez le mot de passe .. " required/>
									<span class="error_form" id="password_error_message"></span>
								</div>
								<div class="col-lg-6">
									<label><b>Retaper Le Mot De Passe :</b></label>
									<input type="password" name="pwdr" id="pwdr" class="form-control" placeholder="Confirmez votre mot de passe .." required/>
									<span class="error_form" id="retype_password_error_message"></span>
								</div>
							</div>
							<br/>
							<div class="row">
								<div class="col-lg-6">
									<label><b>CNI :</b></label>
									<input id="cni" type="text" name="cni" class="form-control" placeholder="Entrez votre CNI .."required/>
									<span class="error_form" id="cni_error_message"></span>
								</div>
								<div class="col-lg-6">
									<label><b>Grade :</b></label>
									<input id="grade" type="text" name="grade" class="form-control" placeholder="Entrez votre Grade .."required/>
									<span class="error_form" id="grade_error_message"></span>
								</div>
							</div>
							<br/>
							<button type="submit" id="save" name="save" class="btn btn-block btn-success" >S'INSCRIRE</button>
							
						</form>
<script src="https://cdn.jsdelivr.net/npm/sweetalert2@9"></script>
<script type="text/javascript">
       $(function() {

         $("#fname_error_message").hide();
         $("#sname_error_message").hide();
         $("#email_error_message").hide();
         $("#password_error_message").hide();
         $("#retype_password_error_message").hide();
         $("#cni_error_message").hide();
         $("#grade_error_message").hide();

         var error_fname = false;
         var error_lname = false;
         var error_email = false;
         var error_password = false;
         var error_retype_password = false;
         var error_cni = false;
         var error_grade = false;

         $("#fname").focusout(function(){
            check_fname();
         });
         $("#lname").focusout(function() {
            check_lname();
         });
         $("#email").focusout(function() {
            check_email();
         });
         $("#pwd").focusout(function() {
            check_password();
         });
         $("#pwdr").focusout(function() {
            check_retype_password();
         });
         $("#cni").focusout(function(){
            check_cni();
         });
         $("#grade").focusout(function() {
            check_grade();
         });





         function check_fname() {
            var pattern = /^[a-zA-Z]*$/;
            var fname = $("#fname").val();
            if (pattern.test(fname) && fname !== '') {
               $("#fname_error_message").hide();
               $("#fname").css("border-bottom","2px solid #34F458");
            } else {
               $("#fname_error_message").html("Ne doit contenir que des caractères");
               $("#fname_error_message").show();
               $("#fname").css("border-bottom","2px solid #F90A0A");
               error_fname = true;
            }
         }

         function check_lname() {
            var pattern = /^[a-zA-Z]*$/;
            var lname = $("#lname").val();
            if (pattern.test(lname) && lname !== '') {
               $("#lname_error_message").hide();
               $("#lname").css("border-bottom","2px solid #34F458");
            } else {
               $("#lname_error_message").html("Ne doit contenir que des caractères");
               $("#lname_error_message").show();
               $("#lname").css("border-bottom","2px solid #F90A0A");
               error_lname = true;
            }
         }

         function check_password() {
            var password_length = $("#pwd").val().length;
            if (password_length < 8) {
               $("#password_error_message").html("Au moins 8 caractères");
               $("#password_error_message").show();
               $("#pwd").css("border-bottom","2px solid #F90A0A");
               error_password = true;
            } else {
               $("#password_error_message").hide();
               $("#pwd").css("border-bottom","2px solid #34F458");
            }
         }

         function check_retype_password() {
            var password = $("#pwd").val();
            var retype_password = $("#pwdr").val();
            if (password !== retype_password) {
               $("#retype_password_error_message").html("Les mots de passe ne correspondent pas");
               $("#retype_password_error_message").show();
               $("#pwdr").css("border-bottom","2px solid #F90A0A");
               error_retype_password = true;
            } else {
               $("#retype_password_error_message").hide();
               $("#pwdr").css("border-bottom","2px solid #34F458");
            }
         }

         function check_email() {
            var pattern = /^([\w-\.]+@([\w-]+\.)+[\w-]{2,4})?$/;
            var email = $("#email").val();
            if (pattern.test(email) && email !== '') {
               $("#email_error_message").hide();
               $("#email").css("border-bottom","2px solid #34F458");
            } else {
               $("#email_error_message").html("E-mail invalide");
               $("#email_error_message").show();
               $("#email").css("border-bottom","2px solid #F90A0A");
               error_email = true;
            }
         }
         function check_cni() {
            var pattern = /^[a-zA-Z0-9]*$/;
            var cni = $("#cne").val();
            var cni_length = $("#cni").val().length;
            if (pattern.test(cni) && cni !== '' && cni_length >5) {
               $("#cni_error_message").hide();
               $("#cni").css("border-bottom","2px solid #34F458");
            } else {
               $("#cni_error_message").html("Au moins 6 caractères");
               $("#cni_error_message").show();
               $("#cni").css("border-bottom","2px solid #F90A0A");
               error_cni = true;
            }
         }

		function check_grade() {
            var pattern = /^[a-zA-Z]*$/;
            var grade = $("#grade").val();
            if (pattern.test(grade) && grade !== '') {
               $("#grade_error_message").hide();
               $("#grade").css("border-bottom","2px solid #34F458");
            } else {
               $("#grade_error_message").html("Ne doit contenir que des caractères");
               $("#grade_error_message").show();
               $("#grade").css("border-bottom","2px solid #F90A0A");
               error_grade = true;
            }
         }

         $("#reg").submit(function() {
	        error_fname = false;
	        error_lname = false;
	        error_email = false;
	        error_password = false;
	        error_retype_password = false;
	        error_cni = false;
	        error_grade = false;

            check_fname();
            check_lname();
            check_email();
            check_password();
            check_retype_password();
            check_cni();
            check_grade();

            if (error_fname === false && error_lname === false && error_email === false && error_password === false && error_retype_password === false && error_cni === false && error_grade === false ) {
                           Swal.fire(
              'Good job!',
              'You clicked the button!',
              'success'
            );
               return true;
            } else {
                          Swal.fire(
              'Good job!',
              'You clicked the button!',
              'wrong'
            );
               return false;
            }


         });
      });


</script>
				</div>
				<div class="col-lg-3"></div>
			</div>
		
		</div>
	</body>
	</html>