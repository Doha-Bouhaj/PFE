<?php
session_start();
if(isset($_POST['email']) && isset($_POST['pwd']))
{
    // connexion à la base de données
    $db_username = 'root';
    $db_password = '';
    $db_name     = 'projet';
    $db_host     = 'localhost:3308';
    $db = mysqli_connect($db_host, $db_username, $db_password,$db_name)
           or die('could not connect to database');
    
    $email = mysqli_real_escape_string($db,htmlspecialchars($_POST['email'])); 
    $password = mysqli_real_escape_string($db,htmlspecialchars($_POST['pwd']));
    
    if($email !== "" && $password !== "")
    {
        $requete = "SELECT count(*) FROM policier where 
              email= '".$email."' and pwd= '".$password."' ";
        $exec_requete = mysqli_query($db,$requete);
        $reponse      = mysqli_fetch_array($exec_requete);
        $count = $reponse['count(*)'];
        if($count!=0)
        {   
            $sql = "SELECT firstname FROM policier where 
              email= '".$email."' and pwd= '".$password."' ";
            $result= mysqli_query($db,$sql);
            $value=mysqli_fetch_array($result);

            $prenom=$value[0];
            $_SESSION['fname'] = $prenom;

           header('Location: menu.php');

           
        }
        else
        {
           header('Location: index.php?erreur=1');
        }
    }
    else
    {
       header('Location: index.php?erreur=2');
    }
}
else
{
   header('Location: index.php');
}
mysqli_close($db);
?>