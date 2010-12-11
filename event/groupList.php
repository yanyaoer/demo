<?php 
header("Content-type: text/html; charset=utf-8");

$groupList = array(
				   array('title'=>'江苏互联网俱乐部', 'link'=>''),
				   array('title'=>'南京邮电大学', 'link'=>''),
				   array('title'=>'dev', 'link'=>'')
				 );

$eventList = array(
				   array('title'=>'2010江苏互联网大会', 'link'=>''),
				   array('title'=>'2010年全国泛在网与物联网技术标准研讨会', 'link'=>''),
				   array('title'=>'2010 MIT', 'link'=>'')
				 );


$linkList = array(
				   array('title'=>'关于我们', 'link'=>'http://hyzing.com/about-us/'),
				   array('title'=>'加入我们', 'link'=>'http://hyzing.com/about-us/#join'),
				   array('title'=>'定投广告', 'link'=>'mailto:info@hyzing.com'),
				   array('title'=>'隐私声明', 'link'=>'#'),
				   array('title'=>'苏ICP证10211262号', 'link'=>'#')
				  )

?>
<!DOCTYPE html>
<html>
<head>
<meta charset="utf8" />
<title>海震智能会务</title>
<link rel="stylesheet" href="assets/style.css" />
<!--
<script src="FIXME"></script>
-->
</head>
<body>
<div id="wrapper">
	<div id="header">
		<h1><a href="/"><img src="http://res.hyzing.com/res/img/intro/logo.png" /></a></h1>
		<div class="user-setting">
			<a href="#profile">阿熊</a>(系统管理员)
			<span class="pipe">|</span>
			<a href="#profile">个人设置</a>
			<span class="pipe">|</span>
			<a href="#logout">退出</a>
		</div>
		<div class="global-nav">
			<a href="eventList.php">系统</a>
			<span class="pipe">|</span>
			<a href="report.php">查看报告</a>
			<?php // 这里后台不方便记的话,选中会议之后写入cookie, 关闭浏览器后清空 ?>
			<select class="global-event" name="eventList">
				<option value="">选择会议</option>
			</select>

			<span class="global-group">群组:
				<select id="global-event" name="eventList">
					<option value="">江苏互联网</option>
				</select>
			</span>
		</div>
	</div>

	<div id="content">
		<div class="crumb">
			<a href="groupList.php">群组</a>
			<span>&gt;</span>
			选择群组
		</div>

		<div class="box special">
			<div class="hd">
				<a class="add"> + 添加新群组</a>
				<div class="filter">
					<form action="" method="post">
					显示 <select name="show">
						<option value="5">5</option>
						<option value="10" selected>10</option>
						<option value="20">20</option>
					</select>
					搜索 <input type="text" name="" />
					<button>提交</button>
				</div>
			</div>
			<div class="bd">
				<table class="group-list">
					<tr>
						<th class="name">群组名</th>
						<th class="opt">操作</th>
					</tr>
					<?php foreach($groupList as $key=>$val) {
						echo '<tr', ($key%2 == 0) ? ' class="color"':'','><td><a href="eventList.php?id=',$key,'">',$val['title'],'</a></td><td><a href="">修改</a><span class="pipe">|</span><a href="">关闭</a></td></tr>';
					}?>
				</table>
				<div class="pagination">
					1 2 3 4 5
				</div>
			</div>
		</div>
	</div>

	<div id="footer">
		<ul>
			<?php foreach($linkList as $val) { ?>
			<li><a href="<?php echo $val['link'] ?>"><?php echo $val['title'] ?></a></li>
			<?php } ?>
		</ul>
		<p class="powerby"><a href="http://hyzing.com" target="_blank">海震智能</a> &copy; 2010</p>
	</div>
</div>
</body>
</html>
