<?php
    include_once '../data.php';

    header('Content-Type: application/json');
    echo json_encode($albums);
?>