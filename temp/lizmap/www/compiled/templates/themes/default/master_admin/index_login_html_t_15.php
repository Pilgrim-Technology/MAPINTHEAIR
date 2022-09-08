<?php 
if (jApp::config()->compilation['checkCacheFiletime'] &&
filemtime('/var/www/lizmap-web-client-3.5.5/lizmap/var/themes/default/master_admin/index_login.tpl') > 1661936482){ return false;
} else {
 require_once('/var/www/lizmap-web-client-3.5.5/lib/jelix/plugins/tpl/html/meta.html.php');
 require_once('/var/www/lizmap-web-client-3.5.5/lib/jelix/plugins/tpl/html/function.jurl.php');
function template_meta_f22a05d51ef5a6517fb51a5f0b0c18f8($t){
jtpl_meta_html_html( $t,'jquery_ui','default');
jtpl_meta_html_html( $t,'css',$t->_vars['j_basepath'].'assets/css/bootstrap.min.css');
jtpl_meta_html_html( $t,'css',$t->_vars['j_basepath'].'assets/css/bootstrap-responsive.min.css');
jtpl_meta_html_html( $t,'css',$t->_vars['j_basepath'].'assets/css/main.css');
jtpl_meta_html_html( $t,'css',$t->_vars['j_basepath'].'assets/css/admin.css');
jtpl_meta_html_html( $t,'css',$t->_vars['j_basepath'].'assets/css/media.css');
jtpl_meta_html_html( $t,'csstheme','css/main.css');
jtpl_meta_html_html( $t,'csstheme','css/admin.css');
jtpl_meta_html_html( $t,'csstheme','css/media.css');
jtpl_meta_html_html( $t,'js',$t->_vars['j_basepath'].'assets/js/bootstrap.min.js');

}
function template_f22a05d51ef5a6517fb51a5f0b0c18f8($t){
?>


<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">










<div id="header">
  <div id="logo">
  </div>
  <div id="title">
    <h1><?php echo jLocale::get('jcommunity~login.login.title'); ?></h1>
  </div>
<!--
  <div id="headermenu" class="navbar navbar-fixed-top">
    <div id="auth" class="navbar-inner">
      <ul class="nav pull-right">
        <li class="home">
          <a href="<?php jtpl_function_html_jurl( $t,'view~default:index');?>" rel="tooltip" data-original-title="<?php echo jLocale::get('view~default.repository.list.title'); ?>" data-placement="bottom" href="#">
            <span class="icon"></span>
            <span class="text"><b><?php echo jLocale::get('view~default.repository.list.title'); ?></b></span>
          </a>
        </li>
    </div>
  </div>
!-->

</div>
<div id="content" class="container">
  <div class="row">
    <div>
       <?php echo $t->_vars['MAIN']; ?>

    </div>
  </div>
</div>


<!--FOOTER-->
<footer>
<div class="footer">
	<div id="button"></div>
	<div id="container">
	<div id="cont">
		<div class="footer_center">
			<div class="top_header">
				<section>
					<span><i class="fa fa-map-marker"></i></span>
					<span>3 rue Thomas Edison, 44118 La Chevrolière, France </span>
				</section>
				<section>
					<span><i class="fa fa-phone"></i></span>
					<span>(+33) 02 40 69 85 41</span>
				</section>
				<section>
					<span><i class="fa fa-envelope"></i></span>
					<span>contact@mapintheair.com</span>
				</section>
			</div>
			<div class="top_header">
				<section>
					<span></span>
				</section>
				<section>
					<span><a href="https://www.pilgrim-technology.com/" target="_blank" rel="noopener noreferrer"><img class="footerimg" src="/lizmap/themes/default/css/img/logo_footer.png" alt="powered by Pilgrim Technology"></a></span>
				</section>
				<section>
					<span></span>
				</section>
			</div>
		</div>
	</div>
</div>
	
</footer>
<?php 
}
return true;}
