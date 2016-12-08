<?php
require "dboperations.php";
if (!empty($_GET['id'])) {
    $readObj = new DBOps();
    $responseofread = $readObj->ReadRecord($_GET['id']);
}
?>