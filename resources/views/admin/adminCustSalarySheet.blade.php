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

                        <table class="table table-hover wow flipInX table-dark">
                            <thead>
                                <tr>
                                    <th scope="col">#</th>
                                    <th scope="col">Customer Care</th>
                                    <!-- <th scope="col">Current Salary</th> -->
                                    
                                    <th scope="col">Salary Paid</th>

                                    <th scope="col">Paid Month</th>
                                  
                                    <th scope="col">Action</th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php  
                              $count =0;
                              ?>
                             @foreach($audits as $audits)
                                   <?php $count++; ?>
                                 
                                

                                <form action="" method="post">
                                    <input type="hidden" id="email" name="email" value="{{ $audits->custcaremail }}">
                                    <input type="hidden" id="month" name="month" value="{{ $audits->paidmonth }}">
                                    
                                    <tr>
                                        <th scope="row"><?=$count?></th>
                                        <td>{{ $audits->custcaremail }}</td>
                                        <!-- <td>{{ $audits->currentsalary }}</td> -->
                                    
                                        <td>{{ $audits->salarypaid }}</td>

                            
                                        <td>{{ $audits->paidmonth }} </td>
                                        <td> <input type="submit" class="btn btn-warning delete" name="submit"
                                                value="delete entry"></td>
                                    </tr>
                                </form>

                                @endforeach
                            </tbody>
                        </table>

                        <!-- add user form -->

                        <div class="modal fade " tabindex="-1" role="dialog" aria-hidden="true" id="addCustCare">
                                <div class=" modal-dialog">
                                  <div class=" modal-content">
                            
                                    <div class="modal-header">
                                      <h3>Add Customer Care</h3>
                                      <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
                                    </div>
                                    <div class="modal-body">
                                      <form id="reg_form"  method="post">
                                       
                            
                                        <div class="form-group">
                                          <input type="email" name="email" id="email" class="form-control input-sm" placeholder="Email Address">
                                          <div class="invalid-feedback">Oops, you missed email address</div>
                                        </div>
                                        
                                        <div class="form-group">
                                                <input type="text" name="month"  class="form-control input-sm" placeholder="Salary paid month">
                                                <div class="invalid-feedback">Oops, you missed one fields</div>
                                        </div>

                                        <div class="form-group">
                                            <input type="number" name="amount"  class="form-control input-sm" placeholder="Salary paid month">
                                            <div class="invalid-feedback">Oops, you missed one fields</div>
                                    </div>
                            
                                        
                            
                                        <input type="submit" value="submit" name="submit" class="btn btn-info btn-block submit">
                            
                                      </form>
                                    </div>
                                  </div>
                                </div>
                              </div>

                              <a href="#addCustCare" role="button" class="btn btn-outline-success mr-4" data-toggle="modal">ADD ENTRY</a>




                        <!--  -->


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