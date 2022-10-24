<?php
$products = ['guitare', 'bass', 'bonjo', 'cithare', 'lyre', 'harpe'];




// Get a $twig object from this file.
require_once __DIR__ . '/../config/twig.php';
$products;
echo $twig->render('products.html.twig', ['products' => $products]);


?>
