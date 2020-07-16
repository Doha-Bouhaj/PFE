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
				$sql="INSERT INTO policier (firstname,lastname,email,pwd,cni,grade) VALUES(?,?,?,?,?,?)";
				$stmtinsert=$db->prepare($sql);
				$result=$stmtinsert->execute([$firstname,$lastname,$email,$pwd,$cni,$grade]);
				if($result){
					require_once('verification.php');
				}
				else{
					echo'there were error while savig the data<br/>';
				}
			
				}else{
					echo "No data";
				}


?>

	

