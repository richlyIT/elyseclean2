<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- CSS only -->
    <link rel="stylesheet" href="checkout.css" />
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-gH2yIJqKdNHPEq0n4Mqa/HGKIhSkIHeL5AyhkYV8i59U5AR6csBvApHHNl/vI1Bx" crossorigin="anonymous">
    <title>Pay Page</title>
</head>
<body>
    <div class="container my-5">
        <div class="row">
        <div class="col">
            <h1 class="text-center">Your Ticket</h1>
            <hr>
            <div class="col my-1">
                Industry
                <span style="float: right;">
                    Residential Cleaning
                </span>
            </div>
            <div class="col my-1">
                Service
                <span style="float: right;">
                    <?php echo $_GET['servicetype']?>
                </span>
            </div>
            <div class="col my-1">
                Frequency
                <span style="float: right;">
                    2/week(s)
                </span>
            </div>
            <div class="col my-1">
                Bedrooms
                <span style="float: right;">
                <?php echo $_GET['bedroom']?>
                </span>
            </div>
            <div class="col my-1">
                Bathrooms
                <span style="float: right;">
                <?php echo $_GET['bathroom']?> 
                </span>
            </div>
            <div class="col my-1">
                Half Baths
                <span style="float: right;">
                <?php echo $_GET['half_bathroom']?>  
                </span>
            </div>
            <div class="col my-1">
                Sq Feet
                <span style="float: right;">
                <?php echo $_GET['sq_ft']?> Sq Feet
                </span>
            </div>
            <hr>
            <div class="col my-1" style="color:  blue; font-size: 32px;">
                Total
                <span style="float: right;">
                    12$
                </span
                ></div>
        </div>
        <div class="col pt-5">
            <!-- Display a payment form -->
            <form id="payment-form" action="charge.php create.php" method="POST">
                <div class="mb-3">
                    <label for="exampleFormControlInput1" class="form-label">Name</label>
                    <input type="text" name="name" class="form-control" id="exampleFormControlInput1" placeholder="Your Name">
                </div>
                <div class="mb-3">
                    <label for="exampleFormControlInput1" class="form-label">Email address</label>
                    <input type="email" name="email" class="form-control" id="exampleFormControlInput1" placeholder="name@example.com">
                </div>
                <div id="payment-element">
                    <!--Stripe.js injects the Payment Element-->
                </div>
                <button id="submit">
                    <div class="spinner hidden" id="spinner"></div>
                    <span id="button-text">Pay now</span>
                </button>
                <div id="payment-message" class="hidden"></div>
            </form>
        </div>
        </div>
    </div>



    <script src="https://js.stripe.com/v3/"></script>
    <script src="checkout.js" defer></script>
    <!-- JavaScript Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-A3rJD856KowSb7dwlZdYEkO39Gagi7vIsF0jrRAoQmDKKtQBHUuLZ9AsSv4jD4Xa" crossorigin="anonymous"></script>
</body>
</html>