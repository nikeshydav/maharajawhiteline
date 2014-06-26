<?php

define('DRUPAL_ROOT', '/home/maharaja/public_html/');
require_once DRUPAL_ROOT . '/includes/bootstrap.inc';
drupal_bootstrap(DRUPAL_BOOTSTRAP_FULL);

$d = $_GET['d'];
$sql = "SELECT d.tid, d.name, h.parent FROM {taxonomy_term_data} d join {taxonomy_term_hierarchy} h on d.tid=h.tid where h.parent=$d order by d.name";
$result = db_query($sql);
foreach ($result as $item) {
    echo '<option value="' . $item->tid . '">' . $item->name . '</option>';
}
?>