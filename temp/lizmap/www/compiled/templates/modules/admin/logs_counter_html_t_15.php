<?php 
if (jApp::config()->compilation['checkCacheFiletime'] &&
filemtime('/var/www/lizmap-web-client-3.5.5/lizmap/modules/admin/templates/logs_counter.tpl') > 1616160726){ return false;
} else {
 require_once('/var/www/lizmap-web-client-3.5.5/lizmap/plugins/tpl/html/function.jmessage_bootstrap.php');
 require_once('/var/www/lizmap-web-client-3.5.5/lib/jelix/plugins/tpl/html/function.jurl.php');
function template_meta_b582ba07e125e7c630f7ed97a81a322a($t){

}
function template_b582ba07e125e7c630f7ed97a81a322a($t){
?><?php jtpl_function_html_jmessage_bootstrap( $t);?>

  <div>
    <h2><?php echo jLocale::get('admin~admin.logs.counter.title'); ?></h2>
    
    <table class="table table-bordered table-striped">
      <thead>
        <tr>
          <th><?php echo jLocale::get('admin~admin.logs.key'); ?></th>
          <th><?php echo jLocale::get('admin~admin.logs.repository'); ?></th>
          <th><?php echo jLocale::get('admin~admin.logs.project'); ?></th>
          <th><?php echo jLocale::get('admin~admin.logs.counter'); ?></th>
        </tr>
      </thead>
      <tbody>
        <?php foreach($t->_vars['counter'] as $t->_vars['item']):?>

        <tr>
          <td><?php echo $t->_vars['item']->key; ?></td>
          <td><?php echo $t->_vars['item']->repository; ?></td>
          <td><?php echo $t->_vars['item']->project; ?></td>
          <td><?php echo $t->_vars['item']->counter; ?></td>
        </tr>
        <?php endforeach;?>

      </tbody>
    </table>
  </div>

  <div class="form-actions">
    <a class="btn" href="<?php jtpl_function_html_jurl( $t,'admin~logs:index');?>"><?php echo jLocale::get('admin~admin.configuration.button.back.label'); ?></a>
  </div>
<?php 
}
return true;}
