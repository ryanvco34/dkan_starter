<?php
/**
 * Custom settings.
 */

/**
 * Custom specific config per environment
 */

switch(ENVIRONMENT) {
  case 'development':
  case 'test':
  case 'production':
    break;
}

/******************************************************
 * OPTIONAL: Perform tasks when switching environments.
 *****************************************************/
/* For environment switching to work, ensure environment.module is enabled and
 * use either hook_environment_switch() in a custom module, or simply define
 * devinci_custom_environment_switch() in settings.php as shown below.
 */
function devinci_custom_environment_switch($target_env, $current_env) {
  switch($target_env) {
    case 'local':
    case 'development':
    case 'test':
    case 'production':
      break;
  }
}
