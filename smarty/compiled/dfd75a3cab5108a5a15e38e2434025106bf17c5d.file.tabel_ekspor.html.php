<?php /* Smarty version Smarty-3.1.17, created on 2016-09-29 06:17:23
         compiled from "application/views/private/dashboard/tabel_ekspor.html" */ ?>
<?php /*%%SmartyHeaderCode:143563449357ea03838c5280-79275159%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'dfd75a3cab5108a5a15e38e2434025106bf17c5d' => 
    array (
      0 => 'application/views/private/dashboard/tabel_ekspor.html',
      1 => 1474877548,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '143563449357ea03838c5280-79275159',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.17',
  'unifunc' => 'content_57ea038392ce14_10591559',
  'variables' => 
  array (
    'tahun_data' => 1,
    'databulan' => 1,
    'rs' => 1,
    'dataekspor' => 1,
    'data' => 1,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_57ea038392ce14_10591559')) {function content_57ea038392ce14_10591559($_smarty_tpl) {?><div class="box-body table-responsive"><table class="table table-bordered table-striped">              <tbody>			  <tr>                <td colspan="13" style="text-align:center;">Tahun <?php echo $_smarty_tpl->tpl_vars['tahun_data']->value;?>
                <br /><span style="float:right;">Harga dalam USD/Ton</span>                </td>              </tr>               <tr>				  <td>Sub Kategori</td>					 <?php  $_smarty_tpl->tpl_vars['rs'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['rs']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['databulan']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['rs']->key => $_smarty_tpl->tpl_vars['rs']->value) {
$_smarty_tpl->tpl_vars['rs']->_loop = true;
?>					<td><?php echo $_smarty_tpl->tpl_vars['rs']->value['lengkap'];?>
</td>					<?php } ?>                </tr>            </tr>			 <?php  $_smarty_tpl->tpl_vars['rs'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['rs']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['dataekspor']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['rs']->key => $_smarty_tpl->tpl_vars['rs']->value) {
$_smarty_tpl->tpl_vars['rs']->_loop = true;
?>              <tr>                <td><?php echo $_smarty_tpl->tpl_vars['rs']->value['name'];?>
</td>                <?php  $_smarty_tpl->tpl_vars['data'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['data']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['rs']->value['data']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['data']->key => $_smarty_tpl->tpl_vars['data']->value) {
$_smarty_tpl->tpl_vars['data']->_loop = true;
?>                <td align="right"><?php echo $_smarty_tpl->tpl_vars['data']->value;?>
</td>                <?php } ?>              </tr>              <?php } ?>            </tbody></table></div><?php }} ?>
