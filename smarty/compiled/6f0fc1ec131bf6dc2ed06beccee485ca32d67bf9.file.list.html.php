<?php /* Smarty version Smarty-3.1.17, created on 2016-09-29 06:17:25
         compiled from "application/views/private/foto/list.html" */ ?>
<?php /*%%SmartyHeaderCode:161016674557ecea3542ac17-12230584%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '6f0fc1ec131bf6dc2ed06beccee485ca32d67bf9' => 
    array (
      0 => 'application/views/private/foto/list.html',
      1 => 1473324226,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '161016674557ecea3542ac17-12230584',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'url_private' => 0,
    'notification_msg' => 0,
    'notification_status' => 0,
    'url_add' => 0,
    'start' => 0,
    'end' => 0,
    'total' => 0,
    'pagging' => 1,
    'url_process' => 1,
    'data' => 1,
    'result' => 1,
    'no' => 1,
    'url_edit' => 1,
    'url_add_foto' => 1,
    'url_list_foto' => 1,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.17',
  'unifunc' => 'content_57ecea354d9897_98030624',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_57ecea354d9897_98030624')) {function content_57ecea354d9897_98030624($_smarty_tpl) {?>
">
.
.
" title="Tambah Data" class="btn bg-olive btn-flat">
 - <?php echo $_smarty_tpl->tpl_vars['end']->value;?>
</b> dari <b><?php echo $_smarty_tpl->tpl_vars['total']->value;?>
</b> data</span>
<?php }?>
" name="form-koleksi" method="post" onsubmit="javascript:return konfirmasi_delete_data();">
 $_from = $_smarty_tpl->tpl_vars['data']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['result']->key => $_smarty_tpl->tpl_vars['result']->value) {
$_smarty_tpl->tpl_vars['result']->_loop = true;
?>
" class="checkbox" />
.



/<?php echo $_smarty_tpl->tpl_vars['result']->value['id_album'];?>
" title="Edit Nama Album" class="btn btn-success btn-flat">
/<?php echo $_smarty_tpl->tpl_vars['result']->value['id_album'];?>
" title="Tambah Foto" class="btn btn-success btn-flat">
/<?php echo $_smarty_tpl->tpl_vars['result']->value['id_album'];?>
" title="Lihat List Foto" class="btn btn-success btn-flat">
<?php }?>