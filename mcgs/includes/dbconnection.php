<?php // Copy this file to includes/dbconnection.php and fill credentials
 $DB_HOST = 'localhost'; $DB_NAME = 'mgsdb'; $DB_USER = 'root'; $DB_PASS = ''; 
 // XAMPP default is empty. If not, put your MySQL password here.
  $dsn = "mysql:host={$DB_HOST};dbname={$DB_NAME};charset=utf8mb4"; $options = [ PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION, PDO::ATTR_DEFAULT_FETCH_MODE => PDO::FETCH_ASSOC, ]; try { $dbh = new PDO($dsn, $DB_USER, $DB_PASS, $options); } catch (PDOException $e) { die('DB connection failed: ' . $e->getMessage()); }