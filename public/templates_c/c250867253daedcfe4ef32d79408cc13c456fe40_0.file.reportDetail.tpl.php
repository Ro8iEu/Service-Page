<?php
/* Smarty version 3.1.34-dev-7, created on 2021-06-07 22:54:41
  from 'Z:\Xampp\htdocs\projekt\app\views\reportDetail.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.34-dev-7',
  'unifunc' => 'content_60be879108fa93_74281784',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'c250867253daedcfe4ef32d79408cc13c456fe40' => 
    array (
      0 => 'Z:\\Xampp\\htdocs\\projekt\\app\\views\\reportDetail.tpl',
      1 => 1623097898,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_60be879108fa93_74281784 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, true);
?>


<body class="is-preload">
<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_180341618160be879107e9a2_63769197', 'login');
?>


<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_97530351260be879107f475_88660006', 'bot');
?>

<?php $_smarty_tpl->inheritance->endChild($_smarty_tpl, "main.tpl");
}
/* {block 'login'} */
class Block_180341618160be879107e9a2_63769197 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'login' => 
  array (
    0 => 'Block_180341618160be879107e9a2_63769197',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>
 <?php
}
}
/* {/block 'login'} */
/* {block 'bot'} */
class Block_97530351260be879107f475_88660006 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'bot' => 
  array (
    0 => 'Block_97530351260be879107f475_88660006',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>




    <div class="table-wrapper">
        <table class="alt">
            <thead>
            <tr>
                <th style="text-align:center">Numer Zgłoszenia</th>
                <th style="text-align:center">imie</th>
                <th style="text-align:center">nazwisko</th>
                <th style="text-align:center">Telefon</th>
                <th style="text-align:center">Model</th>
                <th style="text-align:center">opis</th>
            </tr>
            <br>


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
</td><td style="text-align:center"><?php echo $_smarty_tpl->tpl_vars['p']->value["report_name"];?>
</td><td style="text-align:center"><?php echo $_smarty_tpl->tpl_vars['p']->value["report_surname"];?>
</td><td style="text-align:center"><?php echo $_smarty_tpl->tpl_vars['p']->value["phone"];?>
</td><td style="text-align:center"><?php echo $_smarty_tpl->tpl_vars['p']->value["model"];?>
</td><td style="text-align:center"><?php echo $_smarty_tpl->tpl_vars['p']->value["description"];?>
</td></tr>
            <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
            </tbody>
        </table>
  <br>
        <br>
        <table class="alt">
            <thead>
            <tr>
                <th style="text-align:center">Komentarz</th>
                <th style="text-align:center">Cena</th>
                <th style="text-align:center">Data zgłoszenia</th>
                <th style="text-align:center">Data Aktualizacji</th>
                <th style="text-align:center">Typ naprawy</th>
                <th style="text-align:center">Rodzaj sprzętu</th>
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
                <tr><td style="text-align:center"><?php echo $_smarty_tpl->tpl_vars['p']->value["comment"];?>
</td><td style="text-align:center"><?php echo $_smarty_tpl->tpl_vars['p']->value["cost"];?>
</td><td style="text-align:center"><?php echo $_smarty_tpl->tpl_vars['p']->value["date_of_report"];?>
</td><td style="text-align:center"><?php echo $_smarty_tpl->tpl_vars['p']->value["date_of_repair"];?>
</td><td style="text-align:center"><?php echo $_smarty_tpl->tpl_vars['p']->value["repair_name"];?>
</td><td style="text-align:center"><?php echo $_smarty_tpl->tpl_vars['p']->value["device_name"];?>
</td><td style="text-align:center"><?php echo $_smarty_tpl->tpl_vars['p']->value["status_name"];?>
</td></tr>
            <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
            </tbody>
        </table>
        <td>
            <a class="small button" href="<?php echo $_smarty_tpl->tpl_vars['conf']->value->action_root;?>
reportList">Powrót</a>
        </td>
    </div>
<?php
}
}
/* {/block 'bot'} */
}
