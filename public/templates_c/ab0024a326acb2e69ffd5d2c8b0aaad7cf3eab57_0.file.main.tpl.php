<?php
/* Smarty version 3.1.34-dev-7, created on 2021-06-07 22:44:00
  from 'Z:\Xampp\htdocs\projekt\app\views\templates\main.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.34-dev-7',
  'unifunc' => 'content_60be851041a104_37951243',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'ab0024a326acb2e69ffd5d2c8b0aaad7cf3eab57' => 
    array (
      0 => 'Z:\\Xampp\\htdocs\\projekt\\app\\views\\templates\\main.tpl',
      1 => 1623098638,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_60be851041a104_37951243 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, false);
?>
<!DOCTYPE HTML>
<!--
	Phantom by HTML5 UP
	html5up.net | @ajlkn
	Free for personal and commercial use under the CCA 3.0 license (html5up.net/license)
-->
<html>
	<head>
		<title>Serwis </title>
		<meta charset="utf-8" />
		<meta name="viewport" content="width=device-width, initial-scale=1, user-scalable=no" />
		<link rel="stylesheet" href="assets/css/main.css" />
	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-+0n0xVW2eSR5OomGNYDnhzAbDsOXxcvSN1TPprVMTNDbiYZCxYbOOl7+AMvyTG2x" crossorigin="anonymous">

		<noscript><link rel="stylesheet" href="assets/css/noscript.css" /></noscript>
	</head>
	<style>
		.messages { }
		.messages ul { list-style-type: none; padding: 0; }
		.msg{
			border-radius: 0.5em;
			padding: 1em;
			margin-bottom: 0.5em;
			box-shadow: 0.2em 0.2em 0.4em #ccc;
		}
		.error{	background-color: #f88; }
		.warning{ background-color: #fd2; }
		.info{ background-color: #afa; }

	</style>
	<body class="is-preload">
	<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_145885411060be85104111e3_01390356', 'login');
?>


		<!-- Wrapper -->
			<div id="wrapper">

				<!-- Header -->
					<header id="header">
						<div class="inner">

							<!-- Logo -->
								<a href="reportList" class="logo">
									<span class="symbol"><img src="images/logo.svg" alt="" /></span><span class="title">RKCOMPANY</span>
								</a>
						</div>
					</header>



				<!-- Main -->
					<div id="main">
						<div class="inner">
					<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_190509867260be8510411aa1_62541425', 'top');
?>

                         <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_101764253560be85104121f2_07697969', 'welcome');
?>

                         <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_173741603560be8510412923_18017281', 'bot');
?>

                         <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_169633395760be8510413034_37221252', 'search');
?>



                         <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_26199070960be8510413749_73059745', 'bottom');
?>

                        <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_55080103060be8510413e66_95434201', 'register');
?>

						 <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_110125753360be85104145c9_81106153', 'messages');
?>

					</div>
					</div>
				<!-- Footer -->
					<footer id="footer">
						<div class="inner">

							<ul class="copyright">
								<li>&copy; Untitled. All rights reserved</li><li>Design: <a href="http://html5up.net">HTML5 UP</a></li>
							</ul>
						</div>
					</footer>

			</div>

		<!-- Scripts -->
			<?php echo '<script'; ?>
 src="assets/js/functions.js"><?php echo '</script'; ?>
>
			<?php echo '<script'; ?>
 src="assets/js/jquery.min.js"><?php echo '</script'; ?>
>
			<?php echo '<script'; ?>
 src="assets/js/browser.min.js"><?php echo '</script'; ?>
>
			<?php echo '<script'; ?>
 src="assets/js/breakpoints.min.js"><?php echo '</script'; ?>
>
			<?php echo '<script'; ?>
 src="assets/js/util.js"><?php echo '</script'; ?>
>
			<?php echo '<script'; ?>
 src="assets/js/main.js"><?php echo '</script'; ?>
>

	</body>
</html><?php }
/* {block 'login'} */
class Block_145885411060be85104111e3_01390356 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'login' => 
  array (
    0 => 'Block_145885411060be85104111e3_01390356',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>
 <?php
}
}
/* {/block 'login'} */
/* {block 'top'} */
class Block_190509867260be8510411aa1_62541425 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'top' => 
  array (
    0 => 'Block_190509867260be8510411aa1_62541425',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>
 <?php
}
}
/* {/block 'top'} */
/* {block 'welcome'} */
class Block_101764253560be85104121f2_07697969 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'welcome' => 
  array (
    0 => 'Block_101764253560be85104121f2_07697969',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>
 <?php
}
}
/* {/block 'welcome'} */
/* {block 'bot'} */
class Block_173741603560be8510412923_18017281 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'bot' => 
  array (
    0 => 'Block_173741603560be8510412923_18017281',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>
 <?php
}
}
/* {/block 'bot'} */
/* {block 'search'} */
class Block_169633395760be8510413034_37221252 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'search' => 
  array (
    0 => 'Block_169633395760be8510413034_37221252',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>
 <?php
}
}
/* {/block 'search'} */
/* {block 'bottom'} */
class Block_26199070960be8510413749_73059745 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'bottom' => 
  array (
    0 => 'Block_26199070960be8510413749_73059745',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>
 <?php
}
}
/* {/block 'bottom'} */
/* {block 'register'} */
class Block_55080103060be8510413e66_95434201 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'register' => 
  array (
    0 => 'Block_55080103060be8510413e66_95434201',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
}
}
/* {/block 'register'} */
/* {block 'messages'} */
class Block_110125753360be85104145c9_81106153 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'messages' => 
  array (
    0 => 'Block_110125753360be85104145c9_81106153',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

 <br>

							 <?php if ($_smarty_tpl->tpl_vars['msgs']->value->isMessage()) {?>
								 <div class="messagess">
									 <ul>
										 <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['msgs']->value->getMessages(), 'msg');
$_smarty_tpl->tpl_vars['msg']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['msg']->value) {
$_smarty_tpl->tpl_vars['msg']->do_else = false;
?>
											 <li class="msg <?php if ($_smarty_tpl->tpl_vars['msg']->value->isError()) {?>error<?php }?> <?php if ($_smarty_tpl->tpl_vars['msg']->value->isWarning()) {?>warning<?php }?> <?php if ($_smarty_tpl->tpl_vars['msg']->value->isInfo()) {?>info<?php }?>"><?php echo $_smarty_tpl->tpl_vars['msg']->value->text;?>
</li>
										 <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
									 </ul>
								 </div>
							 <?php }?>
							<?php
}
}
/* {/block 'messages'} */
}
