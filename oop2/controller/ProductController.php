<?php
namespace oop2\controller;
require "HomeController.php";
use oop2\controller;
class ProductController extends HomeController
{

}
$product = new ProductController();
$product->index();