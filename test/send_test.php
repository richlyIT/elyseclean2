<?php 
    //sanitize get array
    $get = filter_var_array($_GET, FILTER_SANITIZE_URL);
    $serviceType = $get['serviceType'];
    $frequency = $get['frequency'];
    $bedroom = $get['bedroom'];
    $bathroom = $get['bathroom'];
    $half_bath = $get['half_bath'];
    $sq_ft = $get['sq_ft'];

    

    //function to compute the ticket
    function compute($plusBed, $plusBath, $plusHalf, $plusSq, $total_service_price){
        $serTo = ($plusBed * 20.00) + ($plusBath * 35.00) + ($plusHalf * 15.00) + ($plusSq * 40.00) + $total_service_price;
        $freDis = (($serTo *10)/100)/* + ($plusBed * 20.00) + ($plusBath * 35.00) + ($plusHalf * 15.00) + ($plusSq * 40.00)*/;
        $disTo = $serTo;
        $conv = ($disTo*3)/100;
        $Tot = $serTo + $conv;
        $Rec = $Tot - $freDis;

        
        echo "<hr><br>";
        echo "Service total ", number_format($serTo, 2), " <br>";
        echo "Frequency discount ", number_format($freDis, 2), " <br>";
        echo "Discounted total ", number_format($disTo, 2), " <br>";
        echo "Convenience Fee ", number_format($conv, 2), " <br>";
        echo "Total ", number_format($Tot, 2), " <br>";
        echo "Recurring Total ", number_format($Rec, 2), " <br>";

        global $TOTAL;
        $TOTAL = $Tot;
    }


    //switch case to choose service type price
    switch ($serviceType){
        case 1:
            $total_service_price = 190.00;
            $bedroomVal = intval($bedroom);
            $bathroomVal = intval($bathroom);
            $halfBathVal = intval($half_bath);
            $sqFtVal = intval($sq_ft);
            compute($bedroomVal, $bathroomVal, $halfBathVal, $sqFtVal, $total_service_price);
            break;
        case 2:
            $total_service_price = 395.00;
            $bedroomVal = intval($bedroom);
            $bathroomVal = intval($bathroom);
            $halfBathVal = intval($half_bath);
            $sqFtVal = intval($sq_ft);
            compute($bedroomVal, $bathroomVal, $halfBathVal, $sqFtVal, $total_service_price);
            break;
        case 3:
            $total_service_price = 475.00;
            $bedroomVal = intval($bedroom);
            $bathroomVal = intval($bathroom);
            $halfBathVal = intval($half_bath);
            $sqFtVal = intval($sq_ft);
            compute($bedroomVal, $bathroomVal, $halfBathVal, $sqFtVal, $total_service_price);
            break;
        default:
            echo "error";
            break;
    }


?>
<!doctype html>
<html lang="en">
  <head>
    <title>Paypage</title>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS v5.2.0-beta1 -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css"  integrity="sha384-0evHe/X+R7YkIZDRvuzKMRqM+OrBnVFBL6DOitfPri4tjfHxaWutUpFmBp4vmVor" crossorigin="anonymous">
    <link rel="stylesheet" href="css/style.css">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">

  <!-- Bootstrap CSS v5.2.0-beta1 -->
  <link rel="stylesheet" href="../assets/vender/bootstrap/js/bootstrap.min.js">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css" integrity="sha384-0evHe/X+R7YkIZDRvuzKMRqM+OrBnVFBL6DOitfPri4tjfHxaWutUpFmBp4vmVor" crossorigin="anonymous">

  <!-- BoxIcons -->
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/boxicons/2.1.0/css/boxicons.min.css" integrity="sha512-pVCM5+SN2+qwj36KonHToF2p1oIvoU3bsqxphdOIWMYmgr4ZqD3t5DjKvvetKhXGc/ZG5REYTT6ltKfExEei/Q==" crossorigin="anonymous" referrerpolicy="no-referrer"/>
  <link href='https://unpkg.com/boxicons@2.1.2/css/boxicons.min.css' rel='stylesheet' />

    <!-- owl-carosel css-->
    <link rel="stylesheet" href="../assets/vender/owl-carosel/owl.carousel.min.css">
    <link rel="stylesheet" href="../assets/vender/owl-carosel/owl.theme.default.min.css">

    <!--  Swiper css  -->
    <!-- Link Swiper's CSS -->
    <link rel="stylesheet" href="https://unpkg.com/swiper/swiper-bundle.min.css" />
    <!--  Swiper css  -->

    <!-- CSS -->
    <link rel="stylesheet" href="../assets/css/style.css">
    <!-- CSS -->

    <link rel="stylesheet" href="https://unpkg.com/swiper/swiper-bundle.min.css">
    <link rel="stylesheet" href="../assets/css/style.css">
    <link rel="stylesheet" href="//maxcdn.bootstrapcdn.com/font-awesome/4.2.0/css/font-awesome.min.css">
  </head>
  <body>
    <div class="container" style="width: 750px; background: red; margin-top: 0; margin-bottom: 0;">   
        <h2 class="my-4 text-center">Complete your Booking</h2>
        <div class="container text-center" style="width: 500px;">
          <table class="table table-borderless">
            <thead>
              <tr>
                
              </tr>
            </thead>
            <tbody>
              <tr>
                <th scope="row">Industry</th>
                <td scope="col">Residential Cleaning</td>
              </tr>
              <tr>
                <th scope="row">Service</th>
                <td>
                    <?php switch($serviceType){
                        case 1:
                            echo "Standard cleaning";
                            break;
                        case 2:
                            echo "Deep cleaning";
                            break;
                        case 3:
                            echo "Move In/Out cleaning";
                            break;
                        default:
                            echo "Awesome world";
                    }?>
                </td>
              </tr>
              <tr>
                <th scope="row">Frequency</th>
                <td colspan="2">
                <?php switch($frequency){
                        case 1:
                            if($serviceType == 1){
                                echo "Every week";
                            }
                            break;
                        case 2:
                            if($serviceType == 2){
                                echo "One Time";
                            }else{
                                echo "Every 2 weeks";}
                            break;
                        case 3:
                            if($serviceType == 3){
                                echo "One Time";
                            }else{
                                echo "Every 4 weeks";
                            }
                            break;
                        default:
                            echo "One Time";
                    }?>
                </td>
              </tr>
              <tr>
                <th scope="row">Bedrooms</th>
                <td colspan="2"><?php echo $bedroom; ?></td>
              </tr>
              <tr>
                <th scope="row">Bathrooms</th>
                <td colspan="2"><?php echo $bathroom; ?></td>
              </tr>
              <tr>
                <th scope="row">Half Baths</th>
                <td colspan="2"><?php echo $half_bath; ?></td>
              </tr>
              <tr>
                <th scope="row">Sq Feet</th>
                <td colspan="2">
                    <?php switch($sq_ft){
                        case 1:
                            echo "1 - 999 Sq Ft";
                            break;
                        case 2:
                            echo "1000 - 1499 Sq Ft";
                            break;
                        case 3:
                            echo "1500 - 1999 Sq Ft";
                            break;
                        case 4:
                            echo "2000 - 2499 Sq Ft";
                            break;
                        case 5:
                            echo "2500 - 2999 Sq Ft";
                            break;
                        case 6:
                            echo "3000 - 3499 Sq Ft";
                            break;
                        default:
                            echo "Awesome world";
                    }?></td>
              </tr>
              <tr style="font-size: 36px; color: var(--brand);">
                <th scope="row" style="color: blue">Total</th>
                <td colspan="2" style="color: blue">$<?php echo $TOTAL?></td>
              </tr>
            </tbody>
          </table>
        </div>

        <!--Stripe-->
        <h2 class="my-5 text-center">Please enter your informations</h2>
        <div class="container" style="width: 500px;">
          <form action="./charge.php" method="post" id="payment-form">
            <div class="form-row">
            <input type="text" name="first_name" class="form-control mb-3 StripeElement StripeElement--empty" placeholder="First Name">
            <input type="text" name="last_name" class="form-control mb-3 StripeElement StripeElement--empty" placeholder="Last Name">
            <input type="email" name="email" class="form-control mb-3 StripeElement StripeElement--empty" placeholder="Email Address">
              <div id="card-element" class="form-control">
                <!-- a Stripe Element will be inserted here. -->
              </div>

              <!-- Used to display form errors -->
              <div id="card-errors" role="alert"></div>
            </div>
            <p class="mt-4">Accept <a href=""style="color: blue; text-decoration: none;">Terms & Condition </a>and <a href=""style="color: blue; text-decoration: none;">Privacy Policy</a></p>
            <p>By entering any information, you affirm you have read & agree to the Terms of Service & Privacy Policy. You also agree & authorize Queen Bee Cleaning to contact you for updates/or promotional purposes.</p>
            <button>Submit Payment</button>
          </form>
        </div>
        <!--Stripe-->
    </div>
    
    
<!------------jquery--------->
<script src="../assets/vender/jquery/jquery.js "></script>

<!-- Bootstrap JavaScript Libraries -->
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.5/dist/umd/popper.min.js " integrity="sha384-Xe+8cL9oJa6tN/veChSP7q+mnSPaj5Bcu9mPX5F5xIGE0DVittaqT5lorf0EI7Vk " crossorigin="anonymous "></script>


<!-- Bootstrap JavaScript Libraries -->
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.5/dist/umd/popper.min.js " integrity="sha384-Xe+8cL9oJa6tN/veChSP7q+mnSPaj5Bcu9mPX5F5xIGE0DVittaqT5lorf0EI7Vk " crossorigin="anonymous "></script>

<!-- JavaScript Bundle with Popper -->

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/js/bootstrap.bundle.min.js " integrity="sha384-A3rJD856KowSb7dwlZdYEkO39Gagi7vIsF0jrRAoQmDKKtQBHUuLZ9AsSv4jD4Xa " crossorigin="anonymous "></script>
<!-- Swiper JS -->
<script src="https://unpkg.com/swiper/swiper-bundle.min.js "></script>

<!-- BoxIcons js -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/boxicons/2.1.0/dist/boxicons.min.js " integrity="sha512-y8/3lysXD6CUJkBj4RZM7o9U0t35voPBOSRHLvlUZ2zmU+NLQhezEpe/pMeFxfpRJY7RmlTv67DYhphyiyxBRA==" crossorigin=" anonymous " referrerpolicy="no-referrer "></script>

<!-- owl-carosel js -->
<script src="../assets/vender/owl-carosel/owl.carousel.min.js "></script>


<!-- Javascript script -->
<script src="../assets/js/main.js "></script>
<!-- Javascript script -->
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
  <script src="https://js.stripe.com/v3/"></script>
  <script src="./js/charge.js"></script>

  </body>
</html>