<?php /* Smarty version Smarty-3.1.17, created on 2016-10-19 03:49:00
         compiled from "application\views\private\foto\add_foto.html" */ ?>
<?php /*%%SmartyHeaderCode:3242057ec69da0eda96-40840623%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '0047eb946abb8b13ee81bff85f7ad99b090b8ac0' => 
    array (
      0 => 'application\\views\\private\\foto\\add_foto.html',
      1 => 1476841723,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '3242057ec69da0eda96-40840623',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.17',
  'unifunc' => 'content_57ec69da1ef7d1_00922775',
  'variables' => 
  array (
    'album' => 0,
    'url_private' => 0,
    'url_list' => 0,
    'url_list_foto' => 0,
    'notification_msg' => 0,
    'notification_status' => 0,
    'url_process' => 0,
    'data' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_57ec69da1ef7d1_00922775')) {function content_57ec69da1ef7d1_00922775($_smarty_tpl) {?><section class="content-header">

">
">
/<?php echo $_smarty_tpl->tpl_vars['album']->value['id_album'];?>
">
.
.
/<?php echo $_smarty_tpl->tpl_vars['album']->value['id_album'];?>
" title="List Foto" class="btn bg-olive btn-flat">
" method="post" enctype="multipart/form-data">
"/>
">
" size="100"  maxlength="255" />
" size="100" min="1" maxlength="20" width="50" />
"  class="btn btn-primary">