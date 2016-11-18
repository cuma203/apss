<?php
/* Smarty version 3.1.30, created on 2016-10-10 22:39:41
  from "D:\xamp\htdocs\test-new\application\views\main\header.tpl" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_57fbfc8dd81856_91905718',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'dc64001480532a68c9c2a3cfdc53f03bdb2bf4fa' => 
    array (
      0 => 'D:\\xamp\\htdocs\\test-new\\application\\views\\main\\header.tpl',
      1 => 1476131916,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_57fbfc8dd81856_91905718 (Smarty_Internal_Template $_smarty_tpl) {
?>
<!DOCTYPE html>
<html>

    <meta charset="UTF-8">
    <title>smarty test</title>
    <head>
            <meta http-equiv="content-type" content="text/html; charset=UTF-8"/>
    <link rel="stylesheet" type="text/css" href="application\media\css\bootstrap.css" />
    </head>
<body>
        <div id="header-nav" style="margin:0 auto; width:1000px; height:40px;">
        <nav class="navbar navbar-dark bg-inverse" style="background-color: #e3f2fd;">

          <ul class="nav navbar-nav">
            <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['top_menu']->value, 'key');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['key']->value) {
?>
                <li class="nav-item">
                    <a class="nav-link" href=<?php echo $_smarty_tpl->tpl_vars['key']->value['url'];?>
> <?php echo mb_strtoupper($_smarty_tpl->tpl_vars['key']->value['name'], 'UTF-8');?>
</a>
                </li>
            <?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl);
?>

          </ul>
          <form class="form-inline pull-xs-right" style="float:right; margin-right: 30px; margin-top: 8px; ">
            <input class="form-control" type="text" placeholder="szukaj">
            <button class="btn btn-outline-success" type="submit">Szukaj</button>
          </form>
        </nav>
    </div>
    <hr><?php }
}
