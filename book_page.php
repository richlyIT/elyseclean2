<?php
    $numero = 12;
    //SANITIZE GET ARRAY
      //$get = filter_var_array($_GET, FILTER_SANITIZE_URL);
      $servicetype = $_GET['servicetype'];
      $frequency = $_GET['frequency'];
      $bedroom = $_GET['bedroom'];
      $bathroom = $_GET['bathroom'];
      $half_bathroom = $_GET['half_bathroom'];
      $sq_ft = $_GET['sq_ft'];
      $total = 78;
?>
<!doctype html>
<html lang="en">

<head>
    <title>ELYSECLEAN 2</title>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS v5.2.0-beta1 -->
    <link rel="stylesheet" href="./assets/vender/bootstrap/js/bootstrap.min.js">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css" integrity="sha384-0evHe/X+R7YkIZDRvuzKMRqM+OrBnVFBL6DOitfPri4tjfHxaWutUpFmBp4vmVor" crossorigin="anonymous">

    <!-- BoxIcons -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/boxicons/2.1.0/css/boxicons.min.css" integrity="sha512-pVCM5+SN2+qwj36KonHToF2p1oIvoU3bsqxphdOIWMYmgr4ZqD3t5DjKvvetKhXGc/ZG5REYTT6ltKfExEei/Q==" crossorigin="anonymous" referrerpolicy="no-referrer"
        <link href='https://unpkg.com/boxicons@2.1.2/css/boxicons.min.css' rel='stylesheet'> />

    <!-- owl-carosel css-->
    <link rel="stylesheet" href="./assets/vender/owl-carosel/owl.carousel.min.css">
    <link rel="stylesheet" href="./assets/vender/owl-carosel/owl.theme.default.min.css">

    <!--  Swiper css  -->
    <!-- Link Swiper's CSS -->
    <link rel="stylesheet" href="https://unpkg.com/swiper/swiper-bundle.min.css" />
    <!--  Swiper css  -->

    <!-- CSS -->
    <link rel="stylesheet" href="assets/css/style.css">
    <!-- CSS -->

    <link rel="stylesheet" href="https://unpkg.com/swiper/swiper-bundle.min.css">
    <link rel="stylesheet" href="assets/css/style.css">
    <link rel="stylesheet" href="//maxcdn.bootstrapcdn.com/font-awesome/4.2.0/css/font-awesome.min.css">
</head>

<body>
    <header id="header">
        <nav class="navbar navbar-expand-sm navbar-light fixed-top bgcolor">
            <div class="container">
                <a class="navbar-brand" href="index.html">
                    <h1 style="padding-top: 0px;">Elyse<span>clean</span></h1>
                </a>
                <button class="navbar-toggler d-lg-none" type="button" data-bs-toggle="collapse" data-bs-target="#collapsibleNavId" aria-controls="collapsibleNavId" aria-expanded="false" aria-label="Toggle navigation">
              <span class="navbar-toggler-icon"></span>
          </button>
                <div class="collapse navbar-collapse" id="collapsibleNavId">
                    <ul class="navbar-nav ms-auto mt-2 mt-lg-0">
                        <li class="nav-item">
                            <a class="nav-link active" href="#">HOME</a>
                        </li>
                        <li class="nav-item dropdown">
                            <a class="nav-link dropdown-toggle" href="#services" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                        SERVICES
                      </a>
                            <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
                                <li><a class="dropdown-item" href="carpet.html">CARPET CLEANING</a></li>
                                <li><a class="dropdown-item" href="deep.html">DEEP CLEANING</a></li>
                                <li><a class="dropdown-item" href="desinfecting.html">DESINFECTING SERVICE</a></li>
                                <li><a class="dropdown-item" href="house.html">HOUSE CLEANING</a></li>
                                <li><a class="dropdown-item" href="Move.html">MOVING</a></li>
                                <li><a class="dropdown-item" href="office.html">OFFICE & COMMERCIAL</a></li>
                            </ul>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#contact">CONTACT</a>
                        </li>
                </div>
            </div>
        </nav>
    </header>

    <div>

        <!-- Booking Start -->
        <div class="bg-secondary booking1 wow fadeInUp" data-wow-delay="0.1s" id="book">
            <div class="container">
                <div class="row gx-5">
                    <div class="col-lg-6 py-5">
                        <div class="ticket">
                            <div class="py-5">
                                <box-icon name='x' id="cart-close"></box-icon>
                                <h3 class="col-lg-6 m-lg-4" id="zozo">Your Ticket</h3>
                            </div>
                            <hr>
                            <div class="ticket-content">
                                <h5>Industry <span class="ticketVar">$0</span> </h5>
                                <h5>Service <span class="ticketVar"><?php echo $servicetype?></span></h5>
                                <h5>Frequency <span class="ticketVar">$0</span></h5>
                                <h5>Bedrooms <span class="ticketVar">$0</span></h5>
                                <h5>Bathrooms<span class="ticketVar">$0 </span></h5>
                                <h5>Half Baths <span class="ticketVar">$0</span></h5>
                                <h5>Sq Ft <span class="ticketVar">$0</span></h5>
                                <hr>
                                <h3>TOTAL<span class="ticketVar">$0</span></h3>
                                <h4>Recurring Total<span class="ticketVar">$</span></h4>
                                <!--form close-->

                            </div>
                        </div>
                    </div>
                    <div class="col-lg-6 py-5 border-1">
                        <div class="h-100 d-flex flex-column justify-content-center text-center p-5 wow zoomIn" data-wow-delay="0.6s">
                            <h3 class="text-dark mb-4">Book For A Service</h3>
                            <form action="./paypage/index.php" method="GET">
                                <div class="row g-3 border-1">
                                    <section>
                                        <div class="col-12 col-lg-10 offset-lg-1 text-dark">
                                            <h4>AVAILABILITY</h4>
                                            <p>enter your ZIP code to view our available date & times</p>
                                        </div>
                                        <input type="text " name="zip_code" class="form-control border-1 " placeholder="Your Zip code " style="height: 55px; ">
                                    </section>
                                    <hr>
                                    <div id="zerta">
                                        <h3>Select an option</h3>
                                        <p>Select one propriety type(20$/each)
                                            <div class="checkbox-grid">
                                                <div class="checkbox-box">
                                                    <input type="checkbox" value="home" name="properyType1" /> Home
                                                </div>
                                                <div class="checkbox-box">
                                                    <input type="checkbox" value="home" name="properyType2" /> Residential
                                                </div>
                                                <div class="checkbox-box">
                                                    <input type="checkbox" value="home" name="properyType3" /> Appartment
                                                </div>
                                            </div>
                                        </p>
                                        <hr>
                                        <section class="container2">
                                            <h4>Service type(20$/each)</h4>
                                            <div class="col-12 col-sm-6 ">
                                                <select name="frequency" class="form-select border-1 " style="height: 55px; ">
                                                    <option selected type="text ">Frequency</option>
                                                    <option>Every Week</option>
                                                    <option>Every 2 Weeks</option>
                                                    <option>Every 4 Weeks</option>
                                                </select><br>
                                            </div>
                                    
                                                <div class="col-12 col-sm-6 ">
                                                    <div class="col-12 ">
                                                        <textarea class="form-control border-1 " name="SpecialRequest " placeholder="Special Request " style="height: 55px; width: 220px; " id="specialRequest"></textarea>
                                                    </div>
                                        </section>
                                        <hr>

                                        <section>
                                            <div class="container2">
                                                <h4>Service type (25$/each week)</h4><br>
                                                <div class="col-12 col-sm-6 ">
                                                    <select name="servicetype" class="form-select border-1 " style="height: 55px; ">
                                                        <option selected type="text ">Select A Service</option>
                                                        <option>House cleaning</option>
                                                        <option>Deep cleaning</option>
                                                        <option>Office cleaning</option>
                                                        <option>Desinfecting cleaning</option>
                                                        <option>Move in/out cleaning</option>
                                                    </select><br>
                                                </div>
                                                <h2><br></h2>
                                            </div>
                                        </section>
                                        <hr>

                                        <section class="container3">
                                            <div>
                                                <h4>SERVICE</h4><br>
                                                <div class="col-12 col-sm-6 py-4">
                                                    <select name="bedroom" id="bedroom" class="form-select border-1" style="height: 55px;  width: 220px;">
                                                        <option selected type="text">Bedrooms(10$/each)</option>
                                                        <option>1</option>
                                                        <option>2</option>
                                                        <option>3</option>
                                                        <option>4</option>
                                                        <option>5</option>
                                                    </select>
                                                </div>

                                                <div class="col-12 col-sm-6 py-4">
                                                    <select name="bathroom" id="bathroom" class="form-select border-1 " style="height: 55px; width: 220px; ">
                                                        <option selected type="text">Bathrooms(10$/each)</option>
                                                        <option>1</option>
                                                        <option>2</option>
                                                        <option>3</option>
                                                        <option>4</option>
                                                        <option>5</option>
                                                    </select>
                                                </div>

                                                <div class="col-12 col-sm-6 py-4">
                                                    <select id="half_bathroom" name="half_bathroom" class="form-select border-1 " style="height: 55px; width: 220px;">
                                                        <option selected type="text">Half Baths(10$/each)</option>
                                                        <option>1</option>
                                                        <option>2</option>
                                                        <option>3</option>
                                                        <option>4</option>
                                                        <option>5</option>
                                                    </select>
                                                </div>

                                                <div class="col-12 col-sm-6 py-4" id="zozo1">
                                                    <select id="sq_ft"  name="sq_ft" class="form-select border-1 " style="height: 55px; width: 220px;">
                                                        <option selected type="text">Sq Ft</option>
                                                        <option>1 - 999</option>
                                                        <option>1000 - 1499</option>
                                                        <option>1500 - 1999</option>
                                                    </select>
                                                </div>
                                            </div>
                                        </section>
                                        <hr>
                                        <!--Extras--
                                    <section class="container4">
                                        <h4>EXTRAS</h4>
                                        <p>Select any extras (optional)</p>
                                        <div class="container text-center">
                                            <div class="row row-cols-auto border-1">
                                                <div class="col border-1"><img src="assets/images/cleaning.png" style="height: 50px;" alt="">
                                                    <p>heavy duty</p>
                                                </div>
                                                <div class="col border-1"><img src="assets/images/meeting.png" style="height: 50px;" alt="">
                                                    <p>Extra Room</p>
                                                </div>
                                                <div class="col"><img src="assets/images/mini.png" style="height: 50px;" alt="">
                                                    <p>Inside Fridge</p>
                                                </div>
                                                <div class="col"><img src="assets/images/stove.png" style="height: 50px;" alt="">
                                                    <p>Inside Oven</p>
                                                </div>
                                                <div class="col"><img src="assets/images/washing-dishes.png" style="height: 50px;" alt="">
                                                    <p>Dishes</p>
                                                </div>
                                                <div class="col"><img src="assets/images/pets.png" style="height: 50px;" alt="">
                                                    <p>Pet(s)</p>
                                                </div>
                                                <div class="col"><img src="assets/images/window.png" style="height: 50px;" alt="">
                                                    <p>Clean Windows</p>
                                                </div>
                                                <div class="col"><img src="assets/images/blinds.png" style="height: 50px;" alt="">
                                                    <p>Window Blinds</p>
                                                </div>
                                                <div class="col"><img src="assets/images/kitchen.png" style="height: 50px;" alt="">
                                                    <p>Inside Kitchen Cabinets</p>
                                                </div>
                                                <div class="col"><img src="assets/images/garage.png" style="height: 50px;" alt="">
                                                    <p>Sweep Inside Garage</p>
                                                </div>
                                                <div class="col"><img src="assets/images/carpet-cleaner.png" style="height: 50px;" alt="">
                                                    <p>Carpet Washing</p>
                                                </div>
                                                <div class="col"><img src="assets/images/carpet.png" style="height: 50px;" alt="">
                                                    <p>Rug Cleaning ea.</p>
                                                </div>
                                            </div>
                                        </div>
                                    </section>
                                      

                                    <hr>
                                    --Extras-->

                                        <section>
                                            <div id="zerta">
                                                <p>How Did You Hear About Us?
                                                    <div class="checkbox-grid">
                                                        <div class="checkbox-box">
                                                            <input type="checkbox" name="property4" value="Google" /> Google
                                                        </div>
                                                        <div class="checkbox-box">
                                                            <input type="checkbox" name="property5" value="Yelp" /> Yelp
                                                        </div>
                                                        <div class="checkbox-box">
                                                            <input type="checkbox" name="property6" value="Facebook" /> Facebook
                                                        </div>
                                                        <div class="checkbox-box">
                                                            <input type="checkbox" name="property7" value="Craigslist" /> Craigslist
                                                        </div>
                                                        <div class="checkbox-box">
                                                            <input type="checkbox" name="property8" value="Email" /> Email
                                                        </div>
                                                        <div class="checkbox-box">
                                                            <input type="checkbox" name="property9" value="Friend" /> Friend
                                                        </div>
                                                        <div class="checkbox-box">
                                                            <input type="checkbox" name="property10" value="NextDoor" /> NextDoor
                                                        </div>
                                                        <div class="checkbox-box">
                                                            <input type="checkbox" name="property11" value="HomeAdvisor" /> HomeAdvisor
                                                        </div>
                                                        <div class="checkbox-box">
                                                            <input type="checkbox" name="property12" value="OfferUp" /> OfferUp
                                                        </div>
                                                    </div>
                                                    <hr>
                                                </p>
                                                <!--
                                                <p>WOULD YOU LIKE TO PAY IN CASH & GET AN EXTRA 5% DISCOUNT?
                                                    <div>
                                                        <input type="radio" name="property13" value="Yes!" /> YES PLEASE
                                                    </div>
                                                    <div> <input type="radio" name="property14" value="No!" /> NO,I would like to pay with a credit card
                                                    </div>
                                                </p>
                                                <hr>
                                                <p>Important: Cannot Combine 2 Promotions Or Discounts. Only 1 Discount Per Cleaning Appointment.
                                                    <div>
                                                        <input type="checkbox" name="property15" value="Yes!" /> I understand
                                                    </div>
                                                </p>
                                            

                                            </div>
                                            <hr>
                                            -->
                                        </section>
                                        <section class="container5">
                                            <h3>Service Date</h3><br>
                                            <div class="col-12 col-sm-6">
                                                <div class="date" id="date1" data-target-input="nearest">
                                                    <input type="date" name="servicedate" class="form-control border-1 datetimepicker-input" placeholder="Service Date" data-target="#date1" data-toggle="datetimepicker" style="height: 55px;"> <br>
                                                </div>
                                        </section>

                                        <hr>
                                        <section class="container6">
                                            <h4>CONTACT INFO</h4><br>
                                            <div class="col-12 col-sm-6 ">
                                                <input type="text " name="firstname" class="form-control border-1 " placeholder="Your First Name " style="height: 55px;">
                                            </div>
                                            <div class="col-12 col-sm-6 py-4" id="Name">
                                                <input type="text " name="lastname" class="form-control border-1 " placeholder="Your Name " style="height: 55px;">
                                            </div>
                                            <div class="col-12 col-sm-6 ">
                                                <input type="email " name="email" class="form-control border-1 " placeholder="Your Email " style="height: 55px; "><br>
                                            </div>
                                            <div class="col-12 col-sm-6 ">
                                                <input type="number" name="number" class="form-control border-1 " placeholder="Your phone number " style="height: 55px; "><br>
                                            </div>

                                            <div class="col-12 col-sm-6 ">
                                                <input type="text" name="address" class="form-control border-1 " placeholder="Address " style="height: 55px; "><br>
                                            </div>
                                            <div class="col-12 col-sm-6 ">
                                                <input type="text" name="apartUnit" class="form-control border-1 " placeholder="Apt/Unit " style="height: 55px; "><br>
                                            </div>
                                        </section>                                        
                                        </div>
                                        <div class="col-12 ">
                                            <button class="btn btn-dark w-100 py-3 " type="submit ">Book Now</button>
                                        </div>
                                        </div>
                            </form>
                            </div>
                            </div>
                            </div>
                            </div>
                        </div>
                        <!-- Booking End -->
                    </div>


    <!-------------x Footer section x-------------->
    <footer class="footer-distributed">

        <div class="footer-left">

            <h3>ElyseClean<span>logo</span></h3>

            <p class="footer-links">
                <a href="#" class="link-1">Home</a>

                <!--<a href="#">Blog</a>-->

                <a href="#services">Services</a>

                <a href="#about">About</a>

                <!--<a href="#">Faq</a>-->

                <a href="#contact">Contact</a>
            </p>

            <p class="footer-company-name" style="color: #fff;">
                <a style="color: #fff;" href="https://www.flaticon.com/free-icons/carpet" title="carpet icons">Carpet icons created by Freepik - Flaticon</a> <br>
                <br> ElyseClean &copy; 2022</p>
        </div>

        <div class="footer-center">

            <div>
                <i class="fa fa-map-marker" style="background: var(--brand);"></i>
                <p style="padding-top: 0;"><span><!--432 S. Ts Ave--></span> California USA</p>
            </div>

            <div>
                <i class="fa fa-phone" style="background: var(--brand);"></i>
                <p style="padding-top: 0;">(424) 465-1228</p>
            </div>

            <div>
                <!--<i class="fa fa-envelope"></i>-->
                <!--<p><a href="mailto:richlystudiosit@gmail.com">richlystudiosit@gmail.com</a></p>-->
            </div>

        </div>

        <div class="footer-right">

            <p class="footer-company-about" style="color: #fff;">
                <span>About the company</span> Reliable house cleaning professionals serving the greater seattle area. Professionalism is vital in order to achieve our high standards of quality and meticulous attention to detail.

                <div class="footer-icons">

                    <a href="#" style="background: var(--brand);"><i class="fa fa-facebook"></i></a>
                    <a href="#" style="background: var(--brand);"><i class="fa fa-twitter" style="background: var(--brand);"></i></a>
                    <a href="#" style="background: var(--brand);"><i class="fa fa-linkedin"></i></a>
                    <a href="#" style="background: var(--brand);"><i class="fa fa-instagram" aria-hidden="true"></i></i></a>

                </div>

        </div>

    </footer>


    <!-------------x Footer section x-------------->


                    <!------------jquery--------->
                    <script src="assets/vender/jquery/jquery.js "></script>

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
                    <script src="./assets/vender/owl-carosel/owl.carousel.min.js "></script>


                    <!-- Javascript script -->
                    <script src="assets/js/main.js "></script>
                    <script src="book.js"></script>
                    <!-- Javascript script -->
</body>