<?php /* Smarty version Smarty-3.1.17, created on 2016-10-29 10:55:52
         compiled from "application\views\private\profesi\profesi-add.html" */ ?>
<?php /*%%SmartyHeaderCode:240405814620be95708-00401476%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'c3439f6a283d181bd37f3abe6780385b5aeb3676' => 
    array (
      0 => 'application\\views\\private\\profesi\\profesi-add.html',
      1 => 1477731349,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '240405814620be95708-00401476',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.17',
  'unifunc' => 'content_5814620bf0aa26_60460044',
  'variables' => 
  array (
    'url_private' => 0,
    'url_list' => 0,
    'notification_msg' => 0,
    'notification_status' => 0,
    'url_process' => 0,
    'id_profesi' => 0,
    'result' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5814620bf0aa26_60460044')) {function content_5814620bf0aa26_60460044($_smarty_tpl) {?><section class="content-header">
">
">
.
.
" method="post">
 $_from = $_smarty_tpl->tpl_vars['id_profesi']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['result']->key => $_smarty_tpl->tpl_vars['result']->value) {
$_smarty_tpl->tpl_vars['result']->_loop = true;
?>
"  id="id_prov" class="form-control" maxlength="10" style="width:100px;" />
"  class="btn btn-primary">