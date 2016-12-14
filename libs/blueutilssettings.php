<?php
namespace BluePost;
require_once __DIR__ . "/../config.php";
class BlueUtilsSettings {
    public $SENDGRID_API_KEY = $CONFIG['SENDGRID'];
    public $PROJECT_ROOT_DIR = __DIR__ . "/../";
}

?>