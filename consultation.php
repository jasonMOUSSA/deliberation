  <!DOCTYPE html>
<html lang="en">

    <head>

        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>Université Liberté</title>

        <!-- CSS -->
        <link rel="stylesheet" href="http://fonts.googleapis.com/css?family=Roboto:400,100,300,500">
        <link rel="stylesheet" href="assets/bootstrap/css/bootstrap.min.css">
        <link rel="stylesheet" href="assets/font-awesome/css/font-awesome.min.css">
		<link rel="stylesheet" href="assets/css/form-elements.css">
        <link rel="stylesheet" href="assets/css/style.css">

        <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
        <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
        <!--[if lt IE 9]>
            <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
            <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
        <![endif]-->

        <!-- Favicon and touch icons -->
        <link rel="shortcut icon" href="assets/ico/favicon.png">
        <link rel="apple-touch-icon-precomposed" sizes="144x144" href="assets/ico/apple-touch-icon-144-precomposed.png">
        <link rel="apple-touch-icon-precomposed" sizes="114x114" href="assets/ico/apple-touch-icon-114-precomposed.png">
        <link rel="apple-touch-icon-precomposed" sizes="72x72" href="assets/ico/apple-touch-icon-72-precomposed.png">
        <link rel="apple-touch-icon-precomposed" href="assets/ico/apple-touch-icon-57-precomposed.png">

    </head>

    <body>
    <?php
                error_reporting( ~E_NOTICE ); // avoid notice
                require_once 'dbconfig.php';
                //on demarre la session
                session_start();
                $stmt = $DB_con->prepare("SELECT * FROM etudiant WHERE matricule = '".$_SESSION['login']."' AND password = '".$_SESSION['password']."'");
                $stmt->execute();
                if($stmt->rowCount() > 0)
                {
                while($row=$stmt->fetch(PDO::FETCH_ASSOC))
                {
                extract($row);
                ?>
                <!-- Top content -->
                <div class="top-content">

                    <div class="inner-bg">
                        <div class="container">
                            <div class="row">
                                <div class="col-sm-8 col-sm-offset-2 text">
                                    <h1><strong>Universite Liberté</strong> Consultation</h1>
                                    <img src="user_images/<?php echo $row["photos"];?>" class="img-circle" width="200px" height="200px"  />
                                 
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-sm-6 col-sm-offset-3 form-box">
                                    <div class="form-top">
                                        <div class="form-top-left">
                                            <h3> Bienvenue</h3>
                                            <h3><span class="h4">Bonjour </span><?php echo $row["nom"];?> <?php echo $row["postnom"];?> <?php echo $row["prenom"];?> </h3>
                                            <h4>Pourcentage : <?php echo $row["resultat"];?> </h4>
                                        </div>
                                        <div class="form-top-right">
                                            <i class="fa fa-user"></i>
                                        </div>
                                    </div>
                                    <div class="form-bottom">
                                        <form role="form" action="" method="post" class="login-form">
                                            <div class="form-group">

                                            <div class="form-group">
                                                <label class="sr-only" for="form-rechercher">Rechercher</label>
                                                <input type="search" name="form-rechercher" placeholder="Rechercher..." class="form-rechercher form-control" id="form-Rechercher">
                                            </div>
                                            <button type="submit" class="btn">OK</button>
                                        </form>
													<div class="description">
														<center><a href="deconnexion.php" class="btn btn-info btn-lg"><span class="glyphicon glyphicon-log-out"></span>Deconnexion</center></a>
                                    </div>
													</div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-sm-6 col-sm-offset-3 social-login">
                                <div class="row">

                                           <?php
                                          }
                                         }
                                         else
                                         {}
                                          ?>


                                </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
        <!-- Javascript -->
        <script src="assets/js/jquery-1.11.1.min.js"></script>
        <script src="assets/bootstrap/js/bootstrap.min.js"></script>
        <script src="assets/js/jquery.backstretch.min.js"></script>
        <script src="assets/js/scripts.js"></script>
        
        <!--[if lt IE 10]>
            <script src="assets/js/placeholder.js"></script>
        <![endif]-->

    </body>

</html>