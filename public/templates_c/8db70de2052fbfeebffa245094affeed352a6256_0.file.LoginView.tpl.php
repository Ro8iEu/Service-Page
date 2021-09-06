<?php
/* Smarty version 3.1.34-dev-7, created on 2021-06-05 14:35:34
  from 'Z:\Xampp\htdocs\projekt\app\views\LoginView.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.34-dev-7',
  'unifunc' => 'content_60bb6f96d177a0_79396366',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '8db70de2052fbfeebffa245094affeed352a6256' => 
    array (
      0 => 'Z:\\Xampp\\htdocs\\projekt\\app\\views\\LoginView.tpl',
      1 => 1622896532,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_60bb6f96d177a0_79396366 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, true);
?>


<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_204764073360bb6f96d12e06_67585894', 'top');
?>

<?php $_smarty_tpl->inheritance->endChild($_smarty_tpl, "main.tpl");
}
/* {block 'top'} */
class Block_204764073360bb6f96d12e06_67585894 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'top' => 
  array (
    0 => 'Block_204764073360bb6f96d12e06_67585894',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

<div class="row gtr-uniform">
            <form action="<?php echo $_smarty_tpl->tpl_vars['conf']->value->action_root;?>
login" method="post">
                <legend><b>Logowanie do systemu</b></legend>


                    <div class="col-6 col-12-xsmall">
                        <input id="id_login" type="text" name="login" placeholder="login" value="<?php echo $_smarty_tpl->tpl_vars['form']->value->login;?>
"/>
                    </div>

                    <div class="col-6 col-12-xsmall">
                        <input id="id_pass" type="password" placeholder="hasło" name="pass"/><br/>
                    </div>

                    <input type="submit" value="zaloguj" class="button primary small"/>


            </form>

</div>
    <a class="button small" href="<?php echo $_smarty_tpl->tpl_vars['conf']->value->action_url;?>
register">Zarejestruj sie</a>
<?php
}
}
/* {/block 'top'} */
}
