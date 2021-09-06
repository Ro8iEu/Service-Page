<?php
/* Smarty version 3.1.34-dev-7, created on 2021-06-05 14:36:28
  from 'Z:\Xampp\htdocs\projekt\app\views\RegisterView.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.34-dev-7',
  'unifunc' => 'content_60bb6fccd6ac01_12546898',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'ceed74a165c840ae77747ee2f36047c69a097c38' => 
    array (
      0 => 'Z:\\Xampp\\htdocs\\projekt\\app\\views\\RegisterView.tpl',
      1 => 1622896586,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_60bb6fccd6ac01_12546898 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, true);
?>


<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_83429448560bb6fccd66bb7_95405911', 'register');
?>


<?php $_smarty_tpl->inheritance->endChild($_smarty_tpl, "main.tpl");
}
/* {block 'register'} */
class Block_83429448560bb6fccd66bb7_95405911 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'register' => 
  array (
    0 => 'Block_83429448560bb6fccd66bb7_95405911',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

    <div class="bottom-margin">
        <form action="<?php echo $_smarty_tpl->tpl_vars['conf']->value->action_root;?>
newUser" method="post">
            <fieldset>

                <label for="formGroupExampleInput" class="form-label">Tworzenie nowego użytkownika</label>

                <div class="row gtr-uniform">
                    <div class="col-6 col-12-xsmall">

                        <input id="name" type="text" placeholder="imię" name="name">
                    </div>
                    <div class="col-6 col-12-xsmall">

                        <input id="surname" type="text" placeholder="nazwisko" name="surname" ">
                    </div>
                    <div class="col-6 col-12-xsmall">

                        <input id="login" type="text" placeholder="login" name="login" ">
                    </div>
                    <div class="col-6 col-12-xsmall">

                        <input id="inputPassword5" type="password" placeholder="hasło" name="password">
                    </div>


                </div>


                <div class="pure-controls">
                    <input type="submit" class="small button" value="Wyślij"/>
                    <br>
                    <br>
                    <a class="small button" href="<?php echo $_smarty_tpl->tpl_vars['conf']->value->action_root;?>
login">Powrót</a>
                </div>
    </div>
    </fieldset>

    </form>
    </div>

<?php
}
}
/* {/block 'register'} */
}
