<?php include('./function.php');?>
<!DOCTYPE HTML>
<html>
	<head>
		<meta charset="utf-8" />
		<title>dota upload</title>
		<link rel="stylesheet" href="css/style.css" />
		<script src="js/jquery.js"></script>
		<script src="js/util.js"></script>
	</head>
	<body>
		<div id="wrapper">
			<?php
		   		TPL::header();
				TPL::sidebar();
		   	?>
			<div id="main" class="page-<?php util::getPageName() ?>">
				<?php 
				if($_GET && $_GET['p']=='form') {
					TPL::pageForm();
				}else {
					TPL::pageList();
				}
				?>
			</div>

		</div>
	</body>
</html>
