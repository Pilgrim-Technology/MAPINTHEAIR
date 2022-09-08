<?php $config = array (
  'startModule' => 'view',
  'startAction' => 'default:index',
  'locale' => 'en_US',
  'availableLocales' => 
  array (
    0 => 'cs_CZ',
    1 => 'de_DE',
    2 => 'el_GR',
    3 => 'en_US',
    4 => 'es_ES',
    5 => 'eu_ES',
    6 => 'fi_FI',
    7 => 'fr_FR',
    8 => 'gl_ES',
    9 => 'hu_HU',
    10 => 'it_IT',
    11 => 'ja_JP',
    12 => 'nl_NL',
    13 => 'pl_PL',
    14 => 'pt_BR',
    15 => 'pt_PT',
    16 => 'ro_RO',
    17 => 'ru_RU',
    18 => 'sl_SI',
    19 => 'sv_SE',
    20 => 'sk_SK',
    21 => 'uk_UA',
  ),
  'charset' => 'UTF-8',
  'theme' => 'default',
  'httpVersion' => '',
  'timeZone' => 'Europe/Paris',
  'pluginsPath' => 'app:plugins,lib:jelix-plugins,module:jacl2db/plugins,module:jacl2',
  'modulesPath' => 'lib:jelix-admin-modules,lib:jelix-modules,app:modules,app:lizmap-modules,app:vendor/jelix/jcommunity-module/modules',
  'domainName' => 'serv-mapintheair',
  'fallbackLocale' => 'en_US',
  'forceHTTPPort' => '',
  'forceHTTPSPort' => '',
  'chmodFile' => 436,
  'chmodDir' => 509,
  'disableInstallers' => '',
  'enableAllModules' => '',
  'enableRequestBodyJSONParsing' => '',
  'modules' => 
  array (
    'jelix.access' => 2,
    'jelix.path' => 'lib:jelix/core-modules/jelix',
    'jacldb.access' => '0',
    'jacl.access' => '0',
    'jpref.access' => '0',
    'jsoap.access' => '0',
    'junittests.access' => '0',
    'jpref_admin.access' => '0',
    'jacl2.access' => '1',
    'jacl2db.access' => '1',
    'jacl2db.installparam' => 'defaultuser',
    'jauth.access' => '0',
    'jauthdb.access' => '0',
    'jcommunity.access' => '1',
    'jcommunity.installparam' => 'defaultusers=lizmap~defaultusers.json;manualconfig',
    'admin.access' => '1',
    'dataviz.access' => '2',
    'filter.access' => '2',
    'action.access' => '2',
    'dynamicLayers.access' => '2',
    'lizmap.access' => '2',
    'proj4php.access' => '1',
    'view.access' => '2',
    'ldapdao.installparam' => 'noconfigfile',
    'multiauth.installparam' => 'noconfigfile;localconfig',
    'ldapdao.path' => 'app:vendor/jelix/ldapdao-module/ldapdao',
    'saml.installparam' => 'localconfig',
    'lizmap.installparam' => 'demo',
    'jacl2db_admin.access' => '1',
    'jauthdb_admin.access' => '1',
    'master_admin.access' => '1',
    'jauthdb_admin.dbprofile' => 'default',
    'jacl2db_admin.dbprofile' => 'default',
    'jpref_admin.dbprofile' => 'default',
    'master_admin.dbprofile' => 'default',
    'jauthdb.dbprofile' => 'default',
    'jacl2.dbprofile' => 'default',
    'jacl2db.dbprofile' => 'default',
    'jpref.dbprofile' => 'default',
    'junittests.dbprofile' => 'default',
    'jauth.dbprofile' => 'default',
    'jacldb.dbprofile' => 'default',
    'jsoap.dbprofile' => 'default',
    'jacl.dbprofile' => 'default',
    'view.dbprofile' => 'default',
    'proj4php.dbprofile' => 'default',
    'filter.dbprofile' => 'default',
    'dynamicLayers.dbprofile' => 'default',
    'dataviz.dbprofile' => 'default',
    'admin.dbprofile' => 'default',
    'action.dbprofile' => 'default',
    'lizmap.dbprofile' => 'default',
    'jmessenger.access' => 0,
    'jmessenger.dbprofile' => 'default',
    'jcommunity.dbprofile' => 'default',
    'jelix.dbprofile' => 'default',
    'ldapdao.access' => 0,
    'ldapdao.dbprofile' => 'default',
  ),
  'coordplugins' => 
  array (
    'autolocale' => '1',
    'auth' => 'index/auth.coord.ini.php',
    'jacl2' => '1',
  ),
  'tplplugins' => 
  array (
    'defaultJformsBuilder' => 'html',
    'defaultJformsErrorDecorator' => '',
  ),
  'responses' => 
  array (
    'html' => 'myHtmlResponse',
    'basichtml' => 'jResponseBasicHtml',
    'redirect' => 'jResponseRedirect',
    'redirectUrl' => 'jResponseRedirectUrl',
    'binary' => 'jResponseBinary',
    'text' => 'jResponseText',
    'cmdline' => 'jResponseCmdline',
    'jsonrpc' => 'jResponseJsonrpc',
    'json' => 'jResponseJson',
    'xmlrpc' => 'jResponseXmlrpc',
    'xml' => 'jResponseXml',
    'zip' => 'jResponseZip',
    'rss2.0' => 'jResponseRss20',
    'atom1.0' => 'jResponseAtom10',
    'css' => 'jResponseCss',
    'htmlfragment' => 'jResponseHtmlFragment',
    'htmlauth' => 'jResponseHtml',
    'sitemap' => 'jResponseSitemap',
    'htmlmap' => 'myHtmlMapResponse',
    'htmlsimple' => 'simpleHtmlResponse',
    'html.path' => '/var/www/lizmap-web-client-3.5.5/lizmap/responses/myHtmlResponse.class.php',
    'basichtml.path' => '/var/www/lizmap-web-client-3.5.5/lib/jelix/core/response/jResponseBasicHtml.class.php',
    'redirect.path' => '/var/www/lizmap-web-client-3.5.5/lib/jelix/core/response/jResponseRedirect.class.php',
    'redirectUrl.path' => '/var/www/lizmap-web-client-3.5.5/lib/jelix/core/response/jResponseRedirectUrl.class.php',
    'binary.path' => '/var/www/lizmap-web-client-3.5.5/lib/jelix/core/response/jResponseBinary.class.php',
    'text.path' => '/var/www/lizmap-web-client-3.5.5/lib/jelix/core/response/jResponseText.class.php',
    'cmdline.path' => '/var/www/lizmap-web-client-3.5.5/lib/jelix/core/response/jResponseCmdline.class.php',
    'jsonrpc.path' => '/var/www/lizmap-web-client-3.5.5/lib/jelix/core/response/jResponseJsonrpc.class.php',
    'json.path' => '/var/www/lizmap-web-client-3.5.5/lib/jelix/core/response/jResponseJson.class.php',
    'xmlrpc.path' => '/var/www/lizmap-web-client-3.5.5/lib/jelix/core/response/jResponseXmlrpc.class.php',
    'xml.path' => '/var/www/lizmap-web-client-3.5.5/lib/jelix/core/response/jResponseXml.class.php',
    'zip.path' => '/var/www/lizmap-web-client-3.5.5/lib/jelix/core/response/jResponseZip.class.php',
    'rss2.0.path' => '/var/www/lizmap-web-client-3.5.5/lib/jelix/core/response/jResponseRss20.class.php',
    'atom1.0.path' => '/var/www/lizmap-web-client-3.5.5/lib/jelix/core/response/jResponseAtom10.class.php',
    'css.path' => '/var/www/lizmap-web-client-3.5.5/lib/jelix/core/response/jResponseCss.class.php',
    'htmlfragment.path' => '/var/www/lizmap-web-client-3.5.5/lib/jelix/core/response/jResponseHtmlFragment.class.php',
    'htmlauth.path' => '/var/www/lizmap-web-client-3.5.5/lib/jelix/core/response/jResponseHtml.class.php',
    'sitemap.path' => '/var/www/lizmap-web-client-3.5.5/lib/jelix/core/response/jResponseSitemap.class.php',
    'htmlmap.path' => '/var/www/lizmap-web-client-3.5.5/lizmap/responses/myHtmlMapResponse.class.php',
    'htmlsimple.path' => '/var/www/lizmap-web-client-3.5.5/lizmap/responses/simpleHtmlResponse.class.php',
  ),
  '_coreResponses' => 
  array (
    'html' => 'jResponseHtml',
    'basichtml' => 'jResponseBasicHtml',
    'redirect' => 'jResponseRedirect',
    'redirectUrl' => 'jResponseRedirectUrl',
    'binary' => 'jResponseBinary',
    'text' => 'jResponseText',
    'cmdline' => 'jResponseCmdline',
    'jsonrpc' => 'jResponseJsonrpc',
    'json' => 'jResponseJson',
    'xmlrpc' => 'jResponseXmlrpc',
    'xml' => 'jResponseXml',
    'zip' => 'jResponseZip',
    'rss2.0' => 'jResponseRss20',
    'atom1.0' => 'jResponseAtom10',
    'css' => 'jResponseCss',
    'htmlfragment' => 'jResponseHtmlFragment',
    'htmlauth' => 'jResponseHtml',
    'sitemap' => 'jResponseSitemap',
    'html.path' => '/var/www/lizmap-web-client-3.5.5/lib/jelix/core/response/jResponseHtml.class.php',
    'basichtml.path' => '/var/www/lizmap-web-client-3.5.5/lib/jelix/core/response/jResponseBasicHtml.class.php',
    'redirect.path' => '/var/www/lizmap-web-client-3.5.5/lib/jelix/core/response/jResponseRedirect.class.php',
    'redirectUrl.path' => '/var/www/lizmap-web-client-3.5.5/lib/jelix/core/response/jResponseRedirectUrl.class.php',
    'binary.path' => '/var/www/lizmap-web-client-3.5.5/lib/jelix/core/response/jResponseBinary.class.php',
    'text.path' => '/var/www/lizmap-web-client-3.5.5/lib/jelix/core/response/jResponseText.class.php',
    'cmdline.path' => '/var/www/lizmap-web-client-3.5.5/lib/jelix/core/response/jResponseCmdline.class.php',
    'jsonrpc.path' => '/var/www/lizmap-web-client-3.5.5/lib/jelix/core/response/jResponseJsonrpc.class.php',
    'json.path' => '/var/www/lizmap-web-client-3.5.5/lib/jelix/core/response/jResponseJson.class.php',
    'xmlrpc.path' => '/var/www/lizmap-web-client-3.5.5/lib/jelix/core/response/jResponseXmlrpc.class.php',
    'xml.path' => '/var/www/lizmap-web-client-3.5.5/lib/jelix/core/response/jResponseXml.class.php',
    'zip.path' => '/var/www/lizmap-web-client-3.5.5/lib/jelix/core/response/jResponseZip.class.php',
    'rss2.0.path' => '/var/www/lizmap-web-client-3.5.5/lib/jelix/core/response/jResponseRss20.class.php',
    'atom1.0.path' => '/var/www/lizmap-web-client-3.5.5/lib/jelix/core/response/jResponseAtom10.class.php',
    'css.path' => '/var/www/lizmap-web-client-3.5.5/lib/jelix/core/response/jResponseCss.class.php',
    'htmlfragment.path' => '/var/www/lizmap-web-client-3.5.5/lib/jelix/core/response/jResponseHtmlFragment.class.php',
    'htmlauth.path' => '/var/www/lizmap-web-client-3.5.5/lib/jelix/core/response/jResponseHtml.class.php',
    'sitemap.path' => '/var/www/lizmap-web-client-3.5.5/lib/jelix/core/response/jResponseSitemap.class.php',
  ),
  'jResponseHtml' => 
  array (
    'plugins' => '',
    'minifyEntryPoint' => 'minify.php',
    'minifyCSS' => '',
    'minifyJS' => '',
    'minifyExcludeCSS' => '',
    'minifyExcludeJS' => 'jelix/wymeditor/jquery.wymeditor.js',
  ),
  'debugbar' => 
  array (
    'plugins' => 'sqllog,sessiondata,defaultlog',
    'defaultPosition' => 'right',
    'errors_openon' => 'error',
  ),
  'error_handling' => 
  array (
    'messageLogFormat' => '%date%\\t[%code%]\\t%msg%\\t%file%\\t%line%\\n',
    'errorMessage' => 'An error occured. Sorry for the inconvenience.',
    'sensitiveParameters' => 
    array (
      0 => 'password',
      1 => 'passwd',
      2 => 'pwd',
    ),
  ),
  'compilation' => 
  array (
    'checkCacheFiletime' => '1',
    'force' => '',
  ),
  'urlengine' => 
  array (
    'engine' => 'basic_significant',
    'enableParser' => '1',
    'multiview' => '',
    'scriptNameServerVariable' => 'SCRIPT_NAME',
    'pathInfoInQueryParameter' => '',
    'basePath' => '/lizmap/',
    'backendBasePath' => '',
    'forceProxyProtocol' => '',
    'checkHttpsOnParsing' => '1',
    'jelixWWWPath' => '/lizmap/assets/jelix/',
    'jqueryPath' => '/lizmap/assets/jelix/jquery/',
    'defaultEntrypoint' => 'index',
    'notfoundAct' => 'jelix~error:notfound',
    'simple_urlengine_https' => '',
    'significantFile' => 'urls.xml',
    'urlScript' => '/lizmap/index.php',
    'urlScriptPath' => '/lizmap/',
    'urlScriptName' => 'index.php',
    'urlScriptId' => 'index',
    'urlScriptIdenc' => 'index',
    'documentRoot' => '/var/www/html',
    'assetsRevision' => '220819180906',
    'assetsRevQueryUrl' => '_r=220819180906',
  ),
  'simple_urlengine_entrypoints' => 
  array (
    'index' => '@classic',
    'xmlrpc' => '@xmlrpc',
    'jsonrpc' => '@jsonrpc',
    'admin' => 'jacl2db~*@classic,jacl2db_admin~*@classic,jauthdb_admin~*@classic,master_admin~*@classic,admin~*@classic,jcommunity~*@classic',
  ),
  'basic_significant_urlengine_entrypoints' => 
  array (
    'index' => '1',
    'xmlrpc' => '1',
    'jsonrpc' => '1',
    'admin' => '1',
  ),
  'basic_significant_urlengine_aliases' => 
  array (
    'auth' => 'jcommunity',
  ),
  'logger' => 
  array (
    '_all' => '',
    'default' => 'file',
    'error' => 'file',
    'warning' => 'file',
    'notice' => 'file',
    'deprecated' => '',
    'strict' => 'file',
    'debug' => '',
    'sql' => '',
    'soap' => '',
    'metric' => 'syslog',
    'auth' => '',
  ),
  'fileLogger' => 
  array (
    'default' => 'messages.log',
    'error' => 'errors.log',
    'warning' => 'errors.log',
    'notice' => 'errors.log',
    'deprecated' => 'errors.log',
    'strict' => 'errors.log',
    'debug' => 'debug.log',
    'auth' => 'messages.log',
  ),
  'memorylogger' => 
  array (
    'default' => '20',
    'error' => '10',
    'warning' => '10',
    'notice' => '10',
    'deprecated' => '10',
    'strict' => '10',
    'debug' => '20',
    'sql' => '20',
    'soap' => '20',
  ),
  'mailLogger' => 
  array (
    'email' => 'root@localhost',
    'emailHeaders' => 'Content-Type: text/plain; charset=UTF-8\\nFrom: webmaster@yoursite.com\\nX-Mailer: Jelix\\nX-Priority: 1 (Highest)\\n',
  ),
  'syslogLogger' => 
  array (
    'facility' => '184',
    'ident' => 'php-%sapi%-%domain%[%pid%]',
  ),
  'stderrLogger' => 
  array (
  ),
  'stdoutLogger' => 
  array (
  ),
  'mailer' => 
  array (
    'webmasterEmail' => 'agu@pilgrim-technology.com',
    'webmasterName' => '',
    'mailerType' => 'mail',
    'hostname' => '',
    'sendmailPath' => '/usr/sbin/sendmail',
    'filesDir' => 'mails/',
    'smtpHost' => 'localhost',
    'smtpPort' => '25',
    'smtpSecure' => '',
    'smtpHelo' => '',
    'smtpAuth' => '',
    'smtpUsername' => '',
    'smtpPassword' => '',
    'smtpTimeout' => '10',
    'copyToFiles' => '',
    'debugModeEnabled' => '',
    'debugReceiversType' => '1',
    'debugReceivers' => '',
    'debugReceiversWhiteList' => '',
    'debugFrom' => '',
    'debugFromName' => '',
    'debugSubjectPrefix' => '',
    'debugBodyIntroduction' => '',
    'debugSmtpLevel' => '0',
  ),
  'acl' => 
  array (
    'driver' => '',
  ),
  'acl2' => 
  array (
    'driver' => 'db',
  ),
  'sessions' => 
  array (
    'start' => '1',
    'shared_session' => '',
    'cookieSecure' => '',
    'cookieHttpOnly' => '1',
    'cookieLifetime' => '0',
    'cookieSameSite' => '',
    'name' => '',
    'storage' => '',
    'loadClasses' => '',
    '_class_to_load' => 
    array (
    ),
  ),
  'forms' => 
  array (
    'controls.datetime.input' => 'menulists',
    'controls.time.input' => 'menulists',
    'controls.datetime.months.labels' => 'numbers',
    'datepicker' => 'default',
    'datetimepicker' => 'default',
    'timepicker' => '',
    'captcha' => 'simple',
    'captcha.simple.validator' => '\\jelix\\forms\\Captcha\\SimpleCaptchaValidator',
    'captcha.simple.widgettype' => 'captcha',
    'captcha.recaptcha.validator' => '\\jelix\\forms\\Captcha\\ReCaptchaValidator',
    'captcha.recaptcha.widgettype' => 'recaptcha',
    'flagPrepareObjectFromControlsContactArrayValues' => '0',
  ),
  'jforms_builder_html' => 
  array (
  ),
  'jquery' => 
  array (
    'jquery' => '/lizmap/assets/js/jquery/jquery-3.5.1.min.js',
    'jqueryui.js' => 
    array (
      0 => '/lizmap/assets/js/jquery/ui-1.12.1/jquery-ui.min.js',
    ),
    'jqueryui.css' => 
    array (
      0 => '/lizmap/assets/js/jquery/ui-1.12.1/jquery-ui.min.css',
    ),
  ),
  'datepickers' => 
  array (
    'default' => '/lizmap/assets/jelix/js/jforms/datepickers/default/init.js',
    'default.js' => 
    array (
      0 => '/lizmap/assets/js/jquery/ui-1.12.1/jquery-ui.min.js',
      1 => '/lizmap/assets/jelix/js/jforms/datepickers/default/ui.en.js',
      2 => '/lizmap/assets/jelix/jquery/ui/i18n/jquery.ui.datepicker-$lang.js',
      3 => '/lizmap/assets/jelix/js/jforms/datepickers/default/ui.$lang.js',
    ),
    'default.css' => 
    array (
      0 => '/lizmap/assets/js/jquery/ui-1.12.1/jquery-ui.min.css',
    ),
  ),
  'datetimepickers' => 
  array (
    'default' => '/lizmap/assets/jelix/js/jforms/datepickers/default/init.js',
    'default.js' => 
    array (
      0 => '/lizmap/assets/js/jquery/ui-1.12.1/jquery-ui.min.js',
      1 => '/lizmap/assets/jelix/js/jforms/datepickers/default/ui.en.js',
      2 => '/lizmap/assets/jelix/jquery/ui/i18n/jquery.ui.datepicker-$lang.js',
      3 => '/lizmap/assets/jelix/js/jforms/datepickers/default/ui.$lang.js',
    ),
    'default.css' => 
    array (
      0 => '/lizmap/assets/js/jquery/ui-1.12.1/jquery-ui.min.css',
    ),
  ),
  'timepickers' => 
  array (
  ),
  'htmleditors' => 
  array (
    'default.engine.name' => 'ckeditor',
    'default.engine.file' => 
    array (
      0 => '/lizmap/assets/js/ckeditor5/ckeditor.js',
      1 => '/lizmap/assets/js/ckeditor5/translations/$lang.js',
      2 => '/lizmap/assets/js/ckeditor5/translations/$lang.js',
      3 => '/lizmap/assets/js/ckeditor5/translations/$lang.js',
      4 => '/lizmap/assets/js/ckeditor5/translations/$lang.js',
    ),
    'default.config' => '/lizmap/assets/js/ckeditor5/ckeditor_lizmap.js',
    'default.skin.default' => '',
    'wymbasic.engine.name' => 'wymeditor',
    'wymbasic.engine.file' => 
    array (
      0 => '/lizmap/assets/jelix/jquery/jquery.js',
      1 => '/lizmap/assets/jelix/wymeditor/jquery.wymeditor.js',
    ),
    'wymbasic.config' => '/lizmap/assets/jelix/js/jforms/htmleditors/wymeditor_basic.js',
    'wymbasic.skin.default' => '/lizmap/assets/jelix/wymeditor/skins/default/skin.css',
    'ckdefault.engine.name' => 'ckeditor',
    'ckdefault.engine.file' => 
    array (
      0 => '/lizmap/assets/js/ckeditor5/ckeditor.js',
    ),
    'ckdefault.config' => '/lizmap/assets/js/ckeditor5/ckeditor_ckdefault.js',
    'ckfull.engine.name' => 'ckeditor',
    'ckfull.engine.file' => 
    array (
      0 => '/lizmap/assets/js/ckeditor5/ckeditor.js',
    ),
    'ckfull.config' => '/lizmap/assets/js/ckeditor5/ckeditor_ckfull.js',
    'ckbasic.engine.name' => 'ckeditor',
    'ckbasic.engine.file' => 
    array (
      0 => '/lizmap/assets/js/ckeditor5/ckeditor.js',
    ),
    'ckbasic.config' => '/lizmap/assets/js/ckeditor5/ckeditor_ckbasic.js',
    'ckfullandmedia.engine.name' => 'ckeditor',
    'ckfullandmedia.engine.file' => 
    array (
      0 => '/lizmap/assets/js/ckeditor5/ckeditor.js',
    ),
    'ckfullandmedia.config' => '/lizmap/assets/js/ckeditor5/ckeditor_ckfullandmedia.js',
  ),
  'wikieditors' => 
  array (
    'default.engine.name' => 'wr3',
    'default.wiki.rules' => 'wr3_to_xhtml',
    'default.engine.file' => '/lizmap/assets/jelix/markitup/jquery.markitup.js',
    'default.config.path' => '/lizmap/assets/jelix/markitup/sets/wr3/',
    'default.image.path' => '/lizmap/assets/jelix/markitup/sets/wr3/images/',
    'default.skin' => '/lizmap/assets/jelix/markitup/skins/simple/style.css',
  ),
  'zones' => 
  array (
    'disableCache' => '',
  ),
  'classbindings' => 
  array (
  ),
  'imagemodifier' => 
  array (
    'src_url' => '',
    'src_path' => '',
    'cache_url' => '',
    'cache_path' => '',
  ),
  'rootUrls' => 
  array (
    'jelix.cache' => 'cache/',
  ),
  'langToLocale' => 
  array (
    'cs' => 'cs_CZ',
    'de' => 'de_DE',
    'el' => 'el_GR',
    'en' => 'en_US',
    'es' => 'es_ES',
    'eu' => 'eu_ES',
    'fi' => 'fi_FI',
    'fr' => 'fr_FR',
    'gl' => 'gl_ES',
    'hu' => 'hu_HU',
    'it' => 'it_IT',
    'ja' => 'ja_JP',
    'nl' => 'nl_NL',
    'pl' => 'pl_PL',
    'pt' => 'pt_BR',
    'ro' => 'ro_RO',
    'ru' => 'ru_RU',
    'sl' => 'sl_SI',
    'sv' => 'sv_SE',
    'sk' => 'sk_SK',
    'uk' => 'uk_UA',
  ),
  'disabledListeners' => 
  array (
  ),
  'coordplugin_auth' => 
  array (
    'persistant_crypt_key' => 'EfSGBw67woCMB5a7Wy0q3LsEae8UAd',
  ),
  'recaptcha' => 
  array (
    'sitekey' => '',
    'secret' => '',
    'theme' => '',
    'type' => '',
    'size' => '',
    'tabindex' => '',
  ),
  'coordplugin_jacl2' => 
  array (
    'on_error' => '2',
    'error_message' => 'jelix~errors.acl.action.right.needed',
    'on_error_action' => 'jcommunity~login:index',
  ),
  'coordplugin_autolocale' => 
  array (
    'enableUrlDetection' => '1',
    'urlParamNameLanguage' => 'lang',
    'useDefaultLanguageBrowser' => '1',
  ),
  'jcommunity' => 
  array (
    'loginResponse' => 'htmlauth',
    'registrationEnabled' => '',
    'resetPasswordEnabled' => '1',
    'resetAdminPasswordEnabled' => '1',
    'verifyNickname' => '',
    'useJAuthDbAdminRights' => '1',
  ),
  'saml:sp' => 
  array (
    'daoPropertiesForMapping' => 'login,email,firstname,lastname,phonenumber',
  ),
  'pgsqlSchemaTimeout' => 
  array (
    'cadastre' => '31',
    'adresse' => '32',
    'openads' => '33',
  ),
  'isWindows' => false,
  '_allBasePath' => 
  array (
    0 => '/var/www/lizmap-web-client-3.5.5/lib/jelix-admin-modules/',
    1 => '/var/www/lizmap-web-client-3.5.5/lib/jelix-modules/',
    2 => '/var/www/lizmap-web-client-3.5.5/lizmap/modules/',
    3 => '/var/www/lizmap-web-client-3.5.5/lizmap/lizmap-modules/',
    4 => '/var/www/lizmap-web-client-3.5.5/lizmap/vendor/jelix/jcommunity-module/modules/',
    5 => '/var/www/lizmap-web-client-3.5.5/lizmap/plugins/formbuilder/',
    6 => '/var/www/lizmap-web-client-3.5.5/lizmap/plugins/configcompiler/',
    7 => '/var/www/lizmap-web-client-3.5.5/lizmap/plugins/coord/',
    8 => '/var/www/lizmap-web-client-3.5.5/lizmap/plugins/db/',
    9 => '/var/www/lizmap-web-client-3.5.5/lizmap/plugins/auth/',
    10 => '/var/www/lizmap-web-client-3.5.5/lizmap/plugins/formwidget/',
    11 => '/var/www/lizmap-web-client-3.5.5/lizmap/plugins/tpl/',
    12 => '/var/www/lizmap-web-client-3.5.5/lib/jelix-plugins/kvdb/',
    13 => '/var/www/lizmap-web-client-3.5.5/lib/jelix-plugins/cache/',
    14 => '/var/www/lizmap-web-client-3.5.5/lib/jelix-modules/jacl2db//plugins/acl2/',
    15 => '/var/www/lizmap-web-client-3.5.5/lib/jelix-modules/jacl2//plugins/coord/',
    16 => '/var/www/lizmap-web-client-3.5.5/lib/jelix-modules/jacl2//plugins/tpl/',
  ),
  '_modulesPathList' => 
  array (
    'jauthdb_admin' => '/var/www/lizmap-web-client-3.5.5/lib/jelix-admin-modules/jauthdb_admin/',
    'jacl2db_admin' => '/var/www/lizmap-web-client-3.5.5/lib/jelix-admin-modules/jacl2db_admin/',
    'master_admin' => '/var/www/lizmap-web-client-3.5.5/lib/jelix-admin-modules/master_admin/',
    'jacl2' => '/var/www/lizmap-web-client-3.5.5/lib/jelix-modules/jacl2/',
    'jacl2db' => '/var/www/lizmap-web-client-3.5.5/lib/jelix-modules/jacl2db/',
    'view' => '/var/www/lizmap-web-client-3.5.5/lizmap/modules/view/',
    'proj4php' => '/var/www/lizmap-web-client-3.5.5/lizmap/modules/proj4php/',
    'filter' => '/var/www/lizmap-web-client-3.5.5/lizmap/modules/filter/',
    'dynamicLayers' => '/var/www/lizmap-web-client-3.5.5/lizmap/modules/dynamicLayers/',
    'dataviz' => '/var/www/lizmap-web-client-3.5.5/lizmap/modules/dataviz/',
    'admin' => '/var/www/lizmap-web-client-3.5.5/lizmap/modules/admin/',
    'action' => '/var/www/lizmap-web-client-3.5.5/lizmap/modules/action/',
    'lizmap' => '/var/www/lizmap-web-client-3.5.5/lizmap/modules/lizmap/',
    'jcommunity' => '/var/www/lizmap-web-client-3.5.5/lizmap/vendor/jelix/jcommunity-module/modules/jcommunity/',
    'jelix' => '/var/www/lizmap-web-client-3.5.5/lib/jelix/core-modules/jelix/',
  ),
  '_pluginsPathList_formbuilder' => 
  array (
    'html' => '/var/www/lizmap-web-client-3.5.5/lib/jelix/plugins/formbuilder/html/',
    'htmlbootstrap' => '/var/www/lizmap-web-client-3.5.5/lizmap/plugins/formbuilder/htmlbootstrap/',
  ),
  '_pluginsPathList_configcompiler' => 
  array (
    'locales' => '/var/www/lizmap-web-client-3.5.5/lib/jelix/plugins/configcompiler/locales/',
    'nsautoloader' => '/var/www/lizmap-web-client-3.5.5/lib/jelix/plugins/configcompiler/nsautoloader/',
    'jquery' => '/var/www/lizmap-web-client-3.5.5/lib/jelix/plugins/configcompiler/jquery/',
    'responses' => '/var/www/lizmap-web-client-3.5.5/lib/jelix/plugins/configcompiler/responses/',
    'session' => '/var/www/lizmap-web-client-3.5.5/lib/jelix/plugins/configcompiler/session/',
    'debugbar' => '/var/www/lizmap-web-client-3.5.5/lib/jelix/plugins/configcompiler/debugbar/',
    'lizmapconfig' => '/var/www/lizmap-web-client-3.5.5/lizmap/plugins/configcompiler/lizmapconfig/',
  ),
  '_pluginsPathList_coord' => 
  array (
    'traceexec' => '/var/www/lizmap-web-client-3.5.5/lib/jelix/plugins/coord/traceexec/',
    'auth' => '/var/www/lizmap-web-client-3.5.5/lib/jelix/plugins/coord/auth/',
    'history' => '/var/www/lizmap-web-client-3.5.5/lib/jelix/plugins/coord/history/',
    'autolocale' => '/var/www/lizmap-web-client-3.5.5/lib/jelix/plugins/coord/autolocale/',
    'zendframework' => '/var/www/lizmap-web-client-3.5.5/lib/jelix/plugins/coord/zendframework/',
    'lizmap' => '/var/www/lizmap-web-client-3.5.5/lizmap/plugins/coord/lizmap/',
    'jacl2' => '/var/www/lizmap-web-client-3.5.5/lib/jelix-modules/jacl2//plugins/coord/jacl2/',
  ),
  '_pluginsPathList_jforms' => 
  array (
    'htmllight' => '/var/www/lizmap-web-client-3.5.5/lib/jelix/plugins/jforms/htmllight/',
    'html' => '/var/www/lizmap-web-client-3.5.5/lib/jelix/plugins/jforms/html/',
  ),
  '_pluginsPathList_urls' => 
  array (
    'basic_significant' => '/var/www/lizmap-web-client-3.5.5/lib/jelix/plugins/urls/basic_significant/',
    'simple' => '/var/www/lizmap-web-client-3.5.5/lib/jelix/plugins/urls/simple/',
    'significant' => '/var/www/lizmap-web-client-3.5.5/lib/jelix/plugins/urls/significant/',
  ),
  '_pluginsPathList_db' => 
  array (
    'pgsql' => '/var/www/lizmap-web-client-3.5.5/lib/jelix/plugins/db/pgsql/',
    'mssql' => '/var/www/lizmap-web-client-3.5.5/lib/jelix/plugins/db/mssql/',
    'sqlite3' => '/var/www/lizmap-web-client-3.5.5/lib/jelix/plugins/db/sqlite3/',
    'mysqli' => '/var/www/lizmap-web-client-3.5.5/lib/jelix/plugins/db/mysqli/',
    'sqlite' => '/var/www/lizmap-web-client-3.5.5/lib/jelix/plugins/db/sqlite/',
    'oci' => '/var/www/lizmap-web-client-3.5.5/lib/jelix/plugins/db/oci/',
    'mysql' => '/var/www/lizmap-web-client-3.5.5/lib/jelix/plugins/db/mysql/',
    'sqlsrv' => '/var/www/lizmap-web-client-3.5.5/lib/jelix/plugins/db/sqlsrv/',
  ),
  '_pluginsPathList_auth' => 
  array (
    'db' => '/var/www/lizmap-web-client-3.5.5/lib/jelix/plugins/auth/db/',
    'lds' => '/var/www/lizmap-web-client-3.5.5/lib/jelix/plugins/auth/lds/',
    'class' => '/var/www/lizmap-web-client-3.5.5/lib/jelix/plugins/auth/class/',
    'ldap' => '/var/www/lizmap-web-client-3.5.5/lib/jelix/plugins/auth/ldap/',
  ),
  '_pluginsPathList_formwidget' => 
  array (
    'secret_html' => '/var/www/lizmap-web-client-3.5.5/lib/jelix/plugins/formwidget/secret_html/',
    'button_html' => '/var/www/lizmap-web-client-3.5.5/lib/jelix/plugins/formwidget/button_html/',
    'time_html' => '/var/www/lizmap-web-client-3.5.5/lib/jelix/plugins/formwidget/time_html/',
    'input_html' => '/var/www/lizmap-web-client-3.5.5/lib/jelix/plugins/formwidget/input_html/',
    'recaptcha_html' => '/var/www/lizmap-web-client-3.5.5/lib/jelix/plugins/formwidget/recaptcha_html/',
    'menulist_html' => '/var/www/lizmap-web-client-3.5.5/lib/jelix/plugins/formwidget/menulist_html/',
    'radiobuttons_html' => '/var/www/lizmap-web-client-3.5.5/lib/jelix/plugins/formwidget/radiobuttons_html/',
    'submit_html' => '/var/www/lizmap-web-client-3.5.5/lib/jelix/plugins/formwidget/submit_html/',
    'upload2_html' => '/var/www/lizmap-web-client-3.5.5/lib/jelix/plugins/formwidget/upload2_html/',
    'imageupload_html' => '/var/www/lizmap-web-client-3.5.5/lib/jelix/plugins/formwidget/imageupload_html/',
    'date_html' => '/var/www/lizmap-web-client-3.5.5/lib/jelix/plugins/formwidget/date_html/',
    'autocomplete_html' => '/var/www/lizmap-web-client-3.5.5/lib/jelix/plugins/formwidget/autocomplete_html/',
    'wikieditor_html' => '/var/www/lizmap-web-client-3.5.5/lib/jelix/plugins/formwidget/wikieditor_html/',
    'datetime_html' => '/var/www/lizmap-web-client-3.5.5/lib/jelix/plugins/formwidget/datetime_html/',
    'autocompleteajax_html' => '/var/www/lizmap-web-client-3.5.5/lib/jelix/plugins/formwidget/autocompleteajax_html/',
    'output_html' => '/var/www/lizmap-web-client-3.5.5/lib/jelix/plugins/formwidget/output_html/',
    'group_html' => '/var/www/lizmap-web-client-3.5.5/lib/jelix/plugins/formwidget/group_html/',
    'textarea_html' => '/var/www/lizmap-web-client-3.5.5/lib/jelix/plugins/formwidget/textarea_html/',
    'choice_html' => '/var/www/lizmap-web-client-3.5.5/lib/jelix/plugins/formwidget/choice_html/',
    'html' => '/var/www/lizmap-web-client-3.5.5/lib/jelix/plugins/formwidget/html/',
    'listbox_html' => '/var/www/lizmap-web-client-3.5.5/lib/jelix/plugins/formwidget/listbox_html/',
    'captcha_html' => '/var/www/lizmap-web-client-3.5.5/lib/jelix/plugins/formwidget/captcha_html/',
    'secretconfirm_html' => '/var/www/lizmap-web-client-3.5.5/lib/jelix/plugins/formwidget/secretconfirm_html/',
    'upload_html' => '/var/www/lizmap-web-client-3.5.5/lib/jelix/plugins/formwidget/upload_html/',
    'checkbox_html' => '/var/www/lizmap-web-client-3.5.5/lib/jelix/plugins/formwidget/checkbox_html/',
    'htmleditor_html' => '/var/www/lizmap-web-client-3.5.5/lib/jelix/plugins/formwidget/htmleditor_html/',
    'color_html' => '/var/www/lizmap-web-client-3.5.5/lib/jelix/plugins/formwidget/color_html/',
    'checkboxes_html' => '/var/www/lizmap-web-client-3.5.5/lib/jelix/plugins/formwidget/checkboxes_html/',
    'reset_html' => '/var/www/lizmap-web-client-3.5.5/lib/jelix/plugins/formwidget/reset_html/',
    'captcha_htmlbootstrap' => '/var/www/lizmap-web-client-3.5.5/lizmap/plugins/formwidget/captcha_htmlbootstrap/',
    'upload_htmlbootstrap' => '/var/www/lizmap-web-client-3.5.5/lizmap/plugins/formwidget/upload_htmlbootstrap/',
    'reset_htmlbootstrap' => '/var/www/lizmap-web-client-3.5.5/lizmap/plugins/formwidget/reset_htmlbootstrap/',
    'recaptcha_htmlbootstrap' => '/var/www/lizmap-web-client-3.5.5/lizmap/plugins/formwidget/recaptcha_htmlbootstrap/',
    'radiobuttons_htmlbootstrap' => '/var/www/lizmap-web-client-3.5.5/lizmap/plugins/formwidget/radiobuttons_htmlbootstrap/',
    'date_htmlbootstrap' => '/var/www/lizmap-web-client-3.5.5/lizmap/plugins/formwidget/date_htmlbootstrap/',
    'htmlbootstrap' => '/var/www/lizmap-web-client-3.5.5/lizmap/plugins/formwidget/htmlbootstrap/',
    'listbox_htmlbootstrap' => '/var/www/lizmap-web-client-3.5.5/lizmap/plugins/formwidget/listbox_htmlbootstrap/',
    'textarea_htmlbootstrap' => '/var/www/lizmap-web-client-3.5.5/lizmap/plugins/formwidget/textarea_htmlbootstrap/',
    'htmleditor_htmlbootstrap' => '/var/www/lizmap-web-client-3.5.5/lizmap/plugins/formwidget/htmleditor_htmlbootstrap/',
    'input_htmlbootstrap' => '/var/www/lizmap-web-client-3.5.5/lizmap/plugins/formwidget/input_htmlbootstrap/',
    'menulist_htmlbootstrap' => '/var/www/lizmap-web-client-3.5.5/lizmap/plugins/formwidget/menulist_htmlbootstrap/',
    'output_htmlbootstrap' => '/var/www/lizmap-web-client-3.5.5/lizmap/plugins/formwidget/output_htmlbootstrap/',
    'submit_htmlbootstrap' => '/var/www/lizmap-web-client-3.5.5/lizmap/plugins/formwidget/submit_htmlbootstrap/',
    'checkbox_htmlbootstrap' => '/var/www/lizmap-web-client-3.5.5/lizmap/plugins/formwidget/checkbox_htmlbootstrap/',
    'upload2_htmlbootstrap' => '/var/www/lizmap-web-client-3.5.5/lizmap/plugins/formwidget/upload2_htmlbootstrap/',
    'datetime_htmlbootstrap' => '/var/www/lizmap-web-client-3.5.5/lizmap/plugins/formwidget/datetime_htmlbootstrap/',
    'wikieditor_htmlbootstrap' => '/var/www/lizmap-web-client-3.5.5/lizmap/plugins/formwidget/wikieditor_htmlbootstrap/',
    'group_htmlbootstrap' => '/var/www/lizmap-web-client-3.5.5/lizmap/plugins/formwidget/group_htmlbootstrap/',
    'checkboxes_htmlbootstrap' => '/var/www/lizmap-web-client-3.5.5/lizmap/plugins/formwidget/checkboxes_htmlbootstrap/',
    'choice_htmlbootstrap' => '/var/www/lizmap-web-client-3.5.5/lizmap/plugins/formwidget/choice_htmlbootstrap/',
    'imageupload_htmlbootstrap' => '/var/www/lizmap-web-client-3.5.5/lizmap/plugins/formwidget/imageupload_htmlbootstrap/',
    'secret_htmlbootstrap' => '/var/www/lizmap-web-client-3.5.5/lizmap/plugins/formwidget/secret_htmlbootstrap/',
    'button_htmlbootstrap' => '/var/www/lizmap-web-client-3.5.5/lizmap/plugins/formwidget/button_htmlbootstrap/',
    'secretconfirm_htmlbootstrap' => '/var/www/lizmap-web-client-3.5.5/lizmap/plugins/formwidget/secretconfirm_htmlbootstrap/',
  ),
  '_pluginsPathList_kvdb' => 
  array (
    'redis_php' => '/var/www/lizmap-web-client-3.5.5/lib/jelix/plugins/kvdb/redis_php/',
    'file2' => '/var/www/lizmap-web-client-3.5.5/lib/jelix/plugins/kvdb/file2/',
    'memcache' => '/var/www/lizmap-web-client-3.5.5/lib/jelix/plugins/kvdb/memcache/',
    'db' => '/var/www/lizmap-web-client-3.5.5/lib/jelix/plugins/kvdb/db/',
    'redis_ext' => '/var/www/lizmap-web-client-3.5.5/lib/jelix/plugins/kvdb/redis_ext/',
    'dba' => '/var/www/lizmap-web-client-3.5.5/lib/jelix/plugins/kvdb/dba/',
    'file' => '/var/www/lizmap-web-client-3.5.5/lib/jelix-plugins/kvdb/file/',
  ),
  '_pluginsPathList_logger' => 
  array (
    'legacysyslog' => '/var/www/lizmap-web-client-3.5.5/lib/jelix/plugins/logger/legacysyslog/',
    'firebug' => '/var/www/lizmap-web-client-3.5.5/lib/jelix/plugins/logger/firebug/',
    'soapfile' => '/var/www/lizmap-web-client-3.5.5/lib/jelix/plugins/logger/soapfile/',
  ),
  '_pluginsPathList_debugbar' => 
  array (
    'sessiondata' => '/var/www/lizmap-web-client-3.5.5/lib/jelix/plugins/debugbar/sessiondata/',
    'defaultlog' => '/var/www/lizmap-web-client-3.5.5/lib/jelix/plugins/debugbar/defaultlog/',
    'sqllog' => '/var/www/lizmap-web-client-3.5.5/lib/jelix/plugins/debugbar/sqllog/',
    'soaplog' => '/var/www/lizmap-web-client-3.5.5/lib/jelix/plugins/debugbar/soaplog/',
  ),
  '_pluginsPathList_htmlresponse' => 
  array (
    'minify' => '/var/www/lizmap-web-client-3.5.5/lib/jelix/plugins/htmlresponse/minify/',
    'debugbar' => '/var/www/lizmap-web-client-3.5.5/lib/jelix/plugins/htmlresponse/debugbar/',
  ),
  '_pluginsPathList_cache' => 
  array (
    'redis_php' => '/var/www/lizmap-web-client-3.5.5/lib/jelix/plugins/cache/redis_php/',
    'memcache' => '/var/www/lizmap-web-client-3.5.5/lib/jelix/plugins/cache/memcache/',
    'db' => '/var/www/lizmap-web-client-3.5.5/lib/jelix/plugins/cache/db/',
    'redis_ext' => '/var/www/lizmap-web-client-3.5.5/lib/jelix/plugins/cache/redis_ext/',
    'memcache22' => '/var/www/lizmap-web-client-3.5.5/lib/jelix/plugins/cache/memcache22/',
    'file' => '/var/www/lizmap-web-client-3.5.5/lib/jelix-plugins/cache/file/',
  ),
  '_tplpluginsPathList_ltx2pdf' => 
  array (
    0 => '/var/www/lizmap-web-client-3.5.5/lib/jelix/plugins/tpl/ltx2pdf/',
  ),
  '_tplpluginsPathList_xml' => 
  array (
    0 => '/var/www/lizmap-web-client-3.5.5/lib/jelix/plugins/tpl/xml/',
  ),
  '_tplpluginsPathList_html' => 
  array (
    0 => '/var/www/lizmap-web-client-3.5.5/lizmap/plugins/tpl/html/',
    1 => '/var/www/lizmap-web-client-3.5.5/lib/jelix/plugins/tpl/html/',
  ),
  '_tplpluginsPathList_text' => 
  array (
    0 => '/var/www/lizmap-web-client-3.5.5/lizmap/plugins/tpl/text/',
    1 => '/var/www/lizmap-web-client-3.5.5/lib/jelix/plugins/tpl/text/',
  ),
  '_tplpluginsPathList_common' => 
  array (
    0 => '/var/www/lizmap-web-client-3.5.5/lib/jelix-modules/jacl2//plugins/tpl/common/',
    1 => '/var/www/lizmap-web-client-3.5.5/lizmap/plugins/tpl/common/',
    2 => '/var/www/lizmap-web-client-3.5.5/lib/jelix/plugins/tpl/common/',
  ),
  '_pluginsPathList_acl2' => 
  array (
    'db' => '/var/www/lizmap-web-client-3.5.5/lib/jelix-modules/jacl2db//plugins/acl2/db/',
    'dbcache' => '/var/www/lizmap-web-client-3.5.5/lib/jelix-modules/jacl2db//plugins/acl2/dbcache/',
  ),
  '_autoload_class' => 
  array (
    'jAcl2' => '/var/www/lizmap-web-client-3.5.5/lib/jelix-modules/jacl2/classes/jAcl2.class.php',
    'jIAcl2Driver' => '/var/www/lizmap-web-client-3.5.5/lib/jelix-modules/jacl2/classes/jIAcl2Driver.iface.php',
    'jIAcl2Driver2' => '/var/www/lizmap-web-client-3.5.5/lib/jelix-modules/jacl2/classes/jIAcl2Driver2.iface.php',
    'lizmapMainViewItem' => '/var/www/lizmap-web-client-3.5.5/lizmap/modules/view/classes/lizmapMainViewItem.class.php',
    'lizmapMapDockItem' => '/var/www/lizmap-web-client-3.5.5/lizmap/modules/view/classes/lizmapMapDockItem.class.php',
    'lizmap' => '/var/www/lizmap-web-client-3.5.5/lizmap/modules/lizmap/classes/lizmap.class.php',
    'lizmapLogItem' => '/var/www/lizmap-web-client-3.5.5/lizmap/modules/lizmap/classes/lizmapLogItem.class.php',
    'lizmapLogConfig' => '/var/www/lizmap-web-client-3.5.5/lizmap/modules/lizmap/classes/lizmapLogConfig.class.php',
    'qgisServer' => '/var/www/lizmap-web-client-3.5.5/lizmap/modules/lizmap/classes/qgisServer.class.php',
    'lizmapProject' => '/var/www/lizmap-web-client-3.5.5/lizmap/modules/lizmap/classes/lizmapProject.class.php',
    'lizmapRepository' => '/var/www/lizmap-web-client-3.5.5/lizmap/modules/lizmap/classes/lizmapRepository.class.php',
    'lizmapTiler' => '/var/www/lizmap-web-client-3.5.5/lizmap/modules/lizmap/classes/lizmapTiler.class.php',
    'lizmapWkt' => '/var/www/lizmap-web-client-3.5.5/lizmap/modules/lizmap/classes/lizmapWkt.class.php',
    'qgisMapLayer' => '/var/www/lizmap-web-client-3.5.5/lizmap/modules/lizmap/classes/qgisMapLayer.class.php',
    'qgisVectorLayerDatasource' => '/var/www/lizmap-web-client-3.5.5/lizmap/modules/lizmap/classes/qgisVectorLayerDatasource.class.php',
    'qgisVectorLayer' => '/var/www/lizmap-web-client-3.5.5/lizmap/modules/lizmap/classes/qgisVectorLayer.class.php',
    'qgisAttributeEditorElement' => '/var/www/lizmap-web-client-3.5.5/lizmap/modules/lizmap/classes/qgisAttributeEditorElement.class.php',
    'qgisLayerDbFieldsInfo' => '/var/www/lizmap-web-client-3.5.5/lizmap/modules/lizmap/classes/qgisLayerDbFieldsInfo.class.php',
    'lizmapServices' => '/var/www/lizmap-web-client-3.5.5/lizmap/modules/lizmap/classes/lizmapServices.class.php',
    'qgisExpressionUtils' => '/var/www/lizmap-web-client-3.5.5/lizmap/modules/lizmap/classes/qgisExpressionUtils.class.php',
    'lizmapProxy' => '/var/www/lizmap-web-client-3.5.5/lizmap/modules/lizmap/classes/lizmapProxy.class.php',
    'lizmapOGCRequest' => '/var/www/lizmap-web-client-3.5.5/lizmap/modules/lizmap/classes/lizmapOGCRequest.class.php',
  ),
  '_autoload_namespace' => 
  array (
  ),
  '_autoload_classpattern' => 
  array (
    'regexp' => 
    array (
      0 => '/^jAcl2Db/',
    ),
    'path' => 
    array (
      0 => '/var/www/lizmap-web-client-3.5.5/lib/jelix-modules/jacl2db/classes/|.class.php',
    ),
  ),
  '_autoload_includepathmap' => 
  array (
  ),
  '_autoload_includepath' => 
  array (
  ),
  '_autoload_namespacepathmap' => 
  array (
    'Lizmap' => '/var/www/lizmap-web-client-3.5.5/lizmap/modules/lizmap/lib|.php',
    'Jelix\\JCommunity' => '/var/www/lizmap-web-client-3.5.5/lizmap/vendor/jelix/jcommunity-module/modules/jcommunity/lib|.php',
    'PhpRedis' => '/var/www/lizmap-web-client-3.5.5/lib/jelix/core-modules/jelix/../../../php5redis/lib|.php',
  ),
  '_autoload_autoloader' => 
  array (
  ),
);
?>