<?php /* Smarty version Smarty-3.1.17, created on 2016-09-27 01:10:01
         compiled from "application/views/web/informasi/list.html" */ ?>
<?php /*%%SmartyHeaderCode:212183935957e9ff290f0652-16825685%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '366c2c2b75f7e6d2b3436b5573024af2db76e3d2' => 
    array (
      0 => 'application/views/web/informasi/list.html',
      1 => 1473859952,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '212183935957e9ff290f0652-16825685',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'informasi_list' => 0,
    'rs' => 0,
    'kategori' => 0,
    'act_lang' => 0,
    'result' => 0,
    'label' => 0,
    'pagging' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.17',
  'unifunc' => 'content_57e9ff29184558_21139069',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_57e9ff29184558_21139069')) {function content_57e9ff29184558_21139069($_smarty_tpl) {?><div class="l-inner-page-container">
 $_from = $_smarty_tpl->tpl_vars['informasi_list']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['rs']->key => $_smarty_tpl->tpl_vars['rs']->value) {
$_smarty_tpl->tpl_vars['rs']->_loop = true;
?>
" alt="">
" class="b-btn f-btn b-btn-light f-btn-light info">
" class="f-primary-l f-title-big f-blog__title"><?php echo $_smarty_tpl->tpl_vars['rs']->value['judul'];?>

 $_from = $_smarty_tpl->tpl_vars['kategori']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['result']->key => $_smarty_tpl->tpl_vars['result']->value) {
$_smarty_tpl->tpl_vars['result']->_loop = true;
?>




" class="b-btn f-btn b-btn-md b-btn-default f-primary-b"><?php echo $_smarty_tpl->tpl_vars['label']->value['selengkapnya'];?>

