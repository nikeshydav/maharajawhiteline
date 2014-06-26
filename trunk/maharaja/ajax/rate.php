<?php

define('DRUPAL_ROOT', '/home/maharaja/public_html/');
require_once DRUPAL_ROOT . '/includes/bootstrap.inc';
drupal_bootstrap(DRUPAL_BOOTSTRAP_FULL);

$rid = $_SESSION['rid'];
if ($_COOKIE['voted'] == $rid) {
    echo 'You have already voted for this recipe!';
} else {
    $d = $_GET['d'];
    $nid = db_insert('rate')->fields(array(
                'rid' => $rid,
                'star' => $d,
            ))->execute();
    #echo $nid;
    echo 'Thanks for voting!';
}

setcookie('voted', $rid);