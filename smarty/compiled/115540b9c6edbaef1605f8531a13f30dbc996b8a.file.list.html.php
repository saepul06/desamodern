<?php /* Smarty version Smarty-3.1.17, created on 2016-09-27 11:35:24
         compiled from "application\views\web\sponsor\list.html" */ ?>
<?php /*%%SmartyHeaderCode:147057ea3d5c49e5d5-88171343%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '115540b9c6edbaef1605f8531a13f30dbc996b8a' => 
    array (
      0 => 'application\\views\\web\\sponsor\\list.html',
      1 => 1474013412,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '147057ea3d5c49e5d5-88171343',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'sponsor_list' => 0,
    'rs' => 0,
    'act_lang' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.17',
  'unifunc' => 'content_57ea3d5c500070_12892793',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_57ea3d5c500070_12892793')) {function content_57ea3d5c500070_12892793($_smarty_tpl) {?> <section class="container b-welcome-box">
 $_from = $_smarty_tpl->tpl_vars['sponsor_list']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['rs']->key => $_smarty_tpl->tpl_vars['rs']->value) {
$_smarty_tpl->tpl_vars['rs']->_loop = true;
?>
'>
' class='b-btn f-btn b-btn-light f-btn-light fancybox info'
'
'