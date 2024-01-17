<?php
$pf =  '.' . DIRECTORY_SEPARATOR . 'parts' . DIRECTORY_SEPARATOR;
include '.' . DIRECTORY_SEPARATOR . 'logic' . DIRECTORY_SEPARATOR . 'router.php';

include $pf . '_header.php';
include $pf . '_navigation.php';
include $pf . '_pagehead.php';

include getRoute();

include $pf . '_footer.php';