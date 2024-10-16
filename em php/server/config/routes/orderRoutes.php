<?php
include '../config/db.php';

$query = "SELECT * FROM orders";
$result = mysqli_query($conn, $query);

$orders = [];
while ($row = mysqli_fetch_assoc($result)) {
    $orders[] = $row;
}

header('Content-Type: application/json');
echo json_encode($orders);
?>
