<?php /* Smarty version Smarty-3.1.17, created on 2016-09-29 23:06:58
         compiled from "application/views/private/video/list.html" */ ?>
<?php /*%%SmartyHeaderCode:61568400957edd6d279d320-61090201%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '8eac460322092b1d233e3f22159ef132f3103b94' => 
    array (
      0 => 'application/views/private/video/list.html',
      1 => 1473324240,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '61568400957edd6d279d320-61090201',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'url_private' => 0,
    'notification_msg' => 0,
    'notification_status' => 0,
    'url_add' => 0,
    'url_process' => 1,
    'data' => 1,
    'result' => 1,
    'no' => 1,
    'url_edit' => 1,
    'pagging' => 1,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.17',
  'unifunc' => 'content_57edd6d285b708_08564063',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_57edd6d285b708_08564063')) {function content_57edd6d285b708_08564063($_smarty_tpl) {?>
">
.
.
" title="Tambah Data" class="btn bg-olive btn-flat">
" name="form-koleksi" method="post" onsubmit="javascript:return konfirmasi_delete_data();">
 $_from = $_smarty_tpl->tpl_vars['data']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['result']->key => $_smarty_tpl->tpl_vars['result']->value) {
$_smarty_tpl->tpl_vars['result']->_loop = true;
?>
" />
.







/<?php echo $_smarty_tpl->tpl_vars['result']->value['id_video'];?>
" class="button-edit">Edit
<?php }?>