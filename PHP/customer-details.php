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

  <!-- Main Content Area -->
  <main class="main-content">
    <section>
      <div class="container" style="border: 1px solid #FFB800; border-radius: 8px;">
        <div class="row">
          <div class="col-lg bg-warning text-dark p-4">
            <h2 class="fw-bold">Create new account!</h2>
          </div>
        </div>
        <div class="row">
          <div class="col-lg-6 p-4">
            <form action="/PHP/customer-create.php" method="post">
              <div class="mb-3">
                <label for="firstName" class="form-label">First Name *</label>
                <input type="text" class="form-control" name="first-name" placeholder="Your Name">
              </div>
              <div class="mb-3">
                <label for="address" class="form-label">Address *</label>
                <input type="text" class="form-control" name="address" placeholder="Your Address">
              </div>
              <div class="mb-3">
                <label for="state" class="form-label">State *</label>
                <select id="cars" class="form-control" name="state">
                  <option selected disabled>Choose your state: </option>
                  <option value="AL">Alabama</option>
                  <option value="AK">Alaska</option>
                  <option value="AZ">Arizona</option>
                  <option value="AR">Arkansas</option>
                  <option value="AS">American Samoa</option>
                  <option value="CA">California</option>
                  <option value="CO">Colorado</option>
                  <option value="CT">Connecticut</option>
                  <option value="DE">Delaware</option>
                  <option value="DC">District of Columbia</option>
                  <option value="FL">Florida</option>
                  <option value="GA">Georgia</option>
                  <option value="GU">Guam</option>
                  <option value="HI">Hawaii</option>
                  <option value="ID">Idaho</option>
                  <option value="IL">Illinois</option>
                  <option value="IN">Indiana</option>
                  <option value="IA">Iowa</option>
                  <option value="KS">Kansas</option>
                  <option value="KY">Kentucky</option>
                  <option value="LA">Louisiana</option>
                  <option value="ME">Maine</option>
                  <option value="MD">Maryland</option>
                  <option value="MA">Massachusetts</option>
                  <option value="MI">Michigan</option>
                  <option value="MN">Minnesota</option>
                  <option value="MS">Mississippi</option>
                  <option value="MO">Missouri</option>
                  <option value="MT">Montana</option>
                  <option value="NE">Nebraska</option>
                  <option value="NV">Nevada</option>
                  <option value="NH">New Hampshire</option>
                  <option value="NJ">New Jersey</option>
                  <option value="NM">New Mexico</option>
                  <option value="NY">New York</option>
                  <option value="NC">North Carolina</option>
                  <option value="ND">North Dakota</option>
                  <option value="MP">Northern Mariana Islands</option>
                  <option value="OH">Ohio</option>
                  <option value="OK">Oklahoma</option>
                  <option value="OR">Oregon</option>
                  <option value="PA">Pennsylvania</option>
                  <option value="PR">Puerto Rico</option>
                  <option value="RI">Rhode Island</option>
                  <option value="SC">South Carolina</option>
                  <option value="SD">South Dakota</option>
                  <option value="TN">Tennessee</option>
                  <option value="TX">Texas</option>
                  <option value="TT">Trust Territories</option>
                  <option value="UT">Utah</option>
                  <option value="VT">Vermont</option>
                  <option value="VA">Virginia</option>
                  <option value="VI">Virgin Islands</option>
                  <option value="WA">Washington</option>
                  <option value="WV">West Virginia</option>
                  <option value="WI">Wisconsin</option>
                  <option value="WY">Wyoming</option>
                </select>
                <!-- state input type for testing 
                <input type="text" maxlength="2" pattern="[A-Z]{2}" class="form-control" name="state" placeholder="e.g. US"> -->
              </div>
              <div class="mb-3">
                <label for="email" class="form-label">Email *</label>
                <input type="email" class="form-control" name="email" placeholder="example@gmail.com">
              </div>
            </div>    
            <div class="col-lg-6 p-4">
              <div class="mb-3">
                <label for="lastName" class="form-label">Last Name *</label>
                <input type="text" class="form-control" name="last-name" placeholder="Your Last Name">
              </div>
              <div class="mb-3">
                <label for="city" class="form-label">City *</label>
                <input type="text" class="form-control" name="city" placeholder="Your City">
                <!-- Note: I decided to make input type to text instead of select since there are so many cities each states -->
              </div>
              <div class="mb-3">
                <label for="phone" class="form-label">Phone *</label>
                <input type="number" class="form-control" name="phone" placeholder="123456789" pattern="[0-9]{9}"> 
                <!-- Note: max value int from db is 2147483647, if US number format maxlength is 10 and input number 
                 is higher than 2147483647 (eg. 9876543210), the output is 2147483647  
                 that's why I set the pattern maxlength to 9 instead of 10 to avoid max input number 
                 source: https://dev.mysql.com/doc/refman/8.4/en/integer-types.html
                 -->
              </div>
            </div>
            <div class="text-center p-4">
              <button type="submit" name="customer-create" class="btn btn-warning w-50">Create Account</button>
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
  <title>Customer Details</title>
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
  .main .customer-details-main {
    grid-row: 1/2;
    display: grid;
    grid-auto-rows: auto;
    row-gap: 5px;
  }
  .main .customer-details-main h3 {
    text-align: center;
  }
</style>

<body>
  <div class="main">
	<form class="customer-details-main" action="/PHP/customer-create.php" method="post">
			<h3>CREATE CUSTOMER DETAILS</h3>
			<input type="text" name="first-name" placeholder="Enter your first name" required />
			<input type="text" name="last-name" placeholder="Enter your last name" required />
			<input type="text" name="address" placeholder="Enter your address" required />
			<input type="text" name="city" placeholder="Enter your city" required />
			<input type="text" maxlength="2" name="state" placeholder="Enter your state" required />
			<input type="number" name="phone" placeholder="Enter your phone" required />
			<input type="text" name="email" placeholder="Enter your email" required />
			<input type="submit" name="customer-create" value="CREATE">
		</form>
  </div>
</body>
</html>