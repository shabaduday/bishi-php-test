<?php 
  require('./database.php');

  if(isset($_POST["payment-create"])) {
    $cardType = $_POST['card-type'];
    $cardNumber = $_POST['card-number'];
    $expirationDate = $_POST['expiration-date'];
    //$verificationCode = $_POST['verification-code'];

    $queryPaymentCreate = "INSERT INTO payment_details VALUES(null, '$cardType', '$cardNumber', '$expirationDate')";
    $sqlPaymentCreate = mysqli_query($connect, $queryPaymentCreate);

    echo '<script>alert("Successfully paid!")</script>';
    echo '<script>window.location.href="/PHP/customer-info.php"</script>';
  } else {
    echo '<script>window.location.href="/PHP/payment-details.php"</script>';
  }
?>