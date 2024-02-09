<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css"
        integrity="sha512-DTOQO9RWCH3ppGqcWaEA1BIZOC6xxalwEsw9c2QQeAIftl+Vegovlnee1c9QX4TctnWMn13TZye+giMm8e2LwA=="
        crossorigin="anonymous" referrerpolicy="no-referrer" />

    <link rel="stylesheet" href="./css/home.css">
    <link rel="stylesheet" href="./css/booking.css">

    <title>Bookings</title>
</head>

<body class="bg-body-tertiary">
    <header>
        <div class="container-fluid d-flex align-items-center mb-1 px-sm-5 ">
            <div class="header__left ">
                <div class="me-auto p-sm-2 animated-div"><img src="./Assets/logo.png" alt="logo"
                        class=" navbar-brand img_small" width="150px">
                </div>
            </div>

            <div class=" d-flex flex-column flex-sm-row ms-sm-auto header__right w-sm-100 text-end">
                <div class="p-2 "><a href="mailto:info@mytrans.in" style="color: #CC0000;" class="links fw-bold"><i
                            class="fa fa-envelope"></i>
                        info@mytrans.in</a></div>
                <div class="p-2 ms-2"><a href="tel:+91 7448220220" style="color: #CC0000;" class="links fw-bold"><i
                            class="fa fa-phone"></i> + 91 7448220220 </a></div>
            </div>


        </div>

        <!------------------ navbar------------------ -->
        <nav class="navbar navbar-expand-lg bg-dark ">
            <div class="container-fluid col-12">
                <button class="navbar-toggler " type="button" data-bs-toggle="collapse"
                    data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent"
                    aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon text-light"></span>
                </button>
                <div class="collapse navbar-collapse d-flex-lg justify-content-around" id="navbarSupportedContent">
                    <ul class="nav nav-pills nav-fill ">
                        <li class="nav-item ms-1">
                            <a class="nav-link " aria-current="page" href="./home.html">Home</a>
                        </li>
                        <li class="nav-item ms-1">
                            <a class="nav-link" href="about.html">About</a>
                        </li>
                        <li class="nav-item ms-1">
                            <a class="nav-link" href="./fleet.html">Fleet</a>
                        </li>
                        <li class="nav-item dropdown ms-1">
                            <a class="nav-link dropdown-toggle" data-bs-toggle="dropdown" href="#" role="button"
                                aria-expanded="false">Services</a>
                            <ul class="dropdown-menu bg-dark">
                                <li><a class="dropdown-item" href="./OnCallWithinCity.html">On call / within city limits</a></li>
                                <li><a class="dropdown-item" href="./intercitylocal.html">Intercity / Local</a></li>
                                <li><a class="dropdown-item" href="./intercity_to_city.html">Intercity / City to City</a></li>

                                <li><a class="dropdown-item" href="#">Monthly Package Module(Corporate)</a></li>
                                <li><a class="dropdown-item" href="./MonthlyKm.html">Monthly Km Module(Corporate)</a></li>
                            </ul>
                        </li>
                        <li class="nav-item ms-1">
                            <a class="nav-link" href="./bookings.html">Booking</a>
                        </li>
                        <li class="nav-item ms-1">
                            <a class="nav-link" href="./ratecard.html">Rate Card</a>
                        </li>
                        <li class="nav-item ms-1">
                            <a class="nav-link" href="#">Career</a>
                        </li>
                        <li class="nav-item ms-1">
                            <a class="nav-link" href="#">Gallery</a>
                        </li>
                        <li class="nav-item ms-1">
                            <a class="nav-link" href="./public-opinion.html">Public Opinion</a>
                        </li>
                        <li class="nav-item ms-1">
                            <a class="nav-link" href="./contact.html">Contact</a>
                        </li>

                    </ul>

                </div>
            </div>
        </nav>

        <!--------------------------------- navbar complete ---------------------->

    </header>

    <main>

        <div class="text-center fw-bold p-4 title fs-2">Booking | Corporate Tie-Up</div>

        <div class="main__container d-flex flex-column flex-sm-row form_container">
            <div class="first__form col-md-6  p-5 ">
                <div class="text__container">
                    <p>City to City / Intercity</p>
                </div>
                <div class="container mt-5 ">
                    <form>
                        <div class="form-row">
                            <div class="form-group col-md-6">
                                <label for="from">From</label>
                                <input type="text" class="form-control" id="from" name="from" required>
                            </div>
                            <div class="form-group col-md-6">
                                <label for="to">To</label>
                                <input type="text" class="form-control" id="to" name="to" required>
                            </div>
                        </div>

                        <div class="form-row">
                            <div class="form-group col-md-6">
                                <label for="name">Name</label>
                                <input type="text" class="form-control" id="name" name="name" required>
                            </div>
                            <div class="form-group col-md-6">
                                <label for="phone">Phone</label>
                                <input type="tel" class="form-control" id="phone" name="phone" required>
                            </div>
                        </div>

                        <div class="form-row">
                            <div class="form-group col-md-6">
                                <label>Gender</label>
                                <div class="form-check">
                                    <input class="form-check-input" type="radio" name="gender" id="male" value="Male"
                                        required>
                                    <label class="form-check-label" for="male">
                                        Male
                                    </label>
                                </div>
                                <div class="form-check">
                                    <input class="form-check-input" type="radio" name="gender" id="female"
                                        value="Female" required>
                                    <label class="form-check-label" for="female">
                                        Female
                                    </label>
                                </div>
                                <div class="form-check">
                                    <input class="form-check-input" type="radio" name="gender" id="transgender"
                                        value="Transgender" required>
                                    <label class="form-check-label" for="transgender">
                                        Transgender
                                    </label>
                                </div>
                            </div>
                            <div class="form-group col-md-6">
                                <label for="pickupDate">Pickup Date</label>
                                <input type="date" class="form-control" id="pickupDate" name="pickupDate" required>
                            </div>
                        </div>

                        <div class="form-row">
                            <div class="form-group col-md-6">
                                <label for="duration">Duration (Days)</label>
                                <input type="number" class="form-control" id="duration" name="duration" min="1" max="20"
                                    required>
                            </div>
                            <div class="form-group col-md-6">
                                <label for="email">Email</label>
                                <input type="email" class="form-control" id="email" name="email" required>
                            </div>
                        </div>

                        <div class="form-group">
                            <label for="pickupAddress">Pickup Address</label>
                            <textarea class="form-control" id="pickupAddress" name="pickupAddress" rows="3"
                                required></textarea>
                        </div>

                        <button type="submit">Book Request</button>
                    </form>
                </div>
            </div>
            <div class="second__form col-md-6 p-5 ">
                <div class="text__container">
                    <p>On Call / Within City</p>
                </div>

                <div class="container mt-5">
                    <form>
                        <div class="form-row">
                            <div class="form-group col-md-6">
                                <label for="from">From</label>
                                <select class="form-control" id="from" name="from" required>
                                    <option value="Pune">Pune</option>
                                </select>
                            </div>
                            <div class="form-group col-md-6">
                                <label for="to">To</label>
                                <input type="text" class="form-control" id="to" name="to" required>
                            </div>
                        </div>

                        <div class="form-row">
                            <div class="form-group col-md-6">
                                <label for="name">Name</label>
                                <input type="text" class="form-control" id="name" name="name" required>
                            </div>
                            <div class="form-group col-md-6">
                                <label for="phone">Phone</label>
                                <input type="tel" class="form-control" id="phone" name="phone" required>
                            </div>
                        </div>

                        <div class="form-row">
                            <div class="form-group col-md-6">
                                <label>Gender</label>
                                <div class="form-check">
                                    <input class="form-check-input" type="radio" name="gender" id="male" value="Male"
                                        required>
                                    <label class="form-check-label" for="male">
                                        Male
                                    </label>
                                </div>
                                <div class="form-check">
                                    <input class="form-check-input" type="radio" name="gender" id="female"
                                        value="Female" required>
                                    <label class="form-check-label" for="female">
                                        Female
                                    </label>
                                </div>
                                <div class="form-check">
                                    <input class="form-check-input" type="radio" name="gender" id="transgender"
                                        value="Transgender" required>
                                    <label class="form-check-label" for="transgender">
                                        Transgender
                                    </label>
                                </div>
                            </div>
                            <div class="form-group col-md-6">
                                <label for="pickupDate">Pickup Date</label>
                                <input type="date" class="form-control" id="pickupDate" name="pickupDate" required>
                            </div>
                        </div>

                        <div class="form-row">
                            <div class="form-group col-md-6">
                                <label for="duration">Duration (Days)</label>
                                <input type="number" class="form-control" id="duration" name="duration" min="1" max="20"
                                    required>
                            </div>
                            <div class="form-group col-md-6">
                                <label for="email">Email</label>
                                <input type="email" class="form-control" id="email" name="email" required>
                            </div>
                        </div>

                        <div class="form-group">
                            <label for="pickupAddress">Pickup Address</label>
                            <textarea class="form-control" id="pickupAddress" name="pickupAddress" rows="3"
                                required></textarea>
                        </div>

                        <div class="form-group">
                            <label for="dropAddress">Drop Address</label>
                            <textarea class="form-control" id="dropAddress" name="dropAddress" rows="3"
                                required></textarea>
                        </div>

                        <button type="submit">Book Request</button>
                    </form>
                </div>

            </div>
        </div>


    </main>


    <footer>
        <div class="footer bg-dark d-flex flex-column flex-sm-row justify-content-around align-items-center p-3">
            <div class="copyright">
                <p class="text-light">Copyright - My-Trans</p>
            </div>
            <div class="socials">

                <div class="social-btns"><a class="btn facebook" href="#"><i class="fa-brands fa-facebook-f"></i></a>
                    <div class="btn twitter" href="#"><i class="fa-brands fa-twitter"></i></div><a class="btn dribbble"
                        href="#"><i class="fa-brands fa-linkedin-in"></i></a>
                </div>

            </div>
            <div class="footer__links text-light d-flex justify-content-around">
                <a href="">Privacy Policy</a>
                <a href="">Term of Use</a>
            </div>
        </div>
    </footer>



    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL"
        crossorigin="anonymous"></script>

</body>

</html>