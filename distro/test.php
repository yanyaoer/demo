<!DOCTYPE html>
<html>
<head>
<title>FIXME</title>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" /> 
<link rel="stylesheet" href="style.css" />
<script type="text/javascript" src="http://res.hyzing.com/res/js/jquery/jquery-1.4.2.min.js"></script>
</head>
<body>
<div class="header"><img src="img/logo_bg.png" alt="智能仓库管理系统" /></div>

<div class="wrapper">
	<div class="column storage">
		<h2>库存状态</h2>
		<ul>
			<?php 
			$storageList = array(
								 array('label'=>'上衣','number'=>'10000件'),
								 array('label'=>'裤子','number'=>'1000件'),
								 array('label'=>'袜子','number'=>'100件')
								 );
			foreach ($storageList as $val) {
				echo '<li><span class="label">', $val['label'], '</span><span class="number">',$val['number'],'</span></li>';
			} ?>
		</ul>
	</div>

	<div class="column record">
		<h2><a  class="entry active" href="###">入库记录</a><span class="pipe">|</span><a class="egress" href="###">出库记录</a></h2>

		<div class="list-container">
			<div id="entry-list" class="list">
				<ul>
					<?php for($i=5; $i>0; $i--) { ?>
					<li<?php echo $i%2?' class="color"':'' ?>>
						<h3>入库号: 10010<?php echo $i;?></h3>
						<p class="desc">
							<span class="operator">操作员: 庄小明</span>
							<span class="date">入库时间: <?php echo date('Y-m-d G:i', mktime(13,$i*10,3,11,24,2010)); ?></span>
						</p>
						<div class="detail full hidden">
							<span class="detail-label">物品明细</span>:
							物品明细:
							<table class="detail-table">
								<tr>
									<th>名称</th><th>须入库数量</th><th>实际数量</th><th>目的地</th><th>状态</th>
								</tr>
								<tr><td>衣服</td><td>998</td><td>890</td><td>北京</td><td class="error">数目不符</td></tr>
								<tr><td>裤子</td><td>9999</td><td>9999</td><td>南京</td><td class="error">区域不符</td></tr>
								<tr><td>鞋子<td>1000</td><td>1000</td><td>北京</td><td class="normal">正常</td></tr>
							</table>
							<p class="more"><a class="J_toggledetail" href="###">收起详情</a></p>
						</div>
						<div class="detail compact">
							<span class="detail-label">物品明细</span>:
							上衣 裤装 鞋袜 
							<a class="more J_toggledetail" href="###">察看详情</a>
						</div>
					</li>
					<?php } ?>
				</ul>
			</div>
			<div id="egress-list" class="list">
				<ul>
					<?php for($j=11; $j>6; $j--) { ?>
					<li<?php echo $j%2?' class="color"':'' ?>>
						<h3>出库号: 10010<?php echo $j;?></h3>
						<p class="desc">
							<span class="operator">操作员: 庄小明</span>
							<span class="date">出库时间: <?php echo date('Y-m-d G:i', mktime(13,$j*10,3,11,24,2010)); ?></span>
						</p>
						<div class="detail full hidden">
							<span class="detail-label">物品明细</span>:
							物品明细:
							<table class="detail-table">
								<tr>
									<th>名称</th><th>须出库数量</th><th>实际数量</th><th>目的地</th><th>状态</th>
								</tr>
								<tr><td>衣服</td><td>998</td><td>890</td><td>北京</td><td class="error">数目不符</td></tr>
								<tr><td>裤子</td><td>9999</td><td>9999</td><td>南京</td><td class="error">区域不符</td></tr>
								<tr><td>鞋子<td>1000</td><td>1000</td><td>北京</td><td class="normal">正常</td></tr>
							</table>
							<p class="more"><a class="J_toggledetail" href="###">收起详情</a></p>
						</div>
						<div class="detail compact">
							<span class="detail-label">物品明细</span>:
							上衣 裤装 鞋袜 
							<a class="more J_toggledetail" href="###">察看详情</a>
						</div>
					</li>
					<?php } ?>
				</ul>
			</div>
		</div>

	</div>

	<div class="column histroy">
		<h2>历史记录</h2>
		<ul>
		<?php for($k=11; $k>0; $k--) {
	//		echo '<li>', $date('Y-m-d G:i'), ' 小明', ($k==2)?'禁止':'确认','单号: abcdef-10010',$k,' 入库</li>';
			if ($k<6) {
				$stat = 'add';
				$text = '确认单号: 10010'.$k.' 入库';
			}elseif ($k == 6) {
				$stat = 'disable';
				$text = '禁止单号: 10010'.$k.' 入库';
			} else {
				$stat = 'rm';
				$text = '确认单号: 10010'.$k.' 出库';
			}
			echo '<li class="', $stat,'">', date('Y-m-d G:i', mktime(13,$k*10,3,11,24,2010)), ' 庄小明',$text, '</li>';
		} ?>
		</ul>
	</div>

	<div id="J_dialog" class="dialog list entry">
		<h3>入库号: 1001012<b>&#9650;</b></h3>
		<p class="desc">
			<span class="operator">操作员: 小明</span>
			<span class="date">入库时间: <?php echo date('Y-m-d G:i'); ?></span>
		</p>
		<div class="detail full">
			<div class="J_detail">
				<span class="detail-label">物品明细</span>:
				<table class="detail-table">
					<tr>
						<th>名称</th><th>须入库数量</th><th>实际数量</th><th>目的地</th><th>状态</th>
					</tr>
					<tr><td>袜子</td><td>365</td><td>365</td><td>南京</td><td class="error">区域不符</td></tr>
					<tr><td>衣服</td><td>794</td><td>790</td><td>北京</td><td class="error">数目不符</td></tr>
					<tr><td>鞋子<td>9999</td><td>9999</td><td>北京</td><td class="normal">正常</td></tr>
				</table>
			</div>
			<form class="J_form">
				<p class="act">
					<button>确认入库</button>
					<button class="forbid">禁止入库</button>
				</p>
			</form>
		</div>
	</div>
</div>

</body>
<script type="text/javascript">
$(document).ready(function(){
	var drag = {
		/*
		elName : '',
		el : '',
		x : '',
		y : '',
		*/
		move : function(e){
			e = e || window.event;
			var el = drag.root || drag.el;
			el.style.left = (e.clientX - drag.x)+'px';
			el.style.top = (e.clientY - drag.y)+'px';
		},
		init : function(el, root) {
			self = this;
			self.el = el;
			if (root) self.root = root; 
			el.onmousedown = function(e) {
				e = e || window.event;
				e.preventDefault();
				self.x = e.clientX - root.offsetLeft;
				self.y = e.clientY - root.offsetTop;
				document.onmousemove = self.move;
				document.onmouseup = function(){
					document.onmousemove = null;
					document.onmouseup = null;
					if (self.onDragEnd) self.onDragEnd();
				}
			}
		},
		onDragEnd : ''
	};

	// 拖动浮出层
	var _root = document.getElementById('J_dialog'),
		_el = _root.getElementsByTagName('h3')[0];
	drag.init(_el, _root);

	// 禁止入库时插入文本框
	 $('#J_dialog').click(function(e){
		e.stopPropagation();
		if (!$(e.target).hasClass('forbid')) return false;
		$('#J_dialog .J_detail').slideUp();
		$('#J_dialog .J_form .act').before('<div class="J_info"><span class="detail-label">操作原因:</span><textarea class="ta"></textarea></div>');
		$('#J_dialog .act').html('<button type="submit">提交</button> <a class="back" href="###">返回</a>');

		//点击返回时回到入库表单
		$('#J_dialog .act .back').click(function(e){
			e.stopPropagation();
			$('#J_dialog .J_detail').slideDown();
			$('#J_dialog .J_info').slideUp();
			$('#J_dialog .act').html('<button>确认入库</button> <button class="forbid">禁止入库</button>');
		});
	});

	// 鼠标经过历史纪录时,切换一个更醒目的样式
	$('.histroy').mouseenter(function(){
		$(this).toggleClass('view-histroy');
	}).mouseleave(function(){
		$(this).toggleClass('view-histroy');
	});

	// 切换出/入库记录
	var swichList = function(el){
		if(!$(el).hasClass('active')) {
			// 切换标题激活状态
			$('.record h2 .active').removeClass('active');
			$(el).toggleClass('active');
			//切换列表显示状态
			if ($(el).hasClass('entry')) {
				var i=21, moveList = setInterval(function(){
					$('.list-container').css('left','-'+20*(i--)+'px');
					if (i<0) clearInterval(moveList);
				}, 20);
			}else if ($(el).hasClass('egress')) {
				var i=1, moveList = setInterval(function(){
					$('.list-container').css('left','-'+20*(i++)+'px');
					if (i>21) clearInterval(moveList);
				}, 20);
			}
		}
	}
	$('.record h2 a').click(function(e){
		e.stopPropagation();
		swichList(e.target);
	});

	//切换详情展示
	$('.detail .J_toggledetail').click(function(e){
		e.stopPropagation();
		var thisDetail = $(this).parent();
		if (thisDetail.hasClass('compact')) {
			thisDetail.fadeOut();
			thisDetail.prev().slideDown();	
		}else {
			thisDetail.parent().slideUp();
			thisDetail.parent().next().fadeIn();	
		}
		console.log(thisDetail.parent());
	});

});
</script>
</html>
