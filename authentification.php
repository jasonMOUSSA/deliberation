<?php
error_reporting( ~E_NOTICE ); // avoid notice
require_once 'dbconfig.php';
if(isset($_POST['form-username']))
{
    $matricule = $_POST['form-username'];
    $password = $_POST['form-password'];

    if(empty($matricule)){
        $errMSG = "Veuillez entrer votre adresse mail";
        header('Location:afficheErreur.php?erreur='.$errMSG);
    }else if(empty($password)){
        $errMSG = "veuillez votre mot de passe";
        header('Location:afficheErreur.php?erreur='.$errMSG);
    }
    else
    {
        //on demarre la session
        session_start();
        $stmt = $DB_con->prepare("SELECT * FROM etudiant WHERE  matricule= '".$matricule."' AND password = '".$password."'");
        $stmt->execute();
        if($stmt->rowCount() > 0) {
            while($row=$stmt->fetch(PDO::FETCH_ASSOC)) {
                extract($row);
                session_start();
                //variable des sessions
                $_SESSION['login'] = $row["matricule"];
                $_SESSION['password'] = $row["password"];
                header('Location:consultation.php');
            }
        }else{
            $errMSG = "Veuillez virifier votre matricule et votre mot de passe";
            header('Location:afficheErreur.php?erreur='.$errMSG);
        }
    }

}else{
    $errMSG = "Veuillez completer correctement les champs";
    header('Location:afficheErreur.php?erreur='.$errMSG);
}
?>
