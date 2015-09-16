<?php
require('util/main.php');

require('model/database.php');
require('model/product_db.php');

/*********************************************
 * Select some products
 **********************************************/

// Sample data
$product_name = 'Fender Telecaster';
// Sample data
$cat_id = 1;

// Get the products
$products = get_products_by_category($cat_id);

// Get a product by name
$product_by_name = get_product_by_name($product_name);

/***************************************
 * Delete a product
 ****************************************/
//print_r($product_by_name);
delete_product($product_by_name['productID']);

// Delete the product and display an appropriate messge
$delete_message = "No rows were deleted.";

/***************************************
 * Insert a product
 ****************************************/

// Sample data
$category_id = 1;
$code = 'hgjh';
$name = 'Blahblah';
$description = 'NA';
$price = '949.99';

// Insert the data
add_product($category_id, $code, $name, $description, $price, .1);


// Display an appropriate message
$insert_message = "No rows were inserted.";

include 'home.php';
?>