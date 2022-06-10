<?php
// delete code

require_once "../conn.php";
if (isset($_GET['product_id'])) {
    $id = $_GET['product_id'];
} else {
    $id = 0;
}
$result = $conn->query("DELETE FROM product WHERE product_id=$id"); // delete all
if ($result) {
    header("location: products.php");
}

?>