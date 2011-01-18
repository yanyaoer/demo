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
	<body class="page-<?php util::getPageName() ?>">
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
				<?php if(!$_GET || $_GET['p']=='list' ) { ?>
					util.batch($('.J_batch'), $('.sel input[type=checkbox]'), function(){
						$('.J_batch').each(function(idx, el){
							$(el).text() == '全选,' ? $(el).text('取消选中,') : $(el).text('全选,');
						});	   
					});
				<?php } ?>
			}
		</script>
	</body>
</html>
