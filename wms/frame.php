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
				echo '
<div style="width: 650px; max-height: 100%;" id="limit"><div><span>系统设置</span></div> &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<input type="checkbox" value="3" name="name" onclick="chek(this)">角色添加 
<input type="checkbox" value="2" name="name" onclick="chek(this)">子菜单添加 
<input type="checkbox" value="1" name="name" onclick="chek(this)">菜单添加 
<div><span>仓库管理</span></div> &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<input type="checkbox" value="31" name="name" onclick="chek(this)">盘点 
<input type="checkbox" value="30" name="name" onclick="chek(this)">出仓申请 
<input type="checkbox" value="29" name="name" onclick="chek(this)">移仓申请 
<input type="checkbox" value="28" name="name" onclick="chek(this)">入仓申请 
<div><span>消息管理</span></div> &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<input type="checkbox" value="37" name="name" onclick="chek(this)">发件箱 
<input type="checkbox" value="36" name="name" onclick="chek(this)">收件箱 
<input type="checkbox" value="33" name="name" onclick="chek(this)">发送消息 
<input type="checkbox" value="32" name="name" onclick="chek(this)">公告箱 
<div><span>产品管理</span></div> &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<input type="checkbox" value="34" name="name" onclick="chek(this)">创建产品 
<div><span>地址本</span></div> &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<input type="checkbox" value="35" name="name" onclick="chek(this)">组管理 

</div>
					
					';
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
					//切换全选
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
