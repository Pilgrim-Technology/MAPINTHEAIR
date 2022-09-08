{meta_html jquery_ui 'theme'}
{meta_html css $j_basepath.'assets/css/bootstrap.min.css'}
{meta_html css $j_basepath.'assets/css/bootstrap-responsive.min.css'}

{meta_html css $j_basepath.'assets/css/main.css'}
{meta_html css $j_basepath.'assets/css/admin.css'}
{meta_html css $j_basepath.'assets/css/media.css'}

<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
{meta_html csstheme 'css/main.css'}
{meta_html csstheme 'css/admin.css'}
{meta_html csstheme 'css/media.css'}

<div id="header">
  <div id="logo">
  </div>
  <div id="title">
    <h1>{@admin~admin.header.admin@}</h1>
  </div>
  <div id="headermenu" class="navbar navbar-fixed-top">
   <div id="auth" class="navbar-inner">{$INFOBOX}</div>
  </div>
</div>

<div id="content" class="container-fluid">
  <div class="row-fluid">
    <div id="menu" class="span3">
      <div class="well sidebar-nav">
        <ul class="nav nav-list">
         {$MENU}
        </ul>
      </div>
    </div>
    <div class="span9">
      <div class="row-fluid">
        <div id="admin-message">{jmessage_bootstrap}</div>
       {$MAIN}
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

  

