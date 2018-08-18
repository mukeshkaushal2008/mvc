<?php
$config = require_once('config.php');
return new QueryBuilder(
    Connection::make($config['database'])
);
?>