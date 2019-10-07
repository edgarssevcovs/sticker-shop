<?php
    require_once('config.php');
    require_once('db.php');
    require_once('sticker_form.php');
    $db = new DB($host, $user, $pass, $db);
    $form = new Form($db->conn);
    
?>