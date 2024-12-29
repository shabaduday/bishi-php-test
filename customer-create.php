<?php 
  require('./database.php');

  if(isset($_POST["customer-create"])) {
    $firstName = $_POST['first-name'];
    $lastName = $_POST['last-name'];
    $address = $_POST['address'];
    $city = $_POST['city'];
    $state = $_POST['state'];
    $phone = $_POST['phone'];
    $email = $_POST['email'];

    $queryCustomerCreate = "INSERT INTO customer_details VALUES(null, '$firstName', '$lastName', '$address', '$city', '$state', '$phone', '$email')";
    $sqlCustomerCreate = mysqli_query($connect, $queryCustomerCreate);

    echo '<script>alert("Successfully created!")</script>';
    echo '<script>window.location.href="/PHP/payment-details.php"</script>';
  } /*else {
    echo '<script>window.location.href="/PHP/customer-details.php"</script>';
  }*/
?>