<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Admin!</title>

    <link rel="stylesheet" href="/css/bootstrap.min.css">
    <link rel="stylesheet" href="/css/all.min.css">
    <link rel="stylesheet" href="/css/admin.css">
    <!-- <link rel="stylesheet" href="/public/css/admin.scss"> -->
    <link rel="stylesheet" href="/css/Chart.min.css">
</head>

<body>
    <!-- header part starts -->

    <header class="header-part">
        <div class="items container-fluid bg-dark">
            <nav class="navbar navbar-expand-lg navbar-light">
                <a class="navbar-brand" href="index.html">
                    <img class="wow rotateIn" src="/images/travelia/logo.png" data-wow-duration="3s"
                        data-wow-iteration="40" height="50" width="60" alt="">
                </a>
                <button class="navbar-toggler" type="button" data-toggle="collapse"
                    data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false"
                    aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>

                <div class="collapse navbar-collapse" id="navbarSupportedContent">

                    <form class="form-inline ml-auto my-2 my-lg-0">
                        <a href="" class="bell mr-4">
                            <i class="fas fa-bell"></i>
                        </a>
                        <a href="/logout" role="button" class="btn btn-outline-success mr-4">Log out</a>
                    </form>
                </div>
            </nav>
        </div>
    </header>

    <!-- header part starts -->

    <!-- admin dash part starts -->
    <section class="admin-dash-part">

        <div class=" container-fluid">

            <div class="row">
                <div class="col-md-2">
                    <div class="items text-center">

                        <img src="/images/admin/admin.png" alt="">
                        <h4>Admin</h4>

                        <div class="row btns">
                            <div class="col-md-3">
                                <i class="fas fa-home"></i>
                            </div>
                            <div class="col-md-9 text-center">
                                <a href="/admin">Home</a>
                            </div>
                        </div>

                        <div class="row btns">

                            <div class="col-md-3">
                                <i class="fas fa-info-circle"></i>
                            </div>
                            <div class="col-md-9 text-center">
                                <a href="/admin/adminProfile">My Info</a>
                            </div>
                        </div>

                        <div class="row btns">

                            <div class="col-md-3">
                                <i class="fas fa-user"></i>
                            </div>
                            <div class="col-md-9 text-center">
                                <a href="/admin/adminTraveller">Traveller Info</a>
                            </div>
                        </div>

                        <div class="row btns">

                            <div class="col-md-3">
                                <i class="fas fa-user-friends"></i>
                            </div>
                            <div class="col-md-9 text-center travel-font">
                                <a href="/admin/adminTravelGuide">Travel Guider Info</a>
                            </div>
                        </div>
                        <div class="row btns">

                            <div class="col-md-3">
                                <i class="fas fa-users"></i>
                            </div>
                            <div class="col-md-9 text-center">
                                <a href="/admin/adminHotelEmp">Hotel Emp Info</a>
                            </div>
                        </div>
                        <div class="row btns">

                                <div class="col-md-3">
                                    <i class="fas fa-users"></i>
                                </div>
                                <div class="col-md-9 text-center">
                                    <a href="/admin/adminCustCare">Cust. Care Info</a>
                                </div>
                            </div>
                        <div class="row btns">

                            <div class="col-md-3">
                                <i class="far fa-list-alt"></i>
                            </div>
                            <div class="col-md-9 text-center">
                                <a href="/admin/adminHotelinfo">Hotels</a>
                            </div>
                        </div>
                        <div class="row btns">

                            <div class="col-md-3">
                                <i class="fas fa-user-plus"></i>
                            </div>
                            <div class="col-md-9 text-center travel-font">
                                <a href="/admin/adminAddCust">Add cust. care</a>
                            </div>
                        </div>
                        <div class="row btns">

                            <div class="col-md-3">
                                <i class="fas fa-map-marker-alt"></i>
                            </div>
                            <div class="col-md-9 text-center travel-font">
                                <a href="/admin/adminTravelPlace">Travel Places</a>
                            </div>
                        </div>
                        <div class="row btns">

                            <div class="col-md-3">
                                    <i class="fas fa-file-invoice-dollar"></i>
                            </div>
                            <div class="col-md-9 text-center travel-font">
                                <a href="/admin/adminCustAudit">Cust. Care Audit</a>
                            </div>
                      </div>
                      <div class="row btns">

                        <div class="col-md-3">
                                <i class="fas fa-file-invoice-dollar"></i>
                        </div>
                        <div class="col-md-9 text-center travel-font">
                            <a href="/admin/adminServiceCharge">Service Charge</a>
                        </div>
                  </div>



                    </div>
                </div>
                <div class="col-md-10">
                    <div class="items2">

                            <form id="reg_form" method="post" >
                                    <div class="row">
                                      <div class="col-xs-6 col-sm-6 col-md-6">
                                        <div class="form-group">
                                          <input type="text" name="firstname" id="first_name" class="form-control input-sm"
                                            placeholder="First Name">
                                          <div class="invalid-feedback">Oops, you missed first name</div>
                                        </div>
                                      </div>
                                      <div class="col-xs-6 col-sm-6 col-md-6">
                                        <div class="form-group">
                                          <input type="text" name="lastname" id="last_name" class="form-control input-sm"
                                            placeholder="Last Name">
                                          <div class="invalid-feedback">Oops, you missed last name</div>
                                        </div>
                                      </div>
                                    </div>
                        
                                    <div class="form-group">
                                      <input type="email" name="email" id="email" class="form-control input-sm" placeholder="Email Address">
                                      <div class="invalid-feedback">Oops, you missed email address</div>
                                    </div>
                        
                                   
                        
                                    <div class="form-group">
                                      <input type="text" name="address" id="address" class="form-control input-sm" placeholder="Address">
                                      <div class="invalid-feedback">Oops, you missed address</div>
                                    </div>
                        
                                    <div class="form-group">
                                      <input type="number" name="phoneno" id="phoneNo" class="form-control input-sm" placeholder="Phone no">
                                      <div class="invalid-feedback">Oops, you missed phone number</div>
                                    </div>
                        
                                    <div class="row">
                                      <div class="col-xs-6 col-sm-6 col-md-6">
                                        <div class="form-group">
                                          <input type="text" name="password" id="password" class="form-control input-sm" placeholder="Password">
                                          <div class="invalid-feedback">You must create a password</div>
                                          <small>at least six characters and one digit</small>
                                        </div>
                                      </div>
                                      <div class="col-xs-6 col-sm-6 col-md-6">
                                        <div class="form-group">
                                          <input type="text" name="password_confirmation" id="password_confirmation"
                                            class="form-control input-sm" placeholder="Confirm Password">
                                          <div class="invalid-feedback">Confirm your password</div>
                                        </div>
                                      </div>
                                    </div>
                        
                                    <input type="submit" name="submit" value="Register" class="btn btn-info btn-block submit">
                        
                                  </form>
                        
                    </div>
                </div>
            </div>

        </div>

    </section>
    <!-- admin dash part ends -->









    <script src="/js/jquery-3.4.1.min.js"></script>
    <script src="/js/popper.min.js"></script>
    <script src="/js/bootstrap.min.js"></script>
    <script src="/js/Chart.min.js"></script>

   

</body>

</html>