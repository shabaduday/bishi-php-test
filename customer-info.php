<?php
  require('./customer-read.php');
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Mass Garage Doors Expert</title>
    <link href="bootstrap/css/bootstrap.min.css" rel="stylesheet">
    <link href="css/styles.css" rel="stylesheet">
    <script src="bootstrap.bundle.min.js"></script>
</head>
<body>
<?php require('./header.php'); ?>

  <main class="main-content">
    <section class="main-content">
      <div class="container mt-5">
        <div class="border border-warning rounded p-4">
          <h2 class="text-warning text-center fw-bold mb-4">Customer Information</h2>
          <table>
            <tr>
              <th>ID</th>
              <th>FIRST NAME</th>
              <th>LAST NAME</th>
              <th>ADDRESS</th>
              <th>CITY</th>
              <th>STATE</th>
              <th>PHONE</th>
              <th>EMAIL</th>
            </tr>
            <?php while($results = mysqli_fetch_array($sqlCustomerDetails)) { ?>
            <tr>
              <td><?php echo $results ['id'] ?></td>
              <td><?php echo $results ['first_name'] ?></td>
              <td><?php echo $results ['last_name'] ?></td>
              <td><?php echo $results ['address'] ?></td>
              <td><?php echo $results ['city'] ?></td>
              <td><?php echo $results ['state'] ?></td>
              <td><?php echo $results ['phone'] ?></td>
              <td><?php echo $results ['email'] ?></td>
            </tr>
            <?php } ?>
          </table>
        </div>
      </div>
      <div class="container mt-5">
        <div class="border border-warning rounded p-4">
          <h2 class="text-warning text-center fw-bold mb-4">Payment Details</h2>
          <table class="payment-read-main">
              <tr>
                <th>ID</th>
                <th>CARD TYPE</th>
                <th>CARD NUMBER</th>
                <th>CARD EXPIRATION DATE</th>
              </tr>
              <?php while($results = mysqli_fetch_array($sqlPaymentDetails)) { ?>
              <tr>
                <td><?php echo $results ['id'] ?></td>
                <td><?php echo $results ['card_type'] ?></td>
                <td><?php echo $results ['card_number'] ?></td>
                <td><?php echo $results ['card_exp_date'] ?></td>
              </tr>
              <?php } ?>
            </table>
          </div>
        </div>
      </div>
    </section>

  </main>

  <?php require('./footer.php'); ?>

</body>
</html>

<!--
simple html without bootstraps
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>Customer Information</title>
</head>

<style>
  html, body {
    margin: 0;
    padding: 0;
  }
  .main {
    height: 100vh;

    Grid 
    display: grid;
    grid-template-rows: auto auto 1fr;
    justify-items: center;
    row-gap: 20px;
    
  }
  .main .customer-read-main tr th {
    width: 200px;
  }
  .main .customer-read-main tr td {
    text-align: center;
  }
  /*.main .customer-read-main tr td:nth-child(4) {
    display: grid;
    grid-auto-flow: column;
  }*/
  .main .payment-read-main tr th {
    width: 200px;
  }
  .main .payment-read-main tr td {
    text-align: center;
  }/*
  .main .payment-read-main tr td:nth-child(4) {
    display: grid;
    grid-auto-flow: column;
  }*/
</style>

<body>
  <div class="main">
    <h3>CUSTOMER INFORMATION</h3>
    
  </div>
</body>
</html>

<table class="customer-read-main">
            <tr>
                <th>ID</th>
                <th>FIRST NAME</th>
                <th>LAST NAME</th>
                <th>ADDRESS</th>
                <th>CITY</th>
                <th>STATE</th>
                <th>PHONE</th>
                <th>EMAIL</th>
            </tr>
            <?php while($results = mysqli_fetch_array($sqlCustomerDetails)) { ?>
            <tr>
                <td><?php echo $results ['id'] ?></td>
                <td><?php echo $results ['first_name'] ?></td>
                <td><?php echo $results ['last_name'] ?></td>
                <td><?php echo $results ['address'] ?></td>
                <td><?php echo $results ['city'] ?></td>
                <td><?php echo $results ['state'] ?></td>
                <td><?php echo $results ['phone'] ?></td>
                <td><?php echo $results ['email'] ?></td>
            </tr>
            <?php } ?>
            </table>
            <table class="payment-read-main">
            <tr>
                <th>ID</th>
                <th>CARD TYPE</th>
                <th>CARD NUMBER</th>
                <th>CARD EXPIRATION DATE</th>
            </tr>
            <?php while($results = mysqli_fetch_array($sqlPaymentDetails)) { ?>
            <tr>
                <td><?php echo $results ['id'] ?></td>
                <td><?php echo $results ['card_type'] ?></td>
                <td><?php echo $results ['card_number'] ?></td>
                <td><?php echo $results ['card_exp_date'] ?></td>
            </tr>
            <?php } ?>
            </table>