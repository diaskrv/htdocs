<?php

// Define username and password
const USERNAME = "ba1e484af256c7";
const PASSWORD = "95dbbe5d";
const DSN      = "mysql:host=eu-cdbr-west-02.cleardb.net;dbname=heroku_ab7344589622e52";

// Connect to database using PDO
try {
    $conn = new PDO(DSN, USERNAME, PASSWORD);
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    $conn->setAttribute(PDO::ATTR_DEFAULT_FETCH_MODE, PDO::FETCH_ASSOC);
} catch (Exception $e) {
    echo "Error ". $e->getMessage();
    exit();
}
