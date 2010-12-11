<?php 
header("Content-type: text/html; charset=utf-8");
$commentList = array(
					 array('img'=>'http://res.hyzing.com/res/img/intro/avatar.png', 'name'=>'张登银 主任', 'company'=>'南邮物联网科技园管理办', 'date'=>'2010-12-02', 'comment'=>'海震公司的RFID智能会议管理系统，在“2010年全国泛在网与物联网技术标准研讨会暨首届物联网应用标准金陵论坛（JFIOT’2010）” 上应用效果良好，得到与会领导和专家的一致好评。'),
					 array('img'=>'http://res.hyzing.com/res/img/intro/avatar.png', 'name'=>'张登银 主任', 'company'=>'南邮物联网科技园管理办', 'date'=>'2010-12-02', 'comment'=>'海震公司的RFID智能会议管理系统，在“2010年全国泛在网与物联网技术标准研讨会暨首届物联网应用标准金陵论坛（JFIOT’2010）” 上应用效果良好，得到与会领导和专家的一致好评。'),
					 array('img'=>'http://res.hyzing.com/res/img/intro/avatar.png', 'name'=>'张登银 主任', 'company'=>'南邮物联网科技园管理办', 'date'=>'2010-12-02', 'comment'=>'海震公司的RFID智能会议管理系统，在“2010年全国泛在网与物联网技术标准研讨会暨首届物联网应用标准金陵论坛（JFIOT’2010）” 上应用效果良好，得到与会领导和专家的一致好评。')
					);

$eventMeta = array(
				   array('title'=>'会议前:', 'desc'=>array( '网上注册', '自定义网站服务', '经济有效的找寻目标参与者' )),
				   array(
						 'title'=>'会议中:',
						 'desc'=>array(
									   '自动签到',
									   '现场实时控制管理',
									   '射频迎宾服务',
									   '提供就餐管理服务',
									   '参会者自动鉴定和认证',
									   '实时查询和打印签到报表',
									   '统计最受关注的议题, 最受欢迎的活动...',
									   '准确了解参会者入场信息',
									   '量化活动统计数据: 出席率, 区域活动密度...'
									  )
					),

				   array('title'=>'会议后:', 'desc'=>array( '会议分析报告', '缩短了会后资料汇总时间', '今后会议的有效指导'))
				  );

$eventList = array(
				   array('title'=>'2010江苏互联网大会', 'link'=>''),
				   array('title'=>'2010年全国泛在网与物联网技术标准研讨会', 'link'=>''),
				   array('title'=>'2010 MIT', 'link'=>'')
				 );

$partnerList = array(
				   array('desc'=>'南京邮电大学', 'link'=>'http://www.njupt.edu.cn/', 'img'=>'http://res.hyzing.com/res/img/intro/partner/njupt.png'),
				   array('desc'=>'江苏互联网大会', 'link'=>'http://www.jsweb.org/', 'img'=>'http://res.hyzing.com/res/img/intro/partner/jsweb.png')
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
<!--
<link rel="stylesheet" href="FIXME" />
<script src="FIXME"></script>
-->
<style>
/* css reset {{{ */

body, h1, h2, h3, h4, h5, h6, hr, p, blockquote, dl, dt, dd, ul, ol, li, pre, form, fieldset, legend, button, input, textarea, th, td { margin: 0; padding: 0; } body, button, input, select, textarea { font: 12px/1.5 tahoma, arial, Helvetica, "微软雅黑", "Hiragino Sans GB", \5b8b\4f53, sans-serif; } h1, h2, h3, h4, h5, h6 { font-size: 100%; } address, cite, dfn, em, var { font-style: normal; } code, kbd, pre, samp { font-family: monaco, 'courier new', 'bitstream vera sans mono', courier, monospace; } small { font-size: 12px; } ul, ol { list-style: none; } a { text-decoration: none; } a:hover { text-decoration: underline; } fieldset, img { border: 0; } img { vertical-align: middle; } button, input, select, textarea { font-size: 100%; } table { border-collapse: collapse; border-spacing: 0; }

/* }}} css reset */
body {background:#fff; color:#666;}
#wrapper {background:#f1f1f1 url(http://res.hyzing.com/res/img/intro/top.png) repeat-x 0 0;}
#content {width:930px;margin:0 auto;}
a, a:active {color:#4dadeb;}

#header {height:75px; width:960px; margin: 0 auto;}
#header h1 {float:left;}
#header .global-search {float:right; margin-top:30px; margin-right:17px; _display:inline;}
.global-search .text {border:1px solid #5496cc; color:#5496cc; background:#3c6b93; height:18px; line-height:18px; padding-left:2px; margin-right:5px}
.global-search .text:focus {background:#fff;}
.global-search button {width:50px; height:20px; line-height:20px; background:url(http://res.hyzing.com/res/img/intro/search-btn.png) no-repeat 0 0; border:0 none; color:#fff; cursor:pointer;}
.global-search button:hover {color:#193356;}

.column {overflow:auto; margin:10px 0 50px; _zoom:1;}
.box {padding:10px; background:#fff; border:1px solid #ddd; float:left;}
.box h2 {color:#269; font-size:14px; padding:5px 10px; background:#f1f1f1;}
.box ul {padding:10px;}
.intro {border:5px solid #4dadeb; float:none; overflow:hidden; _zoom:1;
	-moz-box-shadow:0 0 5px #666;
	-webkit-box-shadow:0 0 5px #666;
	box-shadow:0 0 5px #666;
}
.intro dl {width:500px; float:left; padding-left:40px; background:url(http://res.hyzing.com/res/img/intro/icon.png) no-repeat 15px 11px; _display:inline;}
.intro dt {font-size:16px; font-weight:bold;margin:10px 10px 0;}
.intro ul {padding-top:0; overflow:hidden; _zoom:1;}
.intro .linebreak li {float:left; width:49.5%;}
.intro img {margin-top:10px;}

.demo-start {display:block; width:224px; height:63px; background:url(http://res.hyzing.com/res/img/intro/button.png) no-repeat 0 0; overflow:hidden; text-indent:-20em; margin:-20px auto 0;; position:relative; cursor:pointer; }
.demo-start:hover {background-position:0 100%;}

.comments {width:568px;margin-right:10px;}
.comments li {position:relative;overflow:auto;padding-bottom:15px; margin:5px 0 20px; _zoom:1; _padding-bottom:20px}
.avatar {float:left;}
.avatar .img {padding:1px; border:1px solid #ddd; display:block;}
.avatar .date,
.avatar .company {color:#ccc;position:absolute; bottom:0;}
.avatar .date {right:10px;}
.avatar .company {left:0;}
.comment {position:relative; float:left; width:440px; padding:5px; margin:0 0 5px 20px; border:1px solid #dbdbdb; _display:inline; _zoom:1;
	-moz-border-radius:5px;
	-webkit-border-radius:5px;
	border-radius:5px;
	-moz-box-shadow:0 1px 3px #dbdbdb;
	-webkit-box-shadow:0 1px 3px #dbdbdb;
	box-shadow:0 1px 3px #dbdbdb;
}
.comment .arrow {display:block; width:7px; height:10px; background:url(http://res.hyzing.com/res/img/intro/arr.png) no-repeat 0 0; position:absolute; left:-7px; top:10px;}

.eventList, .partnerList {width:308px;}
.eventList {margin-bottom:10px;}

.partnerList ul {padding:10px 0;}
.partnerList li {float:left; width:150px; margin:5px 4px 0 0;}
.partnerList li a {border-bottom:2px solid #fff; display:block;}
.partnerList li a:hover {border-bottom-color:#4dadeb;}

#footer {border-top:1px solid #ddd; background:#fff; padding:10px; overflow:auto; _zoom:1;}
#footer ul {overflow:hidden;float:left;}
#footer ul li {float:left;margin-left:-1px; margin-right:10px; padding-left:10px; border-left:1px solid #ddd;}
#footer .powerby {float:right;}
</style>
</head>
<body>
<div id="wrapper">
	<div id="header">
		<h1><a href="/"><img src="http://res.hyzing.com/res/img/intro/logo.png" /></a></h1>
		<form class="global-search" action="/managerc/login" name="manageLogin" method="post">
			<input id="loginId" name="loginId" type="text" placeholder="用户名:" class="text" />
			<input id="passwd" name="passwd" type="password" placeholder="密码:" class="text" />
			<button>登入</button>
		</form>
	</div>

	<div id="content">
		<div class="intro box">
			<dl>
				<?php foreach($eventMeta as $val) { ?>
				<dt><?php echo $val['title']; ?></dt>
				<dd>
					<ul<?php if(count($val['desc'])>4) echo ' class="linebreak"' ;?>>
					<?php foreach($val['desc'] as $desc) {
						echo '<li>',$desc,'</li>';
					}?>
					</ul>
				</dd>
				<?php } ?>
			</dl>
			<img src="http://res.hyzing.com/res/img/intro/demo.png" alt="desc" />
			<a class="demo-start" href="http://event.hyzing.com/managerc/demoStart">demo-测试</a>
		</div>
		<div class="column">
			<div class="comments box">
				<h2>用户评价</h2>
				<ul>
					<?php foreach($commentList as $val) { ?>
					<li>
						<div class="avatar">
							<img class="img" src="<?php echo $val['img'];?>" />
							<span class="name"><?php echo $val['name']; ?></span>
							<span class="company"><?php echo $val['company']; ?></span>
							<span class="date"><?php echo $val['date']; ?></span>
						</div>
						<div class="comment">
							<?php echo $val['comment']; ?>
							<b class="arrow"></b>
						<div>
					</li>
					<?php } ?>
				</ul>
			</div>
			
			<div class="eventList box">
				<h2>活动实例</h2>
				<ul>
					<?php foreach($eventList as $val) { ?>
					<li><a href="<?php echo $val['link']?>"><?php echo $val['title'] ?></a></li>
					<?php } ?>
				</ul>
			</div>
			<div class="partnerList box">
				<h2>合作伙伴</h2>
				<ul>
				<?php foreach($partnerList as $val) { ?>
					<li><a href="<?php echo $val['link']?>"><img src="<?php echo $val['img'] ?>" alt="<?php echo $val['desc']; ?>" /></a></li>
				<?php } ?>
				</ul>
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
