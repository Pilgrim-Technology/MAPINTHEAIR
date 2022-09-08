{meta_html jquery_ui 'default'}
{meta_html css $j_basepath.'assets/css/bootstrap.min.css'}
{meta_html css $j_basepath.'assets/css/bootstrap-responsive.min.css'}
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
{meta_html css $j_basepath.'assets/css/main.css'}
{meta_html css $j_basepath.'assets/css/admin.css'}
{meta_html css $j_basepath.'assets/css/media.css'}

{meta_html csstheme 'css/main.css'}
{meta_html csstheme 'css/admin.css'}
{meta_html csstheme 'css/media.css'}

{meta_html js $j_basepath.'assets/js/bootstrap.min.js'}

<div id="header">
  <div id="logo">
  </div>
  <div id="title">
    <h1>{@jcommunity~login.login.title@}</h1>
  </div>
<!--
  <div id="headermenu" class="navbar navbar-fixed-top">
    <div id="auth" class="navbar-inner">
      <ul class="nav pull-right">
        <li class="home">
          <a href="{jurl 'view~default:index'}" rel="tooltip" data-original-title="{@view~default.repository.list.title@}" data-placement="bottom" href="#">
            <span class="icon"></span>
            <span class="text"><b>{@view~default.repository.list.title@}</b></span>
          </a>
        </li>
    </div>
  </div>
!-->

</div>
<div id="content" class="container">
  <div class="row">
    <div>
       {$MAIN}
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
