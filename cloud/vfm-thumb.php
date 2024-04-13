<?php

require_once 'vfm-admin/config.php';
session_name($_CONFIG["session_name"]);
session_start();
require_once 'vfm-admin/class.php'; 
if (!GateKeeper::isAccessAllowed()) {
    die('access denied');
}
$imageServer = new ImageServer();
$imageServer->showImage();
exit;