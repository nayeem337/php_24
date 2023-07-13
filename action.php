<?php
require_once 'vendor/autoload.php';

use App\classes\Category;
use App\classes\Product;

$category = new Category();
$categories = $category->getAllCategories();

if ($_GET['page'] == 'home')
{
    $product = new Product();
    $products = $product->getAllProducts();
    include 'pages/home.php';
}elseif ($_GET['page'] == 'about')
{
    include 'pages/about.php';
}