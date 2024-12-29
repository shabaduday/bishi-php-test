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
    <section>
      <div class="container" style="border: 1px solid #FFB800; border-radius: 8px;">
        <div class="row">
          <div class="col-lg bg-warning text-dark p-4">
            <h2 class="fw-bold">Payment Method</h2>
          </div>
        </div>
        <div class="row">
          <div class="col-lg-6 p-4">
            <form action="/PHP/payment-create.php" method="post">
              <div class="mb-3">
                <label for="cardType" class="form-label">Card Type *</label>
                <select id="cars" class="form-control" name="card-type">
                  <option selected disabled>Choose your card type: </option>
                  <option value="03">American Express (AMEX)</option>
                  <option value="02">Visa</option>
                  <option value="01">MasterCard (Master)</option>
                  <option value="10">Discover</option>
                  <option value="28">JCB</option>
                  <option value="20">enRoute</option>
                  <option value="04">Diners Club (Diners)</option>
                  <option value="72">GSB</option>
                </select>
                <!--
                Note: so many lists of card type, I decided to input some of common card types
                source: https://help.usaepay.info/developer/reference/cardtype/
                card type input for testing
                <input type="text" class="form-control" name="card-type" placeholder="Card Type">-->
              </div>
              <div class="mb-3">
                <label for="cardNumber" class="form-label">Card Number *</label>
                <input type="text" class="form-control" name="card-number" placeholder="1234-5678-9012-3456" pattern="[0-9]{4}-[0-9]{4}-[0-9]{4}-[0-9]{4}" />
                <!-- input type to text instead of number due to the data type was set to string varchar from db-->
              </div>
            </div>
            <div class="col-lg-6 p-4">
              <div class="mb-3">
                <label for="expirationDate" class="form-label">Expiration Date *</label>
                <input type="text" class="form-control" name="expiration-date" placeholder="12/34" pattern="[0-9]{2}/[0-9]{2}" />
                <!-- I decided to set input type to text instead of two separated 
                 select input type (needs javascript or similar) since the data type was set to string varchar from db -->
              </div>
              <div class="mb-3">
                <label for="verificationCode" class="form-label">Verification Code *</label>
                <input type="number" class="form-control" name="verification-code" placeholder="123" pattern="[0-9]{3}" />
              </div>
            </div>
            <div class="text-center p-4">
              <button type="submit" name="payment-create" class="btn btn-warning w-50">Proceed to Pay</button>
            </div>
          </form>
        </div>
      </div>
    </section>
  </main>


  <?php require('./footer.php'); ?>

	
</body>
</html>

<!--
simple html without bootstrap
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>Payment Details</title>
</head>

<style>
  html, body {
    margin: 0;
    padding: 0;
  }
  .main {
    height: 100vh;

    /* Grid */
    display: grid;
    grid-template-rows: auto auto 1fr;
    justify-items: center;
    row-gap: 20px;
    
  }
  .main .payment-details-main {
    grid-row: 1/2;
    display: grid;
    grid-auto-rows: auto;
    row-gap: 5px;
  }
  .main .payment-details-main h3 {
    text-align: center;
  }
</style>

<body>
  <div class="main">
	<form class="payment-details-main" action="/PHP/payment-create.php" method="post">
			<h3>PAYMENT DETAILS</h3>
			<input type="text" name="card-type" placeholder="Enter your card type" required />
			<input type="number" name="card-number" placeholder="Enter your card number" required />
			<input type="text" name="expiration-date" placeholder="Enter your expiration date" required />
			<input type="number" name="verification-code" placeholder="Enter your verification code" required/>
			<input type="submit" name="payment-create" value="PAY">
		</form>
  </div>
</body>
</html>
