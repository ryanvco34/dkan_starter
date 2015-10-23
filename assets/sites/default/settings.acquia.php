<?php
/**
 * Acquia Settings.
 */

if (isset($_ENV['AH_SITE_ENVIRONMENT'])) {
  /**
   * Acquia specific config per environment
   */
  switch(ENVIRONMENT) {
    case 'development':
    case 'test':
    case 'production':
      $conf['features_master_temp_enabled_modules'] = array_merge(
        $conf['features_master_temp_enabled_modules'],
        array(
          'dkan_acquia_expire',
          'dkan_acquia_search_solr'
        )
      );
      break;
  }
  // Set 2 session cookies, one secure and one not.
  $conf['https'] = FALSE;
  // Enable https redirection.
  $conf['securepages_enable'] = FALSE;
  $sitegroup = getenv('AH_SITE_GROUP');
  $env = getenv(['AH_SITE_ENVIRONMENT']);
  switch ($env) {
    case 'dev':
    case 'test':
      $env = $env == 'test' ? 'stg': $env;
      $conf['securepages_basepath'] = 'http://$sitegroup.$env.prod.acquia-sites.com';
      $conf['securepages_basepath_ssl'] = 'https://$sitegroup.$env.prod.acquia-sites.com';
      break;
    case 'prod':
      $conf['securepages_basepath'] = 'http://$sitegroup.prod.acquia-sites.com';
      $conf['securepages_basepath_ssl'] = 'https://$sitegroup.prod.acquia-sites.com';
      break;
  }

  // New relic settings per enviroment.
  if (extension_loaded('newrelic')) {
    switch ($env) {
      case 'dev':
      case 'test':
      case 'prod':
        $app_name = '$sitegroup.$env';
        newrelic_set_appname($app_name, '', 'true');
        break;
    }
  }  
}
