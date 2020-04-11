<?php
/* Smarty version 3.1.34-dev-7, created on 2020-04-11 18:49:42
  from '/app/template/form.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.34-dev-7',
  'unifunc' => 'content_5e9211461565d3_01217993',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '425f30ede3376736dc4154db71dc9af2b9fd84b3' => 
    array (
      0 => '/app/template/form.tpl',
      1 => 1586630980,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5e9211461565d3_01217993 (Smarty_Internal_Template $_smarty_tpl) {
?><h2><?php ob_start();
echo $_smarty_tpl->tpl_vars['type']->value;
$_prefixVariable1 = ob_get_clean();
echo $_prefixVariable1;?>
</h2>
	<form action= '/<?php ob_start();
echo $_smarty_tpl->tpl_vars['action']->value;
$_prefixVariable2 = ob_get_clean();
echo $_prefixVariable2;?>
' method='POST'>
		<br>
		<input type=	'text' name='login' placeholder='Login'>
            <br>
        <input type=	'password' name='password' placeholder='Password'>
            <br>
        <input type=	'submit' name='Register'>

	</form>
	<br>
		<?php }
}
