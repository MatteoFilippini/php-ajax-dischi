<?php
include '../includes/var.php';

header('Content-Type: application/json');

echo json_encode($database);
