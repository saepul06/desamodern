<?php /* Smarty version Smarty-3.1.17, created on 2016-09-27 00:20:58
         compiled from "application/views/web/foto/detail.html" */ ?>
<?php /*%%SmartyHeaderCode:19133902757e9f3aae53b53-33902584%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'dbcabd6eb2d16fe58e951dde701ca30338de3d5e' => 
    array (
      0 => 'application/views/web/foto/detail.html',
      1 => 1473324246,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '19133902757e9f3aae53b53-33902584',
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
  'unifunc' => 'content_57e9f3ab0c1645_88676242',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_57e9f3ab0c1645_88676242')) {function content_57e9f3ab0c1645_88676242($_smarty_tpl) {?><section class="b-infoblock--without-border">
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
