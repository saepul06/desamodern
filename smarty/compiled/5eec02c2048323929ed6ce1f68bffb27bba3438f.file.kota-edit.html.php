<?php /* Smarty version Smarty-3.1.17, created on 2016-10-28 11:13:03
         compiled from "application\views\private\kota\kota-edit.html" */ ?>
<?php /*%%SmartyHeaderCode:1644458130e2c8014d8-20094249%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '5eec02c2048323929ed6ce1f68bffb27bba3438f' => 
    array (
      0 => 'application\\views\\private\\kota\\kota-edit.html',
      1 => 1477645980,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '1644458130e2c8014d8-20094249',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.17',
  'unifunc' => 'content_58130e2ca33d58_31913775',
  'variables' => 
  array (
    'url_private' => 0,
    'url_list' => 0,
    'notification_msg' => 0,
    'notification_status' => 0,
    'url_process' => 0,
    'data' => 0,
    'propinsi' => 0,
    'result_propinsi' => 0,
    'propinsi_selected' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_58130e2ca33d58_31913775')) {function content_58130e2ca33d58_31913775($_smarty_tpl) {?><section class="content-header">
">
">
.
.
" method="post">
" />
 $_from = $_smarty_tpl->tpl_vars['propinsi']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['result_propinsi']->key => $_smarty_tpl->tpl_vars['result_propinsi']->value) {
$_smarty_tpl->tpl_vars['result_propinsi']->_loop = true;
?>
" <?php if ($_smarty_tpl->tpl_vars['result_propinsi']->value['id']==$_smarty_tpl->tpl_vars['propinsi_selected']->value) {?>selected="selected"<?php }?>><?php echo $_smarty_tpl->tpl_vars['result_propinsi']->value['id'];?>
 - <?php echo $_smarty_tpl->tpl_vars['result_propinsi']->value['nama'];?>

"  id="id_kotav" class="form-control"  maxlength="10" readonly="readonly" />
" size="45" maxlength="255" />
"  class="btn btn-primary">