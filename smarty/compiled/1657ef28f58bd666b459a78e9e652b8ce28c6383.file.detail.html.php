<?php /* Smarty version Smarty-3.1.17, created on 2016-09-29 06:46:32
         compiled from "application\views\web\foto\detail.html" */ ?>
<?php /*%%SmartyHeaderCode:3076057ec9ca8861179-29958966%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '1657ef28f58bd666b459a78e9e652b8ce28c6383' => 
    array (
      0 => 'application\\views\\web\\foto\\detail.html',
      1 => 1473302646,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '3076057ec9ca8861179-29958966',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'nama_album' => 0,
    'nama' => 0,
    'foto_list' => 0,
    'rs' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.17',
  'unifunc' => 'content_57ec9ca88d2611_34739282',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_57ec9ca88d2611_34739282')) {function content_57ec9ca88d2611_34739282($_smarty_tpl) {?><section class="b-infoblock--without-border">
 $_from = $_smarty_tpl->tpl_vars['nama_album']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['nama']->key => $_smarty_tpl->tpl_vars['nama']->value) {
$_smarty_tpl->tpl_vars['nama']->_loop = true;
?>

 $_from = $_smarty_tpl->tpl_vars['foto_list']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['rs']->key => $_smarty_tpl->tpl_vars['rs']->value) {
$_smarty_tpl->tpl_vars['rs']->_loop = true;
?>
'>
' class='b-btn f-btn b-btn-light f-btn-light fancybox info' rel='gallery' title='<?php echo $_smarty_tpl->tpl_vars['rs']->value['judul_foto'];?>
'>
