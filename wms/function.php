<?php

class util {
	public static function getPageName() {
		echo ($_GET && $_GET['p'])?$_GET['p']:'list'; 
	}
}

class TPL {
	public static function header(){
		$ret = '
		<div id="header">
			<img id="logo" src="img/logo.png" width="180" height="65" title="智能仓储系统" alt="hyzing wms" />
			<ul id="quick-launch">
				<li><a href="#ql-1">ql-1</a></li>
			</ul>
		</div>
		<div id="gloabl-nav">
		</div>
		';
		echo $ret;
	}

	public static function sidebar($leng = 6){
		$menu = $item = '';
		for ($i=0; $i<$leng; $i++ ) {
			if ($i == 4) {
				$act = ' actived';
				$prefix = ' class="actived"';
			}else {
				$prefix = ' class="hidden"';
				$act = '';
			}
			$item .= '<a class="item'.$act.'" href="#item'.$i.'">第'.$i.'个菜单子项</a>';
			$menu .= '<dt class="menu" href="#menu'.$i.'">这是第'.$i.'个菜单</dt><dd'.$prefix.'>'.$item.'</dd>';
		}
		$ret = '<dl id="side">'.$menu.'</dl>';
		echo $ret;
	}

	public static function simpleForm(){
		$formContent = '';
		$leng = 7;
		for ($i=0; $i<$leng; $i++ ) {
			$type = $required = $autofocus = '';
			switch($i) {
				case '0':
					$type = 'text';
					$autofocus = ' autofocus';
					break;
				case '1':
					$type = 'password';
					break;
				case '2':
					$type = 'email';
					$required = ' required';
					break;
				case '3':
					$type = 'number';
					break;
				case '4':
					$type = 'range" min="1" max="10"';
					break;
				case '5':
					$type = 'date';
					break;
				case '6':
					$type = 'tel';
					break;
			}
			$formContent .= '<p><label>'.$type.'</label><input class="ipt" placeholder="'.$type.'" type="'.$type.'"'.$required.$autofocus.' /></p>';
		}
		$ret = '<form>'.$formContent.'<p><label>内容</label><textarea class="ta"></textarea></p><p class="act"><button type="submit">确认</button><button type="cancel">取消</button></p></form>';
		echo $ret;
	}

	public static function pageForm(){
	echo	'<div class="box">
			<div class="hd">标题为了表单示例</div>
			<div class="bd">';
				TPL::simpleForm();
	//			TPL::getCrumd();
		//		TPL::listView();
	echo '
			</div>
		</div>';
	}

	public static function getCrumb(){
		echo '<div class="crumb">
			<a href="#list">订单列表</a>
			<span>&gt;</span>
			Order#123987
		</div>';
	}
	public static function listView($leng=20){
		$tbody = '';
		for($i=0; $i<$leng; $i++) {
			$tbody .= '<tr><td class="sel"><input type="checkbox" class="J_sel_'.$i.'" /></td><td class="id">'.$i.'</td><td>衣服'.$i.'件</td><td><a href="#edit">修改</a><span class="pipe">|</span><a href="#del">删除</a></td></tr>';
		}
		$thead = '<thead><tr><th class="sel no-border"></td><th class="id">id</th><th>描述</th><th class="opt">操作</th></tr></thead>';
		$searchform = '<form class="search"><input type="text" placeholder="可以搜索标题, id, 描述" /><button type="submit">搜索</button></form>';
		$opt = '<tr class="action"><td colspan="4"><span class="batch"><a href="#J_sel_all">全选,</a> <a href="#J_sel_del" class="act">删除已选</a></span>'.$searchform.'</td></tr>';
		$page = '<div class="tfoot"><span class="batch"><a href="#J_sel_all">全选,</a> <a href="#J_sel_del" class="act">删除已选</a></span><div class="page-num"><a class="prev">上页</a><a href="#1">1</a><span class="current">2</span><a href="#3">3</a><a href="#4">4</a><a href="#5">5</a><span class="abbr">...</span><a class="next">下页</a></div></div>';
		$ret='<table class="nt sample-list">'.$thead.$opt.$tbody.'</table>';
		echo $ret.$page;
	}
	public function pageList()
	{
		TPL::getCrumb();
		echo '<div class="box"><div class="bd">';
		TPL::listView();
		echo '</div></div>';
	}
}
