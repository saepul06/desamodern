<?php /* Smarty version Smarty-3.1.17, created on 2016-10-17 07:31:42
         compiled from "application\views\private\informasi\list.html" */ ?>
<?php /*%%SmartyHeaderCode:2476457ec9457b54777-88413625%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'a4e0db00471449d5e7c2099b3ad803587354c4a3' => 
    array (
      0 => 'application\\views\\private\\informasi\\list.html',
      1 => 1476682301,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '2476457ec9457b54777-88413625',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.17',
  'unifunc' => 'content_57ec9457c13e20_69216434',
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
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_57ec9457c13e20_69216434')) {function content_57ec9457c13e20_69216434($_smarty_tpl) {?><?php if (!is_callable('smarty_modifier_date_format')) include 'D:\\xampp\\htdocs\\regubasli\\application\\third_party\\Smarty\\plugins\\modifier.date_format.php';
?>
">
.
.
" title="Tambah Data" class="btn bg-olive btn-flat">
" name="form-koleksi" method="post" onsubmit="javascript:return konfirmasi_delete_data();">
 $_from = $_smarty_tpl->tpl_vars['data']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['result']->key => $_smarty_tpl->tpl_vars['result']->value) {
$_smarty_tpl->tpl_vars['result']->_loop = true;
?>
" class="checkbox" />



" width="100" />
/<?php echo $_smarty_tpl->tpl_vars['result']->value['id_informasi'];?>
" title="Edit" class="btn btn-success btn-flat">
<?php }?>