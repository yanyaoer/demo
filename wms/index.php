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
	<body class="framework">
		<div id="wrapper">
			<?php
		   		TPL::header();
				TPL::sidebar();
		   	?>
			<iframe id="J_frame" src="frame.php?p=<?php echo ($_GET && $_GET['p'])?$_GET['p']:'list';?>" frameborder="0" scrolling="no" />
		</div>
	</body>
</html>
