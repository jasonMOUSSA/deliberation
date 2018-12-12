<?php
    error_reporting( ~E_NOTICE ); // avoid notice
    require_once 'dbconfig.php';

    if(isset($_POST['form-matricule']))
    {
        $matricule = $_POST['form-matricule'];
        $nom = $_POST['form-nom'];
        $postnom = $_POST['form-postnom'];
        $prenom = $_POST['form-prenom'];
        $genre = $_POST['form-genre'];
        $promotion = $_POST['form-promotion'];
        $date_naissance = $_POST['form-naissance'];
        $email = $_POST['form-mail'];
        $adresse = $_POST['form-adresse'];
        $numTel = $_POST['form-phone'];
        $password = $_POST['form-password'];
        $password1 = $_POST['form-password1'];

        $imgFile = $_FILES['form-photos']['name'];
        $tmp_dir = $_FILES['form-photos']['tmp_name'];
        $imgSize = $_FILES['form-photos']['size'];


        if(empty($matricule)){
            $errMSG = "Veuillez entrer le matricule.";
            header('Location:afficheErreur.php?erreur='.$errMSG);
        }else if(empty($nom)){
            $errMSG = "Veuillez entrer le nom";
            header('Location:afficheErreur.php?erreur='.$errMSG);
        }else if(empty($postnom)){
            $errMSG = "Veuillez entrer le postnom";
            header('Location:afficheErreur.php?erreur='.$errMSG);
        }else if(empty($prenom)){
            $errMSG = "Veuillez entrer le prenom";
            header('Location:afficheErreur.php?erreur='.$errMSG);
        }else if(empty($email)){
            $errMSG = "Veuillez entrer le email";
            header('Location:afficheErreur.php?erreur='.$errMSG);
        }else if(empty($adresse)){
            $errMSG = "Veuillez entrer l adresse";
            header('Location:afficheErreur.php?erreur='.$errMSG);
        }else if(empty($adresse)){
            $errMSG = "Veuillez entrer l adresse";
            header('Location:afficheErreur.php?erreur='.$errMSG);
        }else if(empty($numTel)){
            $errMSG = "Veuillez entrer le numéro de telephone";
            header('Location:afficheErreur.php?erreur='.$errMSG);
        }else if(empty($password)){
            $errMSG = "Veuillez entrer votre mot de passe";
            header('Location:afficheErreur.php?erreur='.$errMSG);
        }else if(empty($password1)){
            $errMSG = "Veuillez entrer votre confirmation de mot de passe";
            header('Location:afficheErreur.php?erreur='.$errMSG);
        }else if(!($password1==$password)){
            $errMSG = "Veuillez reprendre le deux mot de passe";
            header('Location:afficheErreur.php?erreur='.$errMSG);
        }
        else if(empty($imgFile)){
            $errMSG = "Veuillez selectionner une image";
            header('Location:afficheErreur.php?erreur='.$errMSG);
        }
        else
        {
            $upload_dir = './user_images/'; // repertoire ou sera enregistrer les photos

            $imgExt = strtolower(pathinfo($imgFile,PATHINFO_EXTENSION)); // renvois l'extention de l'image

            // validations des  extensions des images
            $valid_extensions = array('jpeg', 'jpg', 'png', 'gif'); // valid extensions

            // renome l'image
            $userpic = rand(1000,1000000).".".$imgExt;


            if(in_array($imgExt, $valid_extensions)){
                // verification de la taille de l'image  '5MB'
                if($imgSize < 5000000)    {
                    move_uploaded_file($tmp_dir,$upload_dir.$userpic);
                }
                else{
                    $errMSG = "Desole votre image est trop lourde.";
                    header('Location:afficheErreur.php?erreur='.$errMSG);
                }
            }
            else{
                $errMSG = " Desole veuillez selectionner le format d'image suivant JPG, JPEG,DZ PNG & GIF ";
                header('Location:afficheErreur.php?erreur='.$errMSG);
            }
        }
        // if no error occured, continue ....
        if(!isset($errMSG))
        {
            $stmt = $DB_con->prepare('INSERT INTO etudiant (matricule,nom,postnom,prenom,date_naissance,genre,mail,promotion,adresse,numTel,password,photos) VALUES(:matricule, :nom, :postnom,:prenom,:date_naissance,:genre,:mail,:promotion,:adresse,:numTel,:password,:photos)');
            $stmt->bindParam(':matricule',$matricule);
            $stmt->bindParam(':nom',$nom);
            $stmt->bindParam(':postnom',$postnom);
            $stmt->bindParam(':prenom',$prenom);
            $stmt->bindParam(':date_naissance',$date_naissance);
            $stmt->bindParam(':genre',$genre);
            $stmt->bindParam(':mail',$email);
            $stmt->bindParam(':promotion',$promotion);
            $stmt->bindParam(':adresse',$adresse);
            $stmt->bindParam(':numTel',$numTel);
            $stmt->bindParam(':password',$password);
            $stmt->bindParam(':photos',$userpic);
            if($stmt->execute())
            {
                $successMSG = "Enregistrement Effectué avec succes ...";
                //on demarre la session
                session_start();
                //variable des sessions
                $_SESSION['login']=$matricule;
                $_SESSION['password']=$password;
                header('Location:consultation.php'); // redirects image view page after 5 seconds.
            }
            else
            {
                $errMSG = "Erreur d'Enregistrement";
                header('Location:afficheErreur.php?erreur='.$errMSG);
            }
        }
    }
?>
