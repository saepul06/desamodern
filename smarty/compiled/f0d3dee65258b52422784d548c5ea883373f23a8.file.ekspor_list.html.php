<?php /* Smarty version Smarty-3.1.17, created on 2016-09-29 23:06:05
         compiled from "application/views/private/harga/ekspor_list.html" */ ?>
<?php /*%%SmartyHeaderCode:97260788757ea1488e951c9-25236598%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'f0d3dee65258b52422784d548c5ea883373f23a8' => 
    array (
      0 => 'application/views/private/harga/ekspor_list.html',
      1 => 1474855392,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '97260788757ea1488e951c9-25236598',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.17',
  'unifunc' => 'content_57ea1488ef1a74_17893380',
  'variables' => 
  array (
    'url_add' => 0,
    'data_ekspor' => 0,
    'result' => 0,
    'no_ekspor' => 0,
    'url_edit' => 0,
    'pagging' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_57ea1488ef1a74_17893380')) {function content_57ea1488ef1a74_17893380($_smarty_tpl) {?>                     <div class="box">                                <div class="box-header">                                     <h3 class="box-title">Data Harga Referensi dari Pasar Global (CIF Rotterdam atau FOB Rotterdam)</h3>                                     <div class="box-tools">                                      <div class="btn-group pull-right"><a href="<?php echo $_smarty_tpl->tpl_vars['url_add']->value;?>
/3" title="Tambah Data" class="btn bg-olive btn-flat"><i class='fa fa-plus'></i> Tambah Data</a></div>                                    </div>                                </div>                                <div class="box-body table-responsive">                                        <table id="table_datagrid_ekspor" class="table table-bordered table-striped">                                            <thead>                                                <tr>                                               <th width="5%" id="cekAll"><input type="checkbox" class="checked-all" name="checked-all"  id="checked-all" class="form-control"></th>                                                <th width="5%">No.</th>                                                <th width="15%">Kategori Harga</th>                                                <th width="15%">Sub Kategori Harga</th>                                                <th width="10%" align="center">Tahun</th>                                                <th width="10%" align="center">Bulan</th>                                                <th width="20%" align="center">Harga Rupiah</th>                                                <th width="20%" align="center">Harga Dolar</th>                                                <th width="7%"></th>                                                </tr>                                            </thead>                                            <tbody>                                              <?php if ($_smarty_tpl->tpl_vars['data_ekspor']->value!='') {?>                                              <?php  $_smarty_tpl->tpl_vars['result'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['result']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['data_ekspor']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['result']->key => $_smarty_tpl->tpl_vars['result']->value) {
$_smarty_tpl->tpl_vars['result']->_loop = true;
?>                                            <tr>                                                <td align="center"><input type=checkbox name="id_harga[]" value="<?php echo $_smarty_tpl->tpl_vars['result']->value['id_harga'];?>
" class="checkbox" /></td>                                                <td><?php echo $_smarty_tpl->tpl_vars['no_ekspor']->value++;?>
</td>                                                <td><?php echo $_smarty_tpl->tpl_vars['result']->value['katharga'];?>
</td>                                                <td><?php echo $_smarty_tpl->tpl_vars['result']->value['sub_katharga'];?>
</td>                                                <td><?php echo $_smarty_tpl->tpl_vars['result']->value['tahun'];?>
</td>                                                <td><?php echo $_smarty_tpl->tpl_vars['result']->value['lengkap'];?>
</td>                                                <td><?php echo $_smarty_tpl->tpl_vars['result']->value['harga_rupiah'];?>
</td>                                               <td><?php echo $_smarty_tpl->tpl_vars['result']->value['harga_dolar'];?>
</td>                                                <td align="center">                                                <div class="btn-group-vertical"><a href="<?php echo $_smarty_tpl->tpl_vars['url_edit']->value;?>
/<?php echo $_smarty_tpl->tpl_vars['result']->value['id_harga'];?>
" title="Edit" class="btn btn-success btn-flat"><i class='fa fa-pencil'></i></a>												</div>                                                 </td>                                            </tr>                                            <?php } ?>                                            <?php }?>                                            </tbody>                                            <tfoot>                                        </tfoot>                                    </table>                                  </div>                                     <div class="box-footer clearfix">										<input type="submit" name="hapus" value="hapus" class="btn btn-danger"/>                                       <ul class="pagination pagination-sm no-margin pull-right"> <?php if ($_smarty_tpl->tpl_vars['pagging']->value!='') {?><?php echo $_smarty_tpl->tpl_vars['pagging']->value;?>
<?php }?></ul>                                    </div>                                    </div><!--end box--><?php }} ?>
