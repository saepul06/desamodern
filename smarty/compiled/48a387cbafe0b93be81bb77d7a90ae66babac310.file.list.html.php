<?php /* Smarty version Smarty-3.1.17, created on 2016-09-29 20:20:07
         compiled from "application/views/private/berita/list.html" */ ?>
<?php /*%%SmartyHeaderCode:207688129557edafb7ed5060-23889085%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '48a387cbafe0b93be81bb77d7a90ae66babac310' => 
    array (
      0 => 'application/views/private/berita/list.html',
      1 => 1473324224,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '207688129557edafb7ed5060-23889085',
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
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.17',
  'unifunc' => 'content_57edafb83d4c00_83634089',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_57edafb83d4c00_83634089')) {function content_57edafb83d4c00_83634089($_smarty_tpl) {?><?php if (!is_callable('smarty_modifier_date_format')) include '/home/h71721/public_html/application/third_party/Smarty/plugins/modifier.date_format.php';
?>
"><i class="fa fa-home"></i> Home</a></li>
.
.
" title="Tambah Data" class="btn bg-olive btn-flat"><i class='fa fa-plus'></i> Tambah Data</a>
 - <?php echo $_smarty_tpl->tpl_vars['end']->value;?>
</b> dari <b><?php echo $_smarty_tpl->tpl_vars['total']->value;?>
</b> data</span>
<?php }?>
" name="form-koleksi" method="post" onsubmit="javascript:return konfirmasi_delete_data();">
 $_from = $_smarty_tpl->tpl_vars['data']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['result']->key => $_smarty_tpl->tpl_vars['result']->value) {
$_smarty_tpl->tpl_vars['result']->_loop = true;
?>
" class="checkbox" /></td>
</td>

</i></td>
</td>
</td>
" width="100" />
/<?php echo $_smarty_tpl->tpl_vars['result']->value['id_berita'];?>
" title="Edit" class="btn btn-success btn-flat"><i class='fa fa-pencil'></i></a>
<?php }?></ul>