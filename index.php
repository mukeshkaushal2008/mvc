<?php
require('vendor/autoload.php');
require('core/bootstrap.php');
Router::load('app/route.php')->direct(Request::uri(),Request::method());
?>