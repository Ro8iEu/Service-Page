<?php
/* Smarty version 3.1.34-dev-7, created on 2021-06-07 22:48:37
  from 'Z:\Xampp\htdocs\projekt\app\views\reportManage.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.34-dev-7',
  'unifunc' => 'content_60be8625502189_72298600',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'ec4f8755bc1e768d514a8635fa3ff591d9fae816' => 
    array (
      0 => 'Z:\\Xampp\\htdocs\\projekt\\app\\views\\reportManage.tpl',
      1 => 1623097936,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_60be8625502189_72298600 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, true);
?>

<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_111287149060be86254f95a8_16811417', 'login');
?>

<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_95043979060be8625500518_78579327', 'top');
?>


<?php $_smarty_tpl->inheritance->endChild($_smarty_tpl, "main.tpl");
}
/* {block 'login'} */
class Block_111287149060be86254f95a8_16811417 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'login' => 
  array (
    0 => 'Block_111287149060be86254f95a8_16811417',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>
 <?php if (count($_smarty_tpl->tpl_vars['conf']->value->roles) > 0) {?>
    <a href="<?php echo $_smarty_tpl->tpl_vars['conf']->value->action_root;?>
logout" class="button small">Wyloguj</a>
<?php } else { ?>
    <a href="<?php echo $_smarty_tpl->tpl_vars['conf']->value->action_root;?>
loginShow" class="button small">Zaloguj</a>
<?php }
}
}
/* {/block 'login'} */
/* {block 'top'} */
class Block_95043979060be8625500518_78579327 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'top' => 
  array (
    0 => 'Block_95043979060be8625500518_78579327',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

    <div class="bottom-margin">
        <form action="<?php echo $_smarty_tpl->tpl_vars['conf']->value->action_root;?>
newEdit" method="post">
            <fieldset>
              <legend>zlecenie numer: <b><?php echo $_smarty_tpl->tpl_vars['p']->value;?>
</b></legend>
                <div class="row gtr-uniform">
                    <div class="col-6 col-12-xsmall">
                        <input id="comment" type="text" placeholder="komentarz" name="comment">
                    </div>
                    <div class="col-6 col-12-xsmall">
                        <input id="cost" type="text" placeholder="Cena" name="cost">
                    </div>


                    <div class="col-12">
                        <select name="id_status" id="id_status">
                            <option value="">Status zgłoszenia</option>
                            <option value="3">Przyjęty</option>
                            <option value="4">Diagnozowany</option>
                            <option value="5">Naprawiony</option>
                            <option value="6">Wysłany</option>
                            <option value="7">Zakończony</option>
                        </select>
                    </div>


                    <div class="pure-controls">
                        <input type="submit" class="small button primary" value="Wyślij"/>
                        <br>
                        <br>
                        <a class="small button" href="<?php echo $_smarty_tpl->tpl_vars['conf']->value->action_root;?>
reportList">Powrót</a>
                    </div>
                </div>
            </fieldset>
            <input type="hidden" name="id" value="<?php echo $_smarty_tpl->tpl_vars['form']->value->id;?>
">

        </form>
    </div>
<?php
}
}
/* {/block 'top'} */
}
