<?php /* Smarty version Smarty-3.1.17, created on 2016-11-16 16:09:11
         compiled from "application\views\private\base-layout\login.html" */ ?>
<?php /*%%SmartyHeaderCode:240105828687cbc9448-74543047%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'df21733f89c6c63210adf76eb04fbf55c4763151' => 
    array (
      0 => 'application\\views\\private\\base-layout\\login.html',
      1 => 1479308950,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '240105828687cbc9448-74543047',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.17',
  'unifunc' => 'content_5828687ccbf5f3_30814611',
  'variables' => 
  array (
    'BASEURL' => 1,
    'THEMESPATH' => 1,
    'LOADSTYLE' => 1,
    'LOADJS' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5828687ccbf5f3_30814611')) {function content_5828687ccbf5f3_30814611($_smarty_tpl) {?><!DOCTYPE html>

<html>
  <head>
    <meta charset="utf-8">
    <title>
    DESA MODERN
   
    </title>
    <link rel="shortcut icon" href="<?php echo $_smarty_tpl->tpl_vars['BASEURL']->value;?>
doc/favicon.ico">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no">
   <link rel="stylesheet" type="text/css" href="<?php echo $_smarty_tpl->tpl_vars['THEMESPATH']->value;?>
" />
 
    <?php echo $_smarty_tpl->tpl_vars['LOADSTYLE']->value;?>

   </head>
  <body style="margin-top:10px;">
    <!--removed by integration-->
    
    <?php echo $_smarty_tpl->getSubTemplate (((string)$_smarty_tpl->tpl_vars['template_content']->value), $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>

    
    <!-- javascript loaded -->
    <?php echo $_smarty_tpl->tpl_vars['LOADJS']->value;?>

    <!-- end of loaded javascript -->
  </body>
</html>

<?php }} ?>
