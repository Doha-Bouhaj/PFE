<?php
	require_once('config.php');
?>
<?php
if(isset($_POST)){
				$firstname=$_POST['fname'];
				$lastname=$_POST['lname'];
				$email=$_POST['email'];
				$pwd=$_POST['pwd'];
				$cni=$_POST['cni'];
				$grade=$_POST['grade'];
				$sql = "SELECT cni FROM policier WHERE cni= '".$cni."' ";
				$stmtinsert=$db->prepare($sql);
				$resultat= $stmtinsert->execute();
				if($resultat){
				$sql="UPDATE policier SET firstname='".$firstname."',lastname='".$lastname."',email='".$email."',pwd='".$pwd."',grade='".$grade."' WHERE cni= '".$cni."'";
				$stmtinsert=$db->prepare($sql);
				$result=$stmtinsert->execute();
			
				if($result){
					require_once('verification.php');
				}
				else{
					echo'there were error while savig the data<br/>';
				}
				
			}
			
				}else{
					echo "No data";
				}


?>

	

