<?php
/* Smarty version 3.1.30, created on 2017-01-10 22:55:50
  from "D:\xamp\htdocs\pdf_test\application\views\applications\index2.tpl" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_58755866111fb2_25358571',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'b73c70bafe420193acd887d2d9569ca73e307403' => 
    array (
      0 => 'D:\\xamp\\htdocs\\pdf_test\\application\\views\\applications\\index2.tpl',
      1 => 1481578871,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_58755866111fb2_25358571 (Smarty_Internal_Template $_smarty_tpl) {
?>

<div style="width: 1000px; height: 800px;margin:0 auto;" >
    <div class="panel panel-default">
    <div class="panel-heading">Weryfikacja poprawności numeru NIP</div>
    <div class="panel-body">
        <form>
            <div class="input-group"><span style="width:40%;font-weight:bold;" class="input-group-addon">Numer NIP:</span>
                <input type="text" name="nip" id="nip" class="form-control" onkeyup="nipVerify(this.value);"/>
            </div>
                <button type="button" class="btn btn-success" style="margin-top: 20px; margin-left: 240px;" >Zatwierdź</button>
        </form>
    </div>
    <div class="panel panel-default" style="float:right;  width: 20%; margin-right: 30px;">
        <div class="panel-heading">Aktualny czas</div>
        <div class="panel-body timer">
            <span id="timeData"> </span>
        </div>
    </div>
</div>
</div>
<?php }
}
