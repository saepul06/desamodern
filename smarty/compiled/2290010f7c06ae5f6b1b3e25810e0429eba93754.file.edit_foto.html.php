<?php /* Smarty version Smarty-3.1.17, created on 2016-09-28 18:04:16
         compiled from "application\views\private\foto\edit_foto.html" */ ?>
<?php /*%%SmartyHeaderCode:470157ebea00376b11-19970006%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '2290010f7c06ae5f6b1b3e25810e0429eba93754' => 
    array (
      0 => 'application\\views\\private\\foto\\edit_foto.html',
      1 => 1473822922,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '470157ebea00376b11-19970006',
  'function' => 
  array (
  ),
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
    'foto' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.17',
  'unifunc' => 'content_57ebea004555c0_92176614',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_57ebea004555c0_92176614')) {function content_57ebea004555c0_92176614($_smarty_tpl) {?><section class="content-header">

">
">
/<?php echo $_smarty_tpl->tpl_vars['album']->value['id_album'];?>
">
.
.
/<?php echo $_smarty_tpl->tpl_vars['album']->value['id_album'];?>
" title="List Foto" class="btn bg-olive btn-flat">
" method="post" enctype="multipart/form-data">
">
">
">

" size="100" maxlength="255" />
" size="100" maxlength="255" />
" size="100" min="1" maxlength="20" width="50" />
"  class="btn btn-primary">