<?php
//Create a new SQLite3 Database
$db = new SQLite3('products.db');
 
//Create a new table to our database 
$query = "CREATE TABLE IF NOT EXISTS products ( imageName TEXT, location TEXT, productname STRING, productlink TEXT, quantite NUMBER, price FLOAT, size STRING, color STRING )";
$db->exec($query); 
?>