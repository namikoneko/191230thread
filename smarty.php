<?php
require_once '../libs/Smarty.class.php';
		$smarty = new Smarty();
		$smarty->template_dir = "./templates";
		$smarty->compile_dir = "./templates_c";
$smarty->assign("now",time());
$smarty->display("sample.tpl");
