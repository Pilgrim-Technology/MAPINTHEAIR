<?php 
if (jApp::config()->compilation['checkCacheFiletime'] &&
filemtime('/var/www/lizmap-web-client-3.5.5/lizmap/modules/admin/templates/config_theme.tpl') > 1616160726){ return false;
} else {
 require_once('/var/www/lizmap-web-client-3.5.5/lizmap/plugins/tpl/html/function.jmessage_bootstrap.php');
 require_once('/var/www/lizmap-web-client-3.5.5/lib/jelix/plugins/tpl/html/function.jurl.php');
function template_meta_58c258e48b45263542c1eea5758935fd($t){
if(isset($t->_vars['form'])) { $builder = $t->_vars['form']->getBuilder( 'htmlbootstrap');
    $builder->setOptions(array());
    $builder->outputMetaContent($t);}

}
function template_58c258e48b45263542c1eea5758935fd($t){
?><?php jtpl_function_html_jmessage_bootstrap( $t);?>
<h1><?php echo jLocale::get('admin.form.admin_theme.h1'); ?></h1>
<?php  $formfull = $t->_vars['form'];
    $formfullBuilder = $formfull->getBuilder( 'htmlbootstrap');
    $formfullBuilder->setOptions(array());
    $formfullBuilder->setAction( 'theme:save', array());
    $formfullBuilder->outputHeader();
    $formfullBuilder->outputAllControls();
    $formfullBuilder->outputFooter();?>


<div>
  <a class="btn" href="<?php jtpl_function_html_jurl( $t,'theme:index');?>"><?php echo jLocale::get('admin~admin.configuration.button.back.label'); ?></a>
</div>
<?php 
}
return true;}
