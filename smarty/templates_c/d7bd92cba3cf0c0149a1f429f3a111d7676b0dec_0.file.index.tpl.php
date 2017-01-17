<?php
/* Smarty version 3.1.30, created on 2017-01-10 23:07:04
  from "D:\xamp\htdocs\pdf_test\application\views\home\index.tpl" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_58755b0807faf4_89899100',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'd7bd92cba3cf0c0149a1f429f3a111d7676b0dec' => 
    array (
      0 => 'D:\\xamp\\htdocs\\pdf_test\\application\\views\\home\\index.tpl',
      1 => 1483391618,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_58755b0807faf4_89899100 (Smarty_Internal_Template $_smarty_tpl) {
?>
<div id="okienko" title="Edycja danych" style="margin-top:10px; width:600px; height:400px;display: none;"></div>
    <div id="alert">
        <div class="alert alert-success">
  <strong>Success!</strong> Edycja wpisu zakończona powodzeniem</div>
    </div>
<div style="width: 1500px; min-height: 1000px; height:auto; margin:0 auto;padding-bottom: 100px">

    <div class="panel panel-default" style="float:left; width: 75%;">
    <div class="panel-heading testy">STRONA GŁÓWNA</div>
    <div class="panel-body">
        <div class="table-responsive2" style="position:relative;">
                <div class="loading-overlay"></div>
            <table class="table table-striped table-bordered table-hover" style="font-size: 12px; width: 1093px; font-family: Comfortaa;">
                <thead class="thead-inverse" style="background-color: #0bd0ff; color: white; font-family: Comfortaa; font-size: 13px;">
                    <tr id="header-table">
                        <th>ID</th>
                        <th>Nazwa</th>
                        <th>Nazwisko</th>
                        <th>Imię</th>
                        <th>Telefon</th>
                        <th>Adres</th>
                        <th>Miasto</th>
                        <th>Stan</th>
                        <th>Kod pocztowy</th>
                        <th>Kraj</th>
                            
                    </tr>
                    <tr style="background-color:#b7b7b7;">
                        <td><div class="search">
  <span class="fa fa-search"></span>
  <input placeholder="Search term">
</div></td>
                        <td><input type="text" class="search-query form-control"  style="height:20px; margin:0px;" placeholder="szukaj" /></td>
                        <td><input type="text" class="search-query form-control"  style="height:20px; margin:0px;" placeholder="szukaj" /></td>
                        <td><input type="text" class="search-query form-control"  style="height:20px; margin:0px;" placeholder="szukaj" /></td>
                        <td><input type="text" class="search-query form-control"  style="height:20px; margin:0px;" placeholder="szukaj" /></td>
                        <td><input type="text" class="search-query form-control"  style="height:20px; margin:0px;" placeholder="szukaj" /></td>
                        <td><input type="text" class="search-query form-control"  style="height:20px; margin:0px;" placeholder="szukaj" /></td>
                        <td><input type="text" class="search-query form-control"  style="height:20px; margin:0px;" placeholder="szukaj" /></td>
                        <td><input type="text" class="search-query form-control"  style="height:20px; margin:0px;" placeholder="szukaj" /></td>
                        <td><input type="text" class="search-query form-control"  style="height:20px; margin:0px;" placeholder="szukaj" /></td>
                    </tr>
                </thead>
                <tbody>
                    <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['data']->value, 'key', false, 'klucz');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['klucz']->value => $_smarty_tpl->tpl_vars['key']->value) {
?>
                        <tr id="sticky_table_<?php echo $_smarty_tpl->tpl_vars['key']->value['customerNumber'];?>
" onclick="getData(this);" >
                            <td style="text-align: center;" name="customerNumber">
                                <?php echo $_smarty_tpl->tpl_vars['key']->value['customerNumber'];?>

                            </td>
                            <td style="text-align: center;" name="customerName">
                                <?php echo $_smarty_tpl->tpl_vars['key']->value['customerName'];?>

                            </td>
                            <td name="contactLastName">
                                <?php echo $_smarty_tpl->tpl_vars['key']->value['contactLastName'];?>

                            </td>
                            <td name="contactFirstName">
                                <?php echo $_smarty_tpl->tpl_vars['key']->value['contactFirstName'];?>

                            </td>
                            <td name="phone">
                                <?php echo $_smarty_tpl->tpl_vars['key']->value['phone'];?>

                            </td>
                            <td name="addressLine1">
                                <?php echo $_smarty_tpl->tpl_vars['key']->value['addressLine1'];?>

                            </td>
                            <td name="city">
                                <?php echo $_smarty_tpl->tpl_vars['key']->value['city'];?>

                            </td>
                            <td name="state">
                                <?php echo $_smarty_tpl->tpl_vars['key']->value['state'];?>

                            </td>
                            <td name="postalCode">
                                <?php echo $_smarty_tpl->tpl_vars['key']->value['postalCode'];?>

                            </td>
                            <td name="country">
                                <?php echo $_smarty_tpl->tpl_vars['key']->value['country'];?>

                            </td>
                        </tr>
                    <?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl);
?>

                </tbody>
            </table>
                <nav aria-label="Page navigation" style="float:right;">
                    <ul class="pagination">
                      <li class="page-item">
                        <a class="page-link" href="#" aria-label="Previous">
                          <span aria-hidden="true">&laquo;</span>
                          <span class="sr-only">Previous</span>
                        </a>
                      </li>
                    <?php
$_smarty_tpl->tpl_vars['page'] = new Smarty_Variable(null, $_smarty_tpl->isRenderingCache);$_smarty_tpl->tpl_vars['page']->step = 1;$_smarty_tpl->tpl_vars['page']->total = (int) ceil(($_smarty_tpl->tpl_vars['page']->step > 0 ? $_smarty_tpl->tpl_vars['count']->value+1 - (1) : 1-($_smarty_tpl->tpl_vars['count']->value)+1)/abs($_smarty_tpl->tpl_vars['page']->step));
if ($_smarty_tpl->tpl_vars['page']->total > 0) {
for ($_smarty_tpl->tpl_vars['page']->value = 1, $_smarty_tpl->tpl_vars['page']->iteration = 1;$_smarty_tpl->tpl_vars['page']->iteration <= $_smarty_tpl->tpl_vars['page']->total;$_smarty_tpl->tpl_vars['page']->value += $_smarty_tpl->tpl_vars['page']->step, $_smarty_tpl->tpl_vars['page']->iteration++) {
$_smarty_tpl->tpl_vars['page']->first = $_smarty_tpl->tpl_vars['page']->iteration == 1;$_smarty_tpl->tpl_vars['page']->last = $_smarty_tpl->tpl_vars['page']->iteration == $_smarty_tpl->tpl_vars['page']->total;?>
                        <li class="page-item"><a class="page-link" href="javascript:void(0);" onclick="nextPage(<?php echo $_smarty_tpl->tpl_vars['page']->value;?>
);false;"><?php echo $_smarty_tpl->tpl_vars['page']->value;?>
</a></li>
                    <?php }
}
?>

                        <li class="page-item">
                            <a class="page-link" href="#" aria-label="Next">
                            <span aria-hidden="true">&raquo;</span>
                            <span class="sr-only">Next</span>
                            </a>
                        </li>
                    </ul>
                </nav>
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
