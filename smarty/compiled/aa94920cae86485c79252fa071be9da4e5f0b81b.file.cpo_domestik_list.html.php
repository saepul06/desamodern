<?php /* Smarty version Smarty-3.1.17, created on 2016-09-29 05:01:36
         compiled from "application\views\private\harga\cpo_domestik_list.html" */ ?>
<?php /*%%SmartyHeaderCode:1573557ec8410b65c98-31512628%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'aa94920cae86485c79252fa071be9da4e5f0b81b' => 
    array (
      0 => 'application\\views\\private\\harga\\cpo_domestik_list.html',
      1 => 1474833782,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '1573557ec8410b65c98-31512628',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'url_add' => 0,
    'data_cpodomestik' => 0,
    'result' => 0,
    'no_cpo' => 0,
    'url_edit' => 0,
    'pagging' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.17',
  'unifunc' => 'content_57ec8410bb0024_83310691',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_57ec8410bb0024_83310691')) {function content_57ec8410bb0024_83310691($_smarty_tpl) {?>                     <div class="box">
/2" title="Tambah Data" class="btn bg-olive btn-flat"><i class='fa fa-plus'></i> Tambah Data</a></div>
 $_from = $_smarty_tpl->tpl_vars['data_cpodomestik']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['result']->key => $_smarty_tpl->tpl_vars['result']->value) {
$_smarty_tpl->tpl_vars['result']->_loop = true;
?>
" class="checkbox" /></td>
</td>
</td>
</td>
</td>
</td>
</td>
/<?php echo $_smarty_tpl->tpl_vars['result']->value['id_harga'];?>
" title="Edit" class="btn btn-success btn-flat"><i class='fa fa-pencil'></i></a>
<?php }?></ul>