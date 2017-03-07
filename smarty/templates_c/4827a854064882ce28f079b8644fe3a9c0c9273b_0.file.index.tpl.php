<?php
/* Smarty version 3.1.30, created on 2017-01-10 23:07:06
  from "D:\xamp\htdocs\pdf_test\application\views\about\index.tpl" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_58755b0af35f92_33975461',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '4827a854064882ce28f079b8644fe3a9c0c9273b' => 
    array (
      0 => 'D:\\xamp\\htdocs\\pdf_test\\application\\views\\about\\index.tpl',
      1 => 1479545132,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_58755b0af35f92_33975461 (Smarty_Internal_Template $_smarty_tpl) {
?>
<div style="width: 1000px; min-height: 1200px; height:auto; margin:0 auto; margin-bottom: 50px;">

<div id="exTab2" class="container">	
<ul class="nav nav-tabs">
     <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['types']->value, 'typ', false, 'klucz');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['klucz']->value => $_smarty_tpl->tpl_vars['typ']->value) {
?>
        <?php if ($_smarty_tpl->tpl_vars['typ']->value['type'] == 1) {?>
            <li class="active"><a  href="#<?php echo $_smarty_tpl->tpl_vars['typ']->value['type'];?>
" data-toggle="tab"><?php echo $_smarty_tpl->tpl_vars['typ']->value['name'];?>
</a></li>
        <?php } else { ?>
            <li><a href="#<?php echo $_smarty_tpl->tpl_vars['typ']->value['type'];?>
" data-toggle="tab"><?php echo $_smarty_tpl->tpl_vars['typ']->value['name'];?>
</a></li>
        <?php }?>
    <?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl);
?>

</ul>

<div class="tab-content">
<?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['types']->value, 'key', false, 'klucz');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['klucz']->value => $_smarty_tpl->tpl_vars['key']->value) {
?>
    <div class="tab-pane active" id="<?php echo $_smarty_tpl->tpl_vars['key']->value['type'];?>
">
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
            <?php if (count($_smarty_tpl->tpl_vars['data']->value[$_smarty_tpl->tpl_vars['key']->value['type']]) < 1) {?>
                <tr id="sticky-table_<?php echo $_smarty_tpl->tpl_vars['klucz']->value;?>
" onclick="getData(this)">
                    <td colspan="6" style="text-align:center;">Brak promocji...</td>
                </tr>
            <?php } else { ?> 
                <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['data']->value[$_smarty_tpl->tpl_vars['key']->value['type']], 'key2', false, 'klucz2');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['klucz2']->value => $_smarty_tpl->tpl_vars['key2']->value) {
?>   
                    <tr id="sticky-table_<?php echo $_smarty_tpl->tpl_vars['klucz2']->value;?>
" onclick="getData(this)" >
                        <td>
                                <img src=<?php echo $_smarty_tpl->tpl_vars['key2']->value['url'];?>
  width="70px" height="70px"/>
    

                        </td>
                        <td style="text-align: center;">
                            <?php echo $_smarty_tpl->tpl_vars['key2']->value['name'];?>

                        </td>
                        <td>
                            <?php echo $_smarty_tpl->tpl_vars['key2']->value['description'];?>

                        </td>
                        <td>
                            <?php echo $_smarty_tpl->tpl_vars['key2']->value['price2'];?>
&nbsp;zł
                        </td>
                        <td>
                            <?php echo $_smarty_tpl->tpl_vars['key2']->value['shop'];?>

                        </td> 
                        <td>
                            <?php echo $_smarty_tpl->tpl_vars['key2']->value['date'];?>

                        </td> 
                    </tr>
                <?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl);
?>

            <?php }?>
        </tbody>
    </table>
    </div>
        
    </div>
<?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl);
?>

</div>
  </div>
    <?php echo '<script'; ?>
 src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"><?php echo '</script'; ?>
>
    <?php echo '<script'; ?>
 src="//maxcdn.bootstrapcdn.com/bootstrap/3.2.0/js/bootstrap.min.js"><?php echo '</script'; ?>
>
</div><?php }
}
