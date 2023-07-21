<?php
require_once 'controllers/BookController.php';
// Tạo một đối tượng controller và gọi phương thức index()
$controller = new BookController();
$controller->index();
?>