<?php

// Define username and password
const USERNAME = "b9cfb5db07fee5";
const PASSWORD = "7b8866b1";
const DSN      = "mysql:host=eu-cdbr-west-02.cleardb.net;dbname=heroku_eb2b6d43207ebf8";

// Connect to database using PDO
try {
    $conn = new PDO(DSN, USERNAME, PASSWORD);
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    $conn->setAttribute(PDO::ATTR_DEFAULT_FETCH_MODE, PDO::FETCH_ASSOC);
} catch (Exception $e) {
    echo "Error ". $e->getMessage();
    exit();
}
