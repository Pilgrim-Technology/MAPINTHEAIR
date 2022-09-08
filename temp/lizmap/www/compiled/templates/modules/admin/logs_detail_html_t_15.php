<?php 
if (jApp::config()->compilation['checkCacheFiletime'] &&
filemtime('/var/www/lizmap-web-client-3.5.5/lizmap/modules/admin/templates/logs_detail.tpl') > 1616160726){ return false;
} else {
 require_once('/var/www/lizmap-web-client-3.5.5/lib/jelix/plugins/tpl/common/modifier.jdatetime.php');
 require_once('/var/www/lizmap-web-client-3.5.5/lib/jelix/plugins/tpl/html/function.jurl.php');
function template_meta_8ab4e04e59428b1cc6b1c17bfa4ca7c6($t){

}
function template_8ab4e04e59428b1cc6b1c17bfa4ca7c6($t){
?>  <div>
    <h2><?php echo jLocale::get('admin~admin.logs.detail.title'); ?></h2>

    <table class="table table-bordered table-striped">
      <thead>
        <tr>
          <th><?php echo jLocale::get('admin~admin.logs.key'); ?></th>
          <th><?php echo jLocale::get('admin~admin.logs.timestamp'); ?></th>
          <th><?php echo jLocale::get('admin~admin.logs.user'); ?></th>
          <th><?php echo jLocale::get('admin~admin.logs.content'); ?></th>
          <th><?php echo jLocale::get('admin~admin.logs.repository'); ?></th>
          <th><?php echo jLocale::get('admin~admin.logs.project'); ?></th>
          <th><?php echo jLocale::get('admin~admin.logs.ip'); ?></th>
        </tr>
      </thead>
      <tbody>
        <?php foreach($t->_vars['detail'] as $t->_vars['item']):?>

        <tr>
          <td><?php echo $t->_vars['item']->key; ?></td>
          <td><?php echo jtpl_modifier_common_jdatetime($t->_vars['item']->timestamp,'db_datetime','lang_datetime'); ?></td>
          <td><?php echo $t->_vars['item']->user; ?></td>
          <td><?php echo $t->_vars['item']->content; ?></td>
          <td><?php echo $t->_vars['item']->repository; ?></td>
          <td><?php echo $t->_vars['item']->project; ?></td>
          <td><?php echo $t->_vars['item']->ip; ?></td>
        </tr>
        <?php endforeach;?>

      </tbody>
    </table>
    
  </div>
  
  <div class="pagination">
    <ul>
      <li><a href="<?php jtpl_function_html_jurl( $t,'admin~logs:detail', array('page'=>1));?>"><?php echo jLocale::get('admin~admin.logs.first_page'); ?></a></li>
      <li><a href="<?php jtpl_function_html_jurl( $t,'admin~logs:detail', array('page'=>$t->_vars['page']-1));?>"><?php echo jLocale::get('admin~admin.logs.previous_page'); ?></a></li>
      <li><a href="<?php jtpl_function_html_jurl( $t,'admin~logs:detail', array('page'=>$t->_vars['page']+1));?>"><?php echo jLocale::get('admin~admin.logs.next_page'); ?></a></li>
    </ul>
  </div>  
  
  <div class="form-actions">
    <a class="btn" href="<?php jtpl_function_html_jurl( $t,'admin~logs:index');?>"><?php echo jLocale::get('admin~admin.configuration.button.back.label'); ?></a>
  </div>  

<?php 
}
return true;}
