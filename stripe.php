<?php
session_start();
// include "config.php";
require_once 'config.php';
include 'includes/database.php';
$propertyID = $_GET['id'];
$sql = "SELECT * FROM properties  WHERE propID='$propertyID'";
$queryResult = mysqli_query($conn, $sql);
$row = mysqli_fetch_assoc($queryResult);
// Token is created using Checkout or Elements!
// Get the payment token ID submitted by the form:
$token = $_POST['stripeToken'];
if(!isset($_POST['stripeToken'])||!isset($row['propID'])){
    // header('Location: apartment.php');
    echo "Something Must Have Gone Wrong! <br> You were not <h2>Charged</h2> ".($row['propPrice']);
}
else{
    $charge = \Stripe\Charge::create([
        'amount' => ($row['propPrice']*100),
        'currency' => 'usd',
        'description' => $row['propName'],
        'source' => $token,
    ]);
    echo "You have been Successfully Charged ".'<h2>'.($row['propPrice']).'</h2>';
    $moneyPaid = ($row['propPrice']);
$dateNow = date('y-m-d');
$date = strtotime($dateNow);
$end_date = strtotime('+ 1 year', $date);
$endDate = date('y-m-d', $end_date);
    // $end = date('Y-m-d', strtotime('+1 years'));
    $newPaySql = "INSERT INTO payment (payAmount, payPeriod) VALUES ('$moneyPaid', 1)";
 mysqli_query($conn, $newPaySql);
// retrieve last id
$payID = mysqli_insert_id($conn);
// mysql_free_result( $result );
 $tenant = $_SESSION['tenantID'];
// insertion to user_details table
$newOwnerSql = "INSERT INTO ownership (ownerType, ownerStartDate, ownerDueDate, propID, tenantID, payID) VALUES ('rent','$dateNow','$endDate',$propertyID,$tenant, $payID)";
mysqli_query($conn, $newOwnerSql);
// mysql_free_result( $result );

}
// !isset($_POST['stripeToken']) ||
// ||!isset($houses[$house])