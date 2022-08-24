<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="//maxcdn.bootstrapcdn.com/font-awesome/4.2.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css" integrity="sha384-0evHe/X+R7YkIZDRvuzKMRqM+OrBnVFBL6DOitfPri4tjfHxaWutUpFmBp4vmVor" crossorigin="anonymous">
    <link rel="stylesheet" href="../assets/css/style.css">
    <link rel="stylesheet" href="./test.css">
    <style>
        label{
            font-weight: bold;
            font-size: 22px;
            color: var(--dark);
        }

    </style>
    <title>Receipt</title>
</head>
<body>
    <header id="header">
        <nav class="navbar navbar-expand-sm navbar-light fixed-top bgcolor">
            <div class="container">
                <a class="navbar-brand" href="../index.html">
                    <h1 style="padding-top: 0px;">Elyse<span>clean</span></h1>
                </a>
                <button class="navbar-toggler d-lg-none" type="button" data-bs-toggle="collapse" data-bs-target="#collapsibleNavId" aria-controls="collapsibleNavId" aria-expanded="false" aria-label="Toggle navigation">
              <span class="navbar-toggler-icon"></span>
          </button>
                <div class="collapse navbar-collapse" id="collapsibleNavId">
                    <ul class="navbar-nav ms-auto mt-2 mt-lg-0">
                        <li class="nav-item">
                            <a class="nav-link active" href="../index.html#">HOME</a>
                        </li>
                        <li class="nav-item dropdown">
                            <a class="nav-link dropdown-toggle" href="../index.html#services" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                        SERVICES
                      </a>
                            <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
                                <li><a class="dropdown-item" href="../pages/carpet.html">CARPET CLEANING</a></li>
                                <li><a class="dropdown-item" href="../pages/deep.html">DEEP CLEANING</a></li>
                                <li><a class="dropdown-item" href="../pages/desinfecting.html">DESINFECTING SERVICE</a></li>
                                <li><a class="dropdown-item" href="../pages/house.html">HOUSE CLEANING</a></li>
                                <li><a class="dropdown-item" href="../pages/Move.html">MOVING</a></li>
                                <li><a class="dropdown-item" href="../pages/office.html">OFFICE & COMMERCIAL</a></li>
                            </ul>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="../index.html#contact">CONTACT</a>
                        </li>
                </div>
            </div>
        </nav>
    </header>
    <div class="container "style="
        width: 750px;
        background: var(--brand);
        margin-top: 250px;
        margin-bottom: 250px;
    ">
        <form class="container" action="../paypage/index.php" method="get" style="width: 550px;">
            <h1 class="text-center mb-4">Book a service</h1>
            <h2 class="text-center mb-2">AVAILABILITY</h2>
            <h3 class="text-center mb-1">Enter your Zip code to view or availability date & time.</h3>
            <div class="row mb-3">
                <label for="" class="col-sm-2 col-form-label">Zip code</label>
                <div class="col-sm-10">
                    <input name="zipcode" type="number" class="form-control" id="inputZipCode" placeholder="Enter your zip code">
                </div>
            </div>
            <hr style="width: 100%;">

            <!--Property type-->
            <h3 class="text-center mb-2">Select an option</h3>
            <h4 class="text-center mb-1">Select one property type</h4>
            <div class="row mb-3">
                <label for="inputEmail3" class="col-sm-2 col-form-label">Property Type</label>
                <div class="col-sm-10">
                    <select  id="propertyType" name="propertyType" class="form-select border-1 " style="height: 55px; ">
                        <option selected type="text ">Property Type</option>
                        <option value="Standard cleaning">Home</option>
                        <option value="Deep Cleaning">Residential</option>
                        <option value="Move In/Out cleaning">Apartment</option>
                    </select>
                </div>
            </div>
            <hr style="width: 100%;">
            <!--Property type-->

            <!--Service type-->
            <h3 class="text-center mb-2">Select an option</h3>
            <div class="row mb-3">
                <label for="inputEmail3" class="col-sm-2 col-form-label">Service Type</label>
                <div class="col-sm-10">
                    <select id="serviceType" onchange="deleteFrequency()" name="serviceType" class="form-select border-1 " style="height: 55px; ">
                        <option selected type="text ">Service Type</option>
                        <option value="1">Standard cleaning</option>
                        <option value="2">Deep Cleaning</option>
                        <option value="3">Move In/Out cleaning</option>
                    </select>
                </div>
            </div>

            <!--Frequency-->
            <div class="row mb-3">
                <label for="inputEmail3" class="col-sm-2 col-form-label">Frequency</label>
                <div class="col-sm-10">
                    <select id="frequency"  name="frequency" class="form-select border-1 " style="height: 55px; ">
                        <option selected type="text ">Frequency</option>
                        <option value="1">Every Week</option>
                        <option value="2">Every 2 Weeks</option>
                        <option value="3">Every 4 Weeks</option>
                    </select>
                </div>
            </div>

            <!--Bedroom(s)-->
            <div class="row mb-3" style="display: flex; align-items: center;">
                <label for="inputEmail3" class="col-sm-2 col-form-label">Bedroom(s)</label>
                <div class="col-sm-10" style="">
                    <select id="bedroom"  name="bedroom" class="form-select border-1 " style="height: 55px;margin-left: 1px; ">
                        <option value="1"selected type="text ">1_bedroom</option>
                        <option value="2">2</option>
                        <option value="3">3</option>
                        <option value="4">4</option>
                    </select>
                </div>
            </div>

            <!--Bathroom(s)-->
            <div class="row mb-3" style="display: flex; align-items: center;">
                <label for="inputEmail3" class="col-sm-2 col-form-label">Bathroom(s)</label>
                <div class="col-sm-10" style="">
                    <select id="bathroom"  name="bathroom" class="form-select border-1 " style="height: 55px;margin-left: 1px; ">
                        <option value="1"selected type="text ">1_bathroom</option>
                        <option value="2">2</option>
                        <option value="3">3</option>
                        <option value="4">4</option>
                    </select>
                </div>
            </div>

            <!--Half Bath(s)-->
            <div class="row mb-3" style="display: flex; align-items: center;">
                <label for="inputEmail3" class="col-sm-2 col-form-label">Half Bathroom</label>
                <div class="col-sm-10" style="">
                    <select id="half_bath"  name="half_bath" class="form-select border-1 " style="height: 55px;margin-left: 1px; ">
                        <option value="0"selected type="text ">0 Half Bath</option>
                        <option value="1">1</option>
                        <option value="2">2</option>
                        <option value="3">3</option>
                        <option value="4">4</option>
                    </select>
                </div>
            </div>

            <!--Sq Ft(s)-->
            <div class="row mb-3" style="display: flex; align-items: center;">
                <label for="inputEmail3" class="col-sm-2 col-form-label">Sq Ft</label>
                <div class="col-sm-10" style="">
                    <select id="sq_ft"  name="sq_ft" class="form-select border-1 " style="height: 55px;margin-left: 1px; ">
                        <option selected type="text ">Sq Ft</option>
                        <option value="1">1 - 999 Sq Ft</option>
                        <option value="2">1000 - 1499 Sq Ft</option>
                        <option value="3">1500 - 1999 Sq Ft</option>
                        <option value="4">2000 - 2499 Sq Ft</option>
                        <option value="5">2500 - 2999 Sq Ft</option>
                        <option value="6">3000 - 3499 Sq Ft</option>
                    </select>
                </div>
            </div>
            <hr style="width: 100%;">
            <br>

            <!--How did you hear about us?-->
            <h3 class="text-center mb-2">How did you hear about us?</h3>
            <div class="row mb-3" style="display: flex; align-items: center;">
                <label for="inputEmail3" class="col-sm-2 col-form-label"></label>
                <div class="col-sm-10" style="">
                    <select id="hearUs"  name="hearUs" class="form-select border-1 " style="height: 55px;margin-left: 1px; ">
                        <option selected type="text ">How did you hear about us?</option>
                        <option value="Google">Google</option>
                        <option value="Facebook">Facebook</option>
                        <option value="Email">Email</option>
                        <option value="Yelp">Yelp</option>
                        <option value="Friend">Friend</option>
                    </select>
                </div>
            </div>
            <hr style="width: 100%;">
            <!--How did you hear about us?-->

            <!--Date-->
            <h3 class="text-center mb-2">Date</h3>
            <div class="row mb-3" style="display: flex; align-items: center;">
                <label for="inputEmail3" class="col-sm-2 col-form-label"></label>
                <div class="col-sm-10" style="">
                    <input name="inputDate" type="date" class="form-control" id="inputDate" placeholder="JJ/MM/YYYY">
                </div>
            </div>
            <hr style="width: 100%;">
            <!--Date-->

            <!--Contact-->
            <h3 class="text-center mb-2">contact info</h3>
                <!--First name-->
                <div class="row mb-3">
                    <label for="firstName" class="col-sm-2 col-form-label">First name</label>
                    <div class="col-sm-10">
                        <input name="firstname" type="text" class="form-control" id="inputFirstName" placeholder="First name">
                    </div>
                </div>
                <!--Last name-->
                <div class="row mb-3">
                    <label for="lastName" class="col-sm-2 col-form-label">Last name</label>
                    <div class="col-sm-10">
                        <input name="lastname" type="text" class="form-control" id="inputLastName" placeholder="Last name">
                    </div>
                </div>
                <!--Email-->
                <div class="row mb-3">
                    <label for="email" class="col-sm-2 col-form-label">Email</label>
                    <div class="col-sm-10">
                        <input name="Email" type="email" class="form-control" id="inputEmail" placeholder="exemple@mail.com">
                    </div>
                </div>
                <!--Phone-->
                <div class="row mb-3">
                    <label for="phone" class="col-sm-2 col-form-label">Phone</label>
                    <div class="col-sm-10">
                        <input name="phone" type="number" class="form-control" id="inputNumber" placeholder="Phone">
                    </div>
                </div>
                <!--Address-->
                <div class="row mb-3">
                    <label for="address" class="col-sm-2 col-form-label">Address</label>
                    <div class="col-sm-10">
                        <input name="address" type="text" class="form-control" id="inputAddress" placeholder="Address">
                    </div>
                </div>
                <!--Apart/Unit-->
                <div class="row mb-3">
                    <label for="apartUnit" class="col-sm-2 col-form-label">Apart/Unit</label>
                    <div class="col-sm-10">
                        <input name="apartUnit" type="number" class="form-control" id="inputAprtUnit" placeholder="Apart/Unit">
                    </div>
                </div>
            <hr style="width: 100%;">
            <!--Contact-->
            <div class="container text-center">
                <button class="btn px-5 py-3 mb-3" style="background: var(--dark); color: #ffff">Submit</button>
            </div>
        </form>
    </div>

    <!-------------x Footer section x-------------->
    <footer class="footer-distributed">

        <div class="footer-left">

            <h3>ElyseClean<span>logo</span></h3>

            <p class="footer-links">
                <a href="../index.html#" class="link-1">Home</a>

                <!--<a href="#">Blog</a>-->

                <a href="../index.html#services">Services</a>

                <a href="../index.html#about">About</a>

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

    <script src="./test.js"></script>
    <!------------jquery--------->
    <script src="../assets/vender/jquery/jquery.js "></script>
    <!-- Bootstrap JavaScript Libraries -->
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.5/dist/umd/popper.min.js " integrity="sha384-Xe+8cL9oJa6tN/veChSP7q+mnSPaj5Bcu9mPX5F5xIGE0DVittaqT5lorf0EI7Vk " crossorigin="anonymous "></script>
    <!-- Bootstrap JavaScript Libraries -->
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.5/dist/umd/popper.min.js " integrity="sha384-Xe+8cL9oJa6tN/veChSP7q+mnSPaj5Bcu9mPX5F5xIGE0DVittaqT5lorf0EI7Vk " crossorigin="anonymous "></script>
    <!-- JavaScript Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/js/bootstrap.bundle.min.js " integrity="sha384-A3rJD856KowSb7dwlZdYEkO39Gagi7vIsF0jrRAoQmDKKtQBHUuLZ9AsSv4jD4Xa " crossorigin="anonymous "></script>


</body>
</html>