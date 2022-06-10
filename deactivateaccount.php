<?php
 require_once "conn.php";

 session_start();
if (!isset($_SESSION['customer_id'])) {
    header("location: login.php");
}

if (isset($_GET['customer_id'])) {
    $customer_id = $_GET['customer_id'];
} else {
    $customer_id = 0;
}
$result = $conn->query("DELETE  FROM customer WHERE customer_id=$customer_id"); // delete all
if ($result) {
    header("location: logout.php");
}



?>