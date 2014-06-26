<?php

define('DRUPAL_ROOT', '/home/maharaja/public_html/');
require_once DRUPAL_ROOT . '/includes/bootstrap.inc';
drupal_bootstrap(DRUPAL_BOOTSTRAP_FULL);

$d = $_GET['d'];
$sql = "SELECT n.nid,n.title,b.body_value, cn.field_contact_number_value, cp.field_contact_person_value FROM "
        . "{node} n, {field_data_field_state_city} s,  {field_revision_body} b, {field_data_field_contact_number} cn, {field_data_field_contact_person} cp "
        . "where s.field_state_city_tid=$d and n.nid=b.entity_id and n.nid=cn.entity_id  and n.nid=cp.entity_id and n.nid=s.entity_id and b.bundle='store_locator'";
$result = db_query($sql);
foreach ($result as $item) {
    echo '<li class="testRow" id="' . $item->nid . '"><span>' . $item->title . '</span><span>' . $item->body_value . '</span><span>' . $item->field_contact_number_value . '</span><span>' . $item->field_contact_person_value . '</span></li>';
}
?>