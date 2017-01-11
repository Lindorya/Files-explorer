
<!DOCTYPE html>


	<html>

			
			<head>

				<title>Explorateur de fichiers</title>
				<meta charset="utf-8" />
				<meta name="description" content="Bootstrap" />
				<meta name="viewport" content="width=device-width, initial-scale=1" />
				<link rel="stylesheet" type="text/css" href="bootstrap.css" />
				<link rel="stylesheet" type="text/css" href="style.css" />
				<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
				<script src="bootstrap.min.js"></script>	

			
			<!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
			<!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
			<!--[if lt IE 9]>
	 		<script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
	  		<script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
			<![endif]-->


		</head>


			<body>

				<div class="container">

				    <?php

						      $adresse = "/home/romaneh/";


						          if (isset($_GET['dossier'])) {

						            $adresse = $adresse.$_GET['dossier'];
						           }

						           $dirs = scandir($adresse);
						           foreach ($dirs as $folder) {

						            if (!is_dir($adresse.$folder)) {

						              if (isset($_GET['dossier'])) {

						               echo "<a href='index.php?dossier='".$_GET['dossier']."$folder/><img id='fich' src='images/fichier.png'>$folder</a><br>";

						              }

						              else {
						                if (isset($_GET['dossier'])) {


						               echo "<a href='index.php?dossier='".$_GET['dossier']."'$folder/><img id='fich' src='images/fichier.png'>$folder</a><br>";

						              }
						            }
						            }

							            else {

							              if ($folder == ".."){


							                  if (isset($_GET['dossier'])){
							                      echo "<a href='index.php?dossier=".$_GET['dossier'].$folder."/'><img src='images/prev.png'>$folder</a><br>";
							                      }

							                  else{
							                      echo "<a href='index.php'>$folder</a><br><img src='images/prev.png'>";
							                  }
							                }

							                else {

							                  if (isset($_GET['dossier'])){
							                      echo "<a href='index.php?dossier=".$_GET['dossier'].$folder."/'><img id='doss' src='images/dossier.png'>$folder</a><br>";
							                      }
							                  else {

							                  echo "<a href='index.php?dossier=$folder/'><img id='doss' src='images/dossier.png'>$folder</a><br>";
							                  }
							                }

							                }
							                }


				    ?>
				    </div>

			
			<script src ="fichier.js" type="text/javascript"></script>
			</body>





	</html>




