<?php
require 'vendor/autoload.php';

use App\Controllers\ProductController;

$page = $_GET['page'] ?? 'product';

if ($page === 'product') {
    (new ProductController())->index();
} else {
    echo "404 - Page Not Found";
}
