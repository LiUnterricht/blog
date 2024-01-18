<?php
include '.' . DIRECTORY_SEPARATOR . 'logic' . DIRECTORY_SEPARATOR . 'config.php';
include '.' . DIRECTORY_SEPARATOR . 'logic' . DIRECTORY_SEPARATOR . 'router.php';
$config = getConfig();
$pf = $config['general']['templatePath'];
$view = getRoute();
$title = $view['title'];

include $pf . '_header.php';
include $pf . '_navigation.php';
include $pf . '_pagehead.php';

include $view['template'];

include $pf . '_footer.php';