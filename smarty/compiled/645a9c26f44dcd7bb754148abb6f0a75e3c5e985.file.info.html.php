<?php /* Smarty version Smarty-3.1.17, created on 2016-11-12 11:07:02
         compiled from "application\views\web\base-layout\info.html" */ ?>
<?php /*%%SmartyHeaderCode:288885802fa18e3ab92-37966872%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '645a9c26f44dcd7bb754148abb6f0a75e3c5e985' => 
    array (
      0 => 'application\\views\\web\\base-layout\\info.html',
      1 => 1478754519,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '288885802fa18e3ab92-37966872',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.17',
  'unifunc' => 'content_5802fa18e56125_80894466',
  'variables' => 
  array (
    'datasosmed' => 0,
    'rs' => 0,
    'kontakinfo' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5802fa18e56125_80894466')) {function content_5802fa18e56125_80894466($_smarty_tpl) {?>

        <!-- Top Bar
        ============================================= -->
        <div id="top-bar">

            <div class="container clearfix">

                <div class="col_half nobottommargin">

                    <!-- Top Links
                    ============================================= -->
                   
                </div>

                <div class="col_half fright col_last nobottommargin">

                    <!-- Top Social
                    ============================================= -->
                    <div id="top-social">
                        <ul>
                        <?php  $_smarty_tpl->tpl_vars['rs'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['rs']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['datasosmed']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['rs']->key => $_smarty_tpl->tpl_vars['rs']->value) {
$_smarty_tpl->tpl_vars['rs']->_loop = true;
?>
                            <li><a href="<?php echo $_smarty_tpl->tpl_vars['rs']->value['link'];?>
" class="si-facebook"><span class="ts-icon"><i class="<?php echo $_smarty_tpl->tpl_vars['rs']->value['logo'];?>
"></i></span><span class="ts-text"><?php echo $_smarty_tpl->tpl_vars['rs']->value['nama'];?>
</span></a></li>
                        <?php } ?>
                        
                            <li><a href="tel:<?php echo $_smarty_tpl->tpl_vars['kontakinfo']->value['telp'];?>
" class="si-facebook"><span class="ts-icon"><i class="icon-call"></i></span><span class="ts-text"><?php echo $_smarty_tpl->tpl_vars['kontakinfo']->value['telp'];?>
</span></a></li>
                            <li><a href="mailto:<?php echo $_smarty_tpl->tpl_vars['kontakinfo']->value['email'];?>
" class="si-facebook"><span class="ts-icon"><i class="icon-email3"></i></span><span class="ts-text"><?php echo $_smarty_tpl->tpl_vars['kontakinfo']->value['email'];?>
</span></a></li>
                        </ul>
                    </div><!-- #top-social end -->

                </div>

            </div>
<?php }} ?>
