<?php 
if (jApp::config()->compilation['checkCacheFiletime'] &&
filemtime('/var/www/lizmap-web-client-3.5.5/lizmap/vendor/jelix/jcommunity-module/modules/jcommunity/templates/error.tpl') > 1656065164){ return false;
} else {
 require_once('/var/www/lizmap-web-client-3.5.5/lib/jelix/plugins/tpl/html/function.jurl.php');
function template_meta_ebf2c99401f1e3b848b04756f29dc8be($t){

}
function template_ebf2c99401f1e3b848b04756f29dc8be($t){
?><div class="jcommunity-box">
    <h1><?php echo jLocale::get('jcommunity~login.access.title'); ?></h1>
    <?php if($t->_vars['error'] == 'no_access_wronguser'):?>

        <p class="jcommunity-error"><?php echo jLocale::get('jcommunity~login.access.forbidden.wrong.user'); ?></p>
        <?php if($t->_vars['canViewProfile']):?>

        <p><a href="<?php jtpl_function_html_jurl( $t,'jcommunity~account:show', array('user'=>$t->_vars['login']));?>"><?php echo jLocale::get('jcommunity~account.back.to.account'); ?></a></p>
        <?php endif;?>
    <?php elseif($t->_vars['error'] == 'no_access_auth'):?>
        <p class="jcommunity-error"><?php echo jLocale::get('jcommunity~login.access.forbidden.authenticated'); ?></p>
        <p><a href="<?php jtpl_function_html_jurl( $t,'jcommunity~login:index');?>"><?php echo jLocale::get('jcommunity~login.back.to.login'); ?></a></p>
    <?php elseif($t->_vars['error'] == 'no_access_badstatus'):?>

        <p class="jcommunity-error"><?php echo jLocale::get('jcommunity~login.access.forbidden.badstatus'); ?></p>
        <?php if($t->_vars['login']):?>

            <p><a href="<?php jtpl_function_html_jurl( $t,'jcommunity~account:show', array('user'=>$t->_vars['login']));?>"><?php echo jLocale::get('jcommunity~account.back.to.account'); ?></a></p>
        <?php else:?>
            <p><a href="<?php jtpl_function_html_jurl( $t,'jcommunity~login:index');?>"><?php echo jLocale::get('jcommunity~login.back.to.login'); ?></a></p>
        <?php endif;?>
    <?php elseif($t->_vars['error'] == 'not_available'):?>
        <p class="jcommunity-error"><?php echo jLocale::get('jcommunity~login.access.not.available'); ?></p>
        <?php if($t->_vars['login']):?>

        <p><a href="<?php jtpl_function_html_jurl( $t,'jcommunity~account:show', array('user'=>$t->_vars['login']));?>"><?php echo jLocale::get('jcommunity~account.back.to.account'); ?></a></p>
        <?php else:?>
        <p><a href="<?php jtpl_function_html_jurl( $t,'jcommunity~login:index');?>"><?php echo jLocale::get('jcommunity~login.back.to.login'); ?></a></p>
        <?php endif;?>
    <?php else:?>
        <p class="jcommunity-error">Error <?php echo $t->_vars['error']; ?></p>
    <?php endif;?>

</div>
<?php 
}
return true;}
