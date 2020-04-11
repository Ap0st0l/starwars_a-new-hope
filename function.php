<?php



const USERS_FILE = "users.json";
const POSTS_FILE = "posts.json";

function getLoginView(): string
{
	global $smarty;
	$smarty->assign('action', 'login');
	$smarty->assign('type', 'Login');
	$smarty->display('form.tpl');
}



function getRegisterView(): string
{
	global $smarty;
	$smarty->assign('action', 'register');
	$smarty->assign('type', 'Register');
	$smarty->display('form.tpl');
}



