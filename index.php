<?php include("page.php");?>
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
				<h1>Files Explorer</h1>

				<?php foreach($dirs as $dir):?>
					<?php if (is_dir($base_url.$dir)){?>
						<?php if ($dir == "..") {?>
							<div>
								<a href="index.php"><?=$dir?></a><br>
							</div>
						<?php } else {?>
							<div>
								<?php if (isset($_GET['dossier'])) {?>
									<a href="index.php?dossier=<?=$_GET['dossier']?><?=$dir?>/"><?=$dir?></a><br>
								<?php } else {?>
									<a href="index.php?dossier=<?=$dir?>/"><?=$dir?></a><br>
								<?php }?>
							</div>
						<?php }?>
					<?php } else {?>
						<div>
							<p><?=$dir;?></p>
						</div>
					<?php }?>
				<?php endforeach;?>
			</body>





	</html>