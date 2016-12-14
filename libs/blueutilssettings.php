<?php
namespace BluePost;
require_once __DIR__ . "/../config.php";
class BlueUtilsSettings {
    public $SENDGRID_API_KEY = "";
    public $PROJECT_ROOT_DIR = "";
    public function __construct () {
        global $CONFIG;
        $this->SENDGRID_API_KEY = $CONFIG['SENDGRID'];
        $this->PROJECT_ROOT_DIR = __DIR__ . "/../";
    }
}
$BLUEUTILS_SETTINGS = new BlueUtilsSettings();

?>