
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





		<?php

		    $scan = scandir('/home/romaneh/');
		  		foreach($scan as $file)
		  			{
		      			if (!is_dir("/home/romaneh/$file"))
		      		{
		          		echo $file.'<br>';
		      		}
		      	else
		      		{
		        		echo $file.'<br>';
		      		}
		  			}
		  ?>


			<script src ="fichier.js" type="text/javascript"></script>

		</body>





	</html>