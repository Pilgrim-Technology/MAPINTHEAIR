<?php 
if (jApp::config()->compilation['checkCacheFiletime'] &&
filemtime('/var/www/lizmap-web-client-3.5.5/lizmap/var/themes/default/master_admin/main.tpl') > 1661937022){ return false;
} else {
 require_once('/var/www/lizmap-web-client-3.5.5/lib/jelix/plugins/tpl/html/meta.html.php');
 require_once('/var/www/lizmap-web-client-3.5.5/lizmap/plugins/tpl/html/function.jmessage_bootstrap.php');
function template_meta_4fe55c8f9265a8f7dce6a80ac827762e($t){
jtpl_meta_html_html( $t,'jquery_ui','theme');
jtpl_meta_html_html( $t,'css',$t->_vars['j_basepath'].'assets/css/bootstrap.min.css');
jtpl_meta_html_html( $t,'css',$t->_vars['j_basepath'].'assets/css/bootstrap-responsive.min.css');
jtpl_meta_html_html( $t,'css',$t->_vars['j_basepath'].'assets/css/main.css');
jtpl_meta_html_html( $t,'css',$t->_vars['j_basepath'].'assets/css/admin.css');
jtpl_meta_html_html( $t,'css',$t->_vars['j_basepath'].'assets/css/media.css');
jtpl_meta_html_html( $t,'csstheme','css/main.css');
jtpl_meta_html_html( $t,'csstheme','css/admin.css');
jtpl_meta_html_html( $t,'csstheme','css/media.css');

}
function template_4fe55c8f9265a8f7dce6a80ac827762e($t){
?>







<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">




<div id="header">
  <div id="logo">
  </div>
  <div id="title">
    <h1><?php echo jLocale::get('admin~admin.header.admin'); ?></h1>
  </div>
  <div id="headermenu" class="navbar navbar-fixed-top">
   <div id="auth" class="navbar-inner"><?php echo $t->_vars['INFOBOX']; ?></div>
  </div>
</div>

<div id="content" class="container-fluid">
  <div class="row-fluid">
    <div id="menu" class="span3">
      <div class="well sidebar-nav">
        <ul class="nav nav-list">
         <?php echo $t->_vars['MENU']; ?>

        </ul>
      </div>
    </div>
    <div class="span9">
      <div class="row-fluid">
        <div id="admin-message"><?php jtpl_function_html_jmessage_bootstrap( $t);?></div>
       <?php echo $t->_vars['MAIN']; ?>
      </div>
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
				<section>
					<span><a href="" class="btn btn-small">Tutoriel</a></span>
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
