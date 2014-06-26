<?php

function buyonline() {
    $c = '';
    return $c;
}

function aboutus() {
    $c = '';
    return $c;
}

function contactus(){
    $c = '';
    return $c;
}

function storelocator(){
    $c = '';
    return $c;
}

function media() {
    $domain = $_SERVER['HTTP_HOST'];
    $c = '<iframe src="http://'.$domain.'/sites/all/modules/ckeditor/ckfinder/ckfinder.html" width="100%" height="100%" style="min-height:500px;width=100%" ></iframe>';
    return $c;
}