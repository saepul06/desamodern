<?php /* Smarty version Smarty-3.1.17, created on 2016-11-19 01:40:37
         compiled from "application\views\private\kategori_berita\list.html" */ ?>
<?php /*%%SmartyHeaderCode:2467582ec69ea4af75-26393590%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '2c964d34b0a7ed4e7a4c1c8983ef6254d7d0d63d' => 
    array (
      0 => 'application\\views\\private\\kategori_berita\\list.html',
      1 => 1479516036,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '2467582ec69ea4af75-26393590',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.17',
  'unifunc' => 'content_582ec69ec4ab73_76524695',
  'variables' => 
  array (
    'url_private' => 0,
    'notification_msg' => 0,
    'notification_status' => 0,
    'url_add' => 0,
    'kategori_berita' => 0,
    'result' => 0,
    'url_edit' => 0,
    'url_delete' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_582ec69ec4ab73_76524695')) {function content_582ec69ec4ab73_76524695($_smarty_tpl) {?><section class="content-header">
">
.
.
" title="Tambah Data" class="btn bg-olive btn-flat">
 $_from = $_smarty_tpl->tpl_vars['kategori_berita']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['result']->key => $_smarty_tpl->tpl_vars['result']->value) {
$_smarty_tpl->tpl_vars['result']->_loop = true;
?>
.

/<?php echo $_smarty_tpl->tpl_vars['result']->value['id_kategori'];?>
" title="Edit" class="btn btn-success btn-flat">
/<?php echo $_smarty_tpl->tpl_vars['result']->value['id_kategori'];?>
" title="Hapus" class="btn btn-danger btn-flat" id_profesi="btndel<?php echo $_smarty_tpl->tpl_vars['result']->value['id_kategori'];?>
" onclick="return konfirmasi_delete();">