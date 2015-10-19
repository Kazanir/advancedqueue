<?php

if (!is_dir($_SERVER['X_DRUPAL_ROOT'])) {

}

define("DRUPAL_ROOT", $_SERVER['X_DRUPAL_ROOT']);

require_once DRUPAL_ROOT . '/includes/bootstrap.inc';
drupal_bootstrap(DRUPAL_BOOTSTRAP_FULL);

advancedqueue_process_fastcgi_item();
