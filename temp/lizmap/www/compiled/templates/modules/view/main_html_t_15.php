<?php 
if (jApp::config()->compilation['checkCacheFiletime'] &&
filemtime('/var/www/lizmap-web-client-3.5.5/lizmap/modules/view/templates/main.tpl') > 1661948522){ return false;
} else {
 require_once('/var/www/lizmap-web-client-3.5.5/lib/jelix/plugins/tpl/html/meta.html.php');
 require_once('/var/www/lizmap-web-client-3.5.5/lizmap/plugins/tpl/html/function.jmessage_bootstrap.php');
function template_meta_f7a09b42d7caf4012d1646cd46be7ad2($t){
jtpl_meta_html_html( $t,'csstheme','css/main.css');
jtpl_meta_html_html( $t,'csstheme','css/media.css');
$t->meta('lizmap~user_menu');

}
function template_f7a09b42d7caf4012d1646cd46be7ad2($t){
?>

<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

<div id="header">
  <div id="logo">
  </div>
  <div id="title">
    <h1><?php echo $t->_vars['repositoryLabel']; ?></h1>
  </div>

  <div id="headermenu" class="navbar navbar-fixed-top">
    <div id="auth" class="navbar-inner">
      <ul class="nav pull-right">
        <?php $t->display('lizmap~user_menu');?>

      </ul>
    </div>
  </div>
</div>

<div id="content" class="container">
  <div id="search">
    <div class="input-prepend">
      <button id="toggle-search" class="btn" type="button" data-toggle="tooltip"
        title="<?php echo jLocale::get('view~default.header.search.toggleKeywordsTitle.title'); ?>">T</button>
      <input id="search-project" class="span2" data-toggle="tooltip" title="<?php echo jLocale::get('view~default.header.search.input.title'); ?>"
        placeholder="<?php echo jLocale::get('view~map.search.nominatim.placeholder'); ?>" type="text">
    </div>
    <div id="search-project-keywords">
      <span id="search-project-keywords-selected"></span><span id="search-project-result"></span>
    </div>
  </div>
  <?php jtpl_function_html_jmessage_bootstrap( $t);?>

  <?php if(isset($t->_vars['landing_page_content'])):?>
  <div id="landingPageContent">
    <?php echo $t->_vars['landing_page_content']; ?>

  </div>
  <?php endif;?>
  <?php echo $t->_vars['MAIN']; ?>

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

<?php if($t->_vars['googleAnalyticsID'] && $t->_vars['googleAnalyticsID'] != ''):?>
<!-- Google Analytics -->
<script type="text/javascript">

(function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
(i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
})(window,document,'script','//www.google-analytics.com/analytics.js','ga');

ga('create', '<?php echo $t->_vars['googleAnalyticsID']; ?>', 'auto');
ga('send', 'pageview');
</script>
<!-- End Google Analytics -->
<?php endif;?>

<?php 
}
return true;}
