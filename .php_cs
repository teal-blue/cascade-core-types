<?php
$path = __DIR__;
$docBlockSettings = [];
$docBlockSettings['package'] = 'cascade';

return include(dirname(dirname(dirname(dirname(__DIR__)))) . DIRECTORY_SEPARATOR . 'yii2-canis-lib' . DIRECTORY_SEPARATOR . '.php_cs');
?>