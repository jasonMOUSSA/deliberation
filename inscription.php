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

        <!-- Top content -->
        <div class="top-content">
        	
            <div class="inner-bg">
                <div class="container">
                    <div class="row">
                        <div class="col-sm-8 col-sm-offset-2 text">
                            <h1><strong>Universite Liberté</strong> Consultation</h1>
                            <div class="description">
                            	<p>
	                            	FORMULAIRE D'INSCRIPTION
                            	</p>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-sm-6 col-sm-offset-3 form-box">
                        	<div class="form-top">
                        		<div class="form-top-left">
                        			<h3>Inscription</h3>
                            		<p>Veuillez completer tout les champs :</p>
                        		</div>
                        		<div class="form-top-right">
                        			<i class="fa fa-user"></i>
                        		</div>
                            </div>
                            <div class="form-bottom">
			                    <form role="form" action="saveEtudiant.php" method="post" enctype="multipart/form-data" class="login-form">
			                    	<div class="form-group">
			                    		<label class="sr-only" for="form-matricule">votre Matricule</label>
			                        	<input type="text" name="form-matricule" placeholder="Matricule" class="form-control form-control" id="form-matricule">
			                        </div>
									<div class="form-group">
			                    		<label class="sr-only" for="form-nom">votre Nom</label>
			                        	<input type="text" name="form-nom" placeholder="Nom" class="form-control form-control" id="form-nom">
			                        </div>
									<div class="form-group">
			                    		<label class="sr-only" for="form-postnom">votre Postnom</label>
			                        	<input type="text" name="form-postnom" placeholder="Postnom" class="form-control form-control" id="form-postnom">
			                        </div>
									<div class="form-group">
			                    		<label class="sr-only" for="form-prenom">votre Prenom</label>
			                        	<input type="text" name="form-prenom" placeholder="prenom" class="form-control form-control" id="form-prenom">
			                        </div>
									<div class="form-group">
			                    		<label class="sr-only" for="form-genre">genre</label>
										<select class="form-control" name="form-genre" >
											<option> Masculin</option>
											<option> Feminin</option>
										</select>
			                        </div>
									<div class="form-group">
			                    		<label class="sr-only" for="form-adresse">votre Adresse</label>
			                        	<input type="text" name="form-adresse" placeholder="Adresse" class="form-control form-control" id="form-adresse">
			                        </div>
									<div class="form-group">
			                    		<label class="sr-only" for="form-promotion">Promotion</label>
										<select class="form-control" name="form-promotion" >
											<option>G1 IG</option>
											<option>G1 RT ISI</option>
											<option>G2 RT </option>
											<option>G2 ISI</option>
											<option>G3 RT </option>
											<option>G3 ISI</option>
											<option>G3 IG</option>
											<option>Grade1 ISI </option>
											<option>Grade1 RT</option>
											<option>Grade2 ISI</option>
											<option>Grade2 RT </option>
											
										</select>
			                        </div>
									<div class="form-group">
			                    		<label class="sr-only" for="form-phone">Num Téléphone</label>
			                        	<input type="text" name="form-phone" placeholder="Num Téléphone" class="form-control form-control" id="form-phone">
			                        </div>
									<div class="form-group">
			                    		<label class="sr-only" for="form-naissance">Date de Naissance</label>
			                        	<input type="date" name="form-naissance" placeholder="Date de Naissance" class="form-control form-control" id="form-naissance">
			                        </div>
									<div class="form-group">
			                    		<label class="sr-only" for="form-photos">Photos</label>
			                        	<input type="file"  name="form-photos" placeholder="Photos" class="form-control form-control" id="form-photos">
			                        </div>
									<div class="form-group">
			                    		<label class="sr-only" for="form-mail">votre Adresse Mail</label>
			                        	<input type="email" name="form-mail" placeholder="Mail" class="form-control form-control" id="form-mail">
			                        </div>
			                        <div class="form-group">
			                        	<label class="sr-only" for="form-password">Password</label>
			                        	<input type="password" name="form-password" placeholder="Mot de passe" class="form-control form-control" id="form-password">
			                        </div>
									<div class="form-group">
			                        	<label class="sr-only" for="form-password1">Password</label>
			                        	<input type="password" name="form-password1" placeholder="Confirmation Mot de passe" class="form-control form-control" id="form-password1">
			                        </div>
			                        <button type="submit" class="btn">Valider</button>
			                    </form>
		                    </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-sm-6 col-sm-offset-3 social-login">
                        	
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
        <![endif]-->
            <script src="assets/js/placeholder.js"></script>

    </body>

</html>