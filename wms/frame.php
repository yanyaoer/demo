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
	<body class="frame page-<?php util::getPageName() ?>">
		<div id="main">
			<?php 
			if($_GET && $_GET['p']=='form') {
				TPL::pageForm();
			}else {
				$_GET['p'] = 'list';
				TPL::pageList();
			}
			?>
		</div>
		<script>
			window.onload = function(){
				util.frameResize();
			}
		</script>
	</body>
</html>
