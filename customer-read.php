<?php
  include("database.php");
  $queryCustomerDetails = "SELECT * FROM customer_details";
  $queryPaymentDetails = "SELECT * FROM payment_details";
  $sqlCustomerDetails = mysqli_query($connect, $queryCustomerDetails);
  $sqlPaymentDetails = mysqli_query($connect, $queryPaymentDetails);
?>