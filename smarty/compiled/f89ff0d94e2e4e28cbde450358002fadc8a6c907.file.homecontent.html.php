<?php /* Smarty version Smarty-3.1.17, created on 2016-09-29 06:09:29
         compiled from "application/views/web/home/homecontent.html" */ ?>
<?php /*%%SmartyHeaderCode:78228106057e9ea7e0c8e81-88714971%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'f89ff0d94e2e4e28cbde450358002fadc8a6c907' => 
    array (
      0 => 'application/views/web/home/homecontent.html',
      1 => 1475163304,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '78228106057e9ea7e0c8e81-88714971',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.17',
  'unifunc' => 'content_57e9ea7e3ced58_99651958',
  'variables' => 
  array (
    'judul' => 0,
    'berita_dmsi' => 0,
    'rs' => 0,
    'baseurl' => 0,
    'berita_asosiasi' => 0,
    'foto_list' => 0,
    'act_lang' => 0,
    'video_list' => 0,
    'eventhome' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_57e9ea7e3ced58_99651958')) {function content_57e9ea7e3ced58_99651958($_smarty_tpl) {?><?php echo $_smarty_tpl->getSubTemplate ("web/home/anggota_slider.html", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>


 $_from = $_smarty_tpl->tpl_vars['berita_dmsi']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['rs']->key => $_smarty_tpl->tpl_vars['rs']->value) {
$_smarty_tpl->tpl_vars['rs']->_loop = true;
?>
 </div>
">
php_helpers/timthumb.php?src=<?php echo $_smarty_tpl->tpl_vars['rs']->value['image'];?>
&amp;w=120&amp;zc=0" alt="" />
" class="f-primary-b f-more font-judul"><?php echo $_smarty_tpl->tpl_vars['rs']->value['judul'];?>

 
 $_from = $_smarty_tpl->tpl_vars['berita_asosiasi']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['rs']->key => $_smarty_tpl->tpl_vars['rs']->value) {
$_smarty_tpl->tpl_vars['rs']->_loop = true;
?>
 </div>
">
php_helpers/timthumb.php?src=<?php echo $_smarty_tpl->tpl_vars['rs']->value['image'];?>
&amp;w=120&amp;zc=0" alt="" />
" class="f-primary-b f-more font-judul"><?php echo $_smarty_tpl->tpl_vars['rs']->value['judul'];?>

 

 $_from = $_smarty_tpl->tpl_vars['foto_list']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['rs']->key => $_smarty_tpl->tpl_vars['rs']->value) {
$_smarty_tpl->tpl_vars['rs']->_loop = true;
?>
" alt=""/> 


 $_from = $_smarty_tpl->tpl_vars['video_list']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['rs']->key => $_smarty_tpl->tpl_vars['rs']->value) {
$_smarty_tpl->tpl_vars['rs']->_loop = true;
?>
" alt=""/> 
" class="b-btn f-btn b-btn-light f-btn-light fancybox info fancybox.iframe" title="<?php echo $_smarty_tpl->tpl_vars['rs']->value['judul'];?>
">



 $_from = $_smarty_tpl->tpl_vars['eventhome']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['rs']->key => $_smarty_tpl->tpl_vars['rs']->value) {
$_smarty_tpl->tpl_vars['rs']->_loop = true;
?>
" alt="">
" class="b-btn f-btn b-btn-light f-btn-light info">
"><?php echo $_smarty_tpl->tpl_vars['rs']->value['judul_agenda'];?>



