<?php
/* Smarty version 3.1.34-dev-7, created on 2021-06-08 08:15:25
  from 'Z:\Xampp\htdocs\projekt\app\views\reportList.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.34-dev-7',
  'unifunc' => 'content_60bf0afd91d835_59763373',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'f1ec29188e372e1c115d0f47f8a4bff591f5068a' => 
    array (
      0 => 'Z:\\Xampp\\htdocs\\projekt\\app\\views\\reportList.tpl',
      1 => 1623098677,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_60bf0afd91d835_59763373 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, true);
?>

<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_34591863360bf0afd8f91e1_78581483', 'login');
?>

<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_176169034060bf0afd9094d0_22436950', 'search');
?>


<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_122342195760bf0afd90aae9_62200284', 'bottom');
?>

<?php $_smarty_tpl->inheritance->endChild($_smarty_tpl, "main.tpl");
}
/* {block 'login'} */
class Block_34591863360bf0afd8f91e1_78581483 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'login' => 
  array (
    0 => 'Block_34591863360bf0afd8f91e1_78581483',
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
/* {block 'search'} */
class Block_176169034060bf0afd9094d0_22436950 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'search' => 
  array (
    0 => 'Block_176169034060bf0afd9094d0_22436950',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>


    <a class="button small"
    "  href="<?php echo $_smarty_tpl->tpl_vars['conf']->value->action_url;?>
reportNew">Nowe zlecenie</a>
    <div>
        <center><b>Wyszukaj zlecenie</b></center>
    </div>
    <div class="bottom-margin">
        <br>
        <form action="<?php echo $_smarty_tpl->tpl_vars['conf']->value->action_url;?>
reportList">

            <fieldset>
                <div class="row gtr-uniform">
                    <div class="col-6 col-12-xsmall">
                        <input type="text" placeholder="numer zgłoszenia" name="sf_id_report"/> <br>
                    </div>
                    <div class="col-6 col-12-xsmall">
                        <select name="sf_id_status" id="id_status">
                            <option value="">Status zgłoszenia</option>
                            <option value="3">Przyjęty</option>
                            <option value="4">Diagnozowany</option>
                            <option value="5">Naprawiony</option>
                            <option value="6">Wysłany</option>
                            <option value="7">Zakończony</option>
                        </select>

                    </div>

            </fieldset>
            <center>
                <div>
                    <button type="submit" class="primary small" a href="#one">Filtruj</button>
                </div>
            </center>
        </form>
    </div>
<?php
}
}
/* {/block 'search'} */
/* {block 'bottom'} */
class Block_122342195760bf0afd90aae9_62200284 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'bottom' => 
  array (
    0 => 'Block_122342195760bf0afd90aae9_62200284',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>


    <br>
    <br>
    <br>
    <div class="table-wrapper">
        <table>
            <thead>
            <tr>
                <th style="text-align:center">Numer Zgłoszenia</th>
                <th style="text-align:center">Model</th>
                <th style="text-align:center">Data zgłoszenia</th>
                <th style="text-align:center">Status</th>

            </tr>
            </thead>
            <tbody>
            <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['reports']->value, 'p');
$_smarty_tpl->tpl_vars['p']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['p']->value) {
$_smarty_tpl->tpl_vars['p']->do_else = false;
?>
                <tr><td style="text-align:center"><?php echo $_smarty_tpl->tpl_vars['p']->value["id_report"];?>
</td><td style="text-align:center"><?php echo $_smarty_tpl->tpl_vars['p']->value["model"];?>
</td><td style="text-align:center"><?php echo $_smarty_tpl->tpl_vars['p']->value["date_of_report"];?>
</td><td style="text-align:center"><?php echo $_smarty_tpl->tpl_vars['p']->value["name"];?>
</td><td style="text-align:center"><a class="button primary small" href="<?php echo $_smarty_tpl->tpl_vars['conf']->value->action_url;?>
reportDetail?report=<?php echo $_smarty_tpl->tpl_vars['p']->value['id_report'];?>
">Szczegóły</a></td></tr>
            <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>

            </tbody>
        </table>
        <div>
            <?php if ($_smarty_tpl->tpl_vars['p']->value != 1) {?>
                <a class="button small" href="<?php echo $_smarty_tpl->tpl_vars['conf']->value->action_url;?>
reportList?page=1"><<</a>
            <?php }?>
            <?php if ($_smarty_tpl->tpl_vars['previous_page']->value > 0) {?>
                <a class="button small" href="<?php echo $_smarty_tpl->tpl_vars['conf']->value->action_url;?>
reportList?page=<?php echo $_smarty_tpl->tpl_vars['p']->value-1;?>
"><</a>
            <?php }?>
            <a class="button small" href="<?php echo $_smarty_tpl->tpl_vars['conf']->value->action_url;?>
reportList?page=<?php echo $_smarty_tpl->tpl_vars['p']->value;?>
"><?php echo $_smarty_tpl->tpl_vars['p']->value;?>
</a>
            <?php if ($_smarty_tpl->tpl_vars['isNextPage']->value) {?>
                <a class="button small" href="<?php echo $_smarty_tpl->tpl_vars['conf']->value->action_url;?>
reportList?page=<?php echo $_smarty_tpl->tpl_vars['p']->value+1;?>
"><?php echo $_smarty_tpl->tpl_vars['p']->value+1;?>
</a>
                <a class="button small" href="<?php echo $_smarty_tpl->tpl_vars['conf']->value->action_url;?>
reportList?page=<?php echo $_smarty_tpl->tpl_vars['next_page']->value;?>
">></a>

            <?php }?>
        </div>
    </div>



<?php
}
}
/* {/block 'bottom'} */
}
