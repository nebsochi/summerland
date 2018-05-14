<?php
include 'includes/database.php';
$sql = "SELECT * FROM properties";
$queryResult = mysqli_query($conn, $sql);
while($queryRow = mysqli_fetch_assoc($queryResult)){
    echo '<pre>';
    print_r($queryRow);
}
// echo '<pre>';
// print_r($queryRow);

$houses = array(
    "house1" => array(
        "title" => "New Duplex Ultima",
        "price" => "5000",
    ),
    "house2" => array(
        "title" => "Bungalow Stu Natural",
        "price" => "2000",
    ),
    "house3" => array(
        "title" => "2 storey Suprise",
        "price" => "8000",
    )
);
?>
