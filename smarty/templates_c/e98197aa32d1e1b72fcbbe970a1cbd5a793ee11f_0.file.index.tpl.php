<?php
/* Smarty version 3.1.30, created on 2016-11-17 21:43:27
  from "D:\xamp\htdocs\test-new\application\views\home\index2.tpl" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_582e166f6cdc87_31954697',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'e98197aa32d1e1b72fcbbe970a1cbd5a793ee11f' => 
    array (
      0 => 'D:\\xamp\\htdocs\\test-new\\application\\views\\home\\index2.tpl',
      1 => 1478773900,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_582e166f6cdc87_31954697 (Smarty_Internal_Template $_smarty_tpl) {
?>
<div style="width: 1500px; min-height: 1000px; height:auto; margin:0 auto;">

    <div class="panel panel-default" style="float:left; width: 75%;">
    <div class="panel-heading">STRONA GŁÓWNA</div>
    <div class="panel-body">
            <div class="table-responsive2">
            <table table class="table table-striped table-bordered table-hover" style="font-size: 15px; width: 1093px; font-family: Trebuchet MS, Helvetica, sans-serif;">
                <thead class="thead-inverse" style="background-color: #0bd0ff; color: white; font-family: Comic Sans MS, cursive, sans-serif;">
                    <tr>
                        <th>ZDJĘCIE</th>
                        <th>NAZWA</th>
                        <th>OPIS</th>
                        <th>CENA</th>
                        <th>SKLEP</th>
                        <th>CZAS TRWANIA</th>
                            
                    </tr>
                </thead>
                <tbody style="font-family: Trebuchet MS, Helvetica, sans-serif">
                    <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['data']->value, 'key', false, 'klucz');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['klucz']->value => $_smarty_tpl->tpl_vars['key']->value) {
?>
                        <tr id="sticky-table_<?php echo $_smarty_tpl->tpl_vars['klucz']->value;?>
" onclick="getData(this)" >
                            <td>
                                    <img src=<?php echo $_smarty_tpl->tpl_vars['key']->value['url'];?>
  width="70px" height="70px"/>

                                
                            </td>
                            <td style="text-align: center;">
                                <?php echo $_smarty_tpl->tpl_vars['key']->value['name'];?>

                            </td>
                            <td>
                                <?php echo $_smarty_tpl->tpl_vars['key']->value['description'];?>

                            </td>
                            <td>
                                <?php echo $_smarty_tpl->tpl_vars['key']->value['price2'];?>
&nbsp;zł
                            </td>
                            <td>
                                <?php echo $_smarty_tpl->tpl_vars['key']->value['shop'];?>

                            </td>
                            <td>
                                <?php echo $_smarty_tpl->tpl_vars['key']->value['date'];?>

                            </td>
                        </tr>
                    <?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl);
?>

                </tbody>
            </table>
            </div>
                
    </div>
</div>
    <div class="panel panel-default" style="float:right;  width: 20%; margin-right: 30px;">
    <div class="panel-heading">Aktualny czas</div>
    <div class="panel-body timer">
        <span id="timeData">
           
        </span>
    </div>
</div>
            <div style="clear: both;"></div> 
</div><?php }
}
