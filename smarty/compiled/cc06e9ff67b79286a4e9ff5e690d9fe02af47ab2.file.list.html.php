<?php /* Smarty version Smarty-3.1.17, created on 2016-09-29 02:21:18
         compiled from "application\views\web\beritadmsi\list.html" */ ?>
<?php /*%%SmartyHeaderCode:1803857ec5e7e7e1681-79055682%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'cc06e9ff67b79286a4e9ff5e690d9fe02af47ab2' => 
    array (
      0 => 'application\\views\\web\\beritadmsi\\list.html',
      1 => 1473302646,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '1803857ec5e7e7e1681-79055682',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'berita_list' => 0,
    'rs' => 0,
    'label' => 0,
    'pagging' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.17',
  'unifunc' => 'content_57ec5e7e8fe945_15275059',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_57ec5e7e8fe945_15275059')) {function content_57ec5e7e8fe945_15275059($_smarty_tpl) {?><div class="row j-masonry b-col-default-indent">
 $_from = $_smarty_tpl->tpl_vars['berita_list']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['rs']->key => $_smarty_tpl->tpl_vars['rs']->value) {
$_smarty_tpl->tpl_vars['rs']->_loop = true;
?>
" alt="">
" class="b-btn f-btn b-btn-light f-btn-light info">
"><?php echo $_smarty_tpl->tpl_vars['rs']->value['judul'];?>



">

