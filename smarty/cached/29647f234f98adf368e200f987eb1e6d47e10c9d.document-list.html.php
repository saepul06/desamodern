<?php /*%%SmartyHeaderCode:209605256457e9ee8f97a951-46869459%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '29647f234f98adf368e200f987eb1e6d47e10c9d' => 
    array (
      0 => 'application/views/web/base-layout/document-list.html',
      1 => 1474949698,
      2 => 'file',
    ),
    '77a1eda6cc84734346ce9ac641b1f771621654b2' => 
    array (
      0 => 'application/views/web/base-layout/footer.html',
      1 => 1473324244,
      2 => 'file',
    ),
    '3e4aa7eda89dba18595211cb0db30972a746c8fe' => 
    array (
      0 => 'application/views/web/base-layout/header.html',
      1 => 1474235202,
      2 => 'file',
    ),
    'f36110f272dd6932943df921173d302351fa858f' => 
    array (
      0 => 'application/views/web/base-layout/header_detail.html',
      1 => 1474288002,
      2 => 'file',
    ),
    'cd17044b971da62a1386b88b5c8b7ce060e9174e' => 
    array (
      0 => 'application/views/web/base-layout/breadcrumbs.html',
      1 => 1473324244,
      2 => 'file',
    ),
    'dbcabd6eb2d16fe58e951dde701ca30338de3d5e' => 
    array (
      0 => 'application/views/web/foto/detail.html',
      1 => 1473324246,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '209605256457e9ee8f97a951-46869459',
  'cache_lifetime' => 3600,
  'version' => 'Smarty-3.1.17',
  'unifunc' => 'content_57e9f3ab0c3a73_11204695',
  'variables' => 
  array (
    'act_lang' => 1,
    'BASEURL' => 1,
    'THEMESPATH' => 1,
    'LOADSTYLE' => 1,
    'LOADJS' => 0,
  ),
  'has_nocache_code' => true,
),true); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_57e9f3ab0c3a73_11204695')) {function content_57e9f3ab0c3a73_11204695($_smarty_tpl) {?><!DOCTYPE html><html>  <head>    <meta charset="utf-8">    <title>    <?php if ($_smarty_tpl->tpl_vars['act_lang']->value=='en') {?>    The center of Information and coordination of Industry Perkelapasawitan Indonesia    <?php } else { ?>      Pusat Informasi dan Koordinasi Industri Perkelapasawitan Indonesia    <?php }?>       </title>    <link rel="shortcut icon" href="<?php echo $_smarty_tpl->tpl_vars['BASEURL']->value;?>
doc/favicon.ico">    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no">    <link rel="stylesheet" type="text/css" href="<?php echo $_smarty_tpl->tpl_vars['THEMESPATH']->value;?>
" />    <?php echo $_smarty_tpl->tpl_vars['LOADSTYLE']->value;?>
  </head>  <body>    <div class="mask-l" style="background-color: #fff; width: 100%; height: 100%; position: fixed; top: 0; left:0; z-index: 9999999;">    </div>     <!--removed by integration-->    <?php echo $_smarty_tpl->getSubTemplate ("web/base-layout/header.html", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>
    <div class="j-menu-container">    </div>    <?php echo $_smarty_tpl->getSubTemplate ("web/base-layout/header_detail.html", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>
    <div class="l-inner-page-container">            <?php echo $_smarty_tpl->getSubTemplate ("web/base-layout/breadcrumbs.html", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>
      <div class="container">        <?php echo $_smarty_tpl->getSubTemplate (((string)$_smarty_tpl->tpl_vars['template_content']->value), $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>
      </div>          </div>    <footer>
 $_from = $_smarty_tpl->tpl_vars['datasosmed']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['rs']->key => $_smarty_tpl->tpl_vars['rs']->value) {
$_smarty_tpl->tpl_vars['rs']->_loop = true;
?>
" target="_blank" class="b-btn-group-hor__item f-btn-group-hor__item">
">
 $_from = $_smarty_tpl->tpl_vars['asosiasifooter']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['rs']->key => $_smarty_tpl->tpl_vars['rs']->value) {
$_smarty_tpl->tpl_vars['rs']->_loop = true;
?>
" >




<script type="text/javascript" src="http://dmsi.or.id/js/front/jquery/jquery-1.11.1.min.js"></script>
<script type="text/javascript" src="http://dmsi.or.id/js/front/jquery.cslider.js"></script>
<script type="text/javascript" src="http://dmsi.or.id/js/front/scrollspy.js"></script>
<script type="text/javascript" src="http://dmsi.or.id/js/front/bootstrap-progressbar/bootstrap-progressbar.js"></script>
<script type="text/javascript" src="http://dmsi.or.id/js/front/bootstrap.min.js"></script>
<script type="text/javascript" src="http://dmsi.or.id/js/front/masonry.pkgd.min.js"></script>
<script type="text/javascript" src="http://dmsi.or.id/js/front/imagesloaded.pkgd.min.js"></script>
<script type="text/javascript" src="http://dmsi.or.id/js/front/bxslider/jquery.bxslider.min.js"></script>
<script type="text/javascript" src="http://dmsi.or.id/js/front/flexslider/jquery.flexslider.js"></script>
<script type="text/javascript" src="http://dmsi.or.id/js/front/smooth-scroll/SmoothScroll.js"></script>
<script type="text/javascript" src="http://dmsi.or.id/js/front/jquery.carouFredSel-6.2.1-packed.js"></script>
<script type="text/javascript" src="http://dmsi.or.id/js/front/rs-plugin/js/jquery.themepunch.plugins.min.js"></script>
<script type="text/javascript" src="http://dmsi.or.id/js/front/rs-plugin/js/jquery.themepunch.revolution.min.js"></script>
<script type="text/javascript" src="http://dmsi.or.id/js/front/rs-plugin/videojs/video.js"></script>
<script type="text/javascript" src="http://dmsi.or.id/js/front/jqueryui/jquery-ui.js"></script>
<script type="text/javascript" src="http://dmsi.or.id/js/front/modules/sliders.js"></script>
<script type="text/javascript" src="http://dmsi.or.id/js/front/modules/ui.js"></script>
<script type="text/javascript" src="http://dmsi.or.id/js/front/modules/retina.js"></script>
<script type="text/javascript" src="http://dmsi.or.id/js/front/modules/animate-numbers.js"></script>
<script type="text/javascript" src="http://dmsi.or.id/js/front/modules/parallax-effect.js"></script>
<script type="text/javascript" src="http://dmsi.or.id/js/front/modules/settings.js"></script>
<script type="text/javascript" src="http://dmsi.or.id/js/front/modules/color-themes.js"></script>
<script type="text/javascript" src="http://dmsi.or.id/js/front/j.placeholder.js"></script>
<script type="text/javascript" src="http://dmsi.or.id/js/front/fancybox/jquery.fancybox.pack.js"></script>
<script type="text/javascript" src="http://dmsi.or.id/js/front/fancybox/jquery.mousewheel.pack.js"></script>
<script type="text/javascript" src="http://dmsi.or.id/js/front/fancybox/jquery.fancybox.custom.js"></script>
<script type="text/javascript" src="http://dmsi.or.id/js/front/user.js"></script>
<script type="text/javascript" src="http://dmsi.or.id/js/front/timeline.js"></script>
<script type="text/javascript" src="http://dmsi.or.id/js/front/fontawesome-markers.js"></script>
<script type="text/javascript" src="http://dmsi.or.id/js/front/cookie.js"></script>
<script type="text/javascript" src="http://dmsi.or.id/js/front/loader.js"></script>
<script type="text/javascript" src="http://dmsi.or.id/js/front/scrollIt/scrollIt.min.js"></script>
<script type="text/javascript" src="http://dmsi.or.id/js/front/modules/navigation-slide.js"></script>
<script type="text/javascript" src="http://dmsi.or.id/js/front/audioplayer/js/jplayer.playlist.min.js"></script>
<script type="text/javascript" src="http://dmsi.or.id/js/front/audioplayer/js/jquery.jplayer.min.js"></script>
<script type="text/javascript" src="http://dmsi.or.id/js/front/audioplayer.js"></script>
<script type="text/javascript" src="http://dmsi.or.id/js/admin/plugins/datepicker/bootstrap-datepicker.js"></script>
<script type="text/javascript" src="http://dmsi.or.id/js/admin/plugins/daterangepicker/daterangepicker.js"></script>
<script type="text/javascript" src="http://dmsi.or.id/js/charts/highcharts.js"></script>
<script type="text/javascript" src="http://dmsi.or.id/js/charts/modules/exporting.js"></script>
<script type="text/javascript" src="http://dmsi.or.id/js/charts/modules/data.js"></script>
<script type="text/javascript" src="http://dmsi.or.id/js/front/bootstrap-select.js"></script>
<script type="text/javascript" src="http://dmsi.or.id/js/front/custom.js"></script>
    <!-- end of loaded javascript -->  </body></html><?php }} ?>