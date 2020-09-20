<?php
//routing
if(isset($_GET['legacy'])) {
    $_SESSION['ui'] = "legacy";
}

if(isset($_SESSION['ui']) && $_SESSION['ui'] == 'legacy') {
    require "ui_v1.php";
    die();
} else {
    require "ui_v2.php";
}
