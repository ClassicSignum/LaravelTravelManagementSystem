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
                                <a href="/admin/adminTraveller">Travel Guider Info</a>
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
                                      <tr >
                                        <th scope="col">#</th>
                                        <th scope="col">First Name</th>
                                        <th scope="col">Last Name</th>
                                        <th scope="col">Email</th>
                                        <th scope="col">Home Address</th>
                                        <th scope="col">Phone No:</th>
                                        <th scope="col">Password</th>
                                        <th scope="col">Status</th>
                                        <th scope="col">Action</th>
                                        <th scope="col">Message</th>
                                      </tr>
                                    </thead>
                                    <tbody>
                             <?php
                              $count =0;
                              ?>
                             @foreach($users as $users) 
                               <?php  $count++; ?>
                                 @if($users->status=="permitted")
                                    <?php $btn="success"; ?>
                                 
                                 @else
                                   <?php $btn = "danger"; ?>
                                 
                                @endif
                                   
                           <form action="" method="post" >
                           <input type="hidden" name="email"  value="{{ $users->usermail }}">

                          
                        
                               <tr>
                                   <th scope="row"><?= $count ?></th>
                                   <td>{{ $users->firstname }}</td>
                                   <td>{{ $users->lastname }}</td>
                                   <td>{{ $users->usermail }}</td>
                                   <td>{{ $users->address }}</td>
                                   <td>{{ $users->phoneno }}</td>
                                   <td>{{ $users->password }}</td>
                                   
                                   <td> <input type="submit" class="btn btn-<?=$btn?>" name="submit" value="{{ $users->status}}"></td>
                                   <td> <input type="submit" class="btn btn-warning" name="submit" value="delete account"></td>
                                    <td>
                                        <input type="text" name="messagebox">
                                        <input type="submit" name="submit" value="send" class="btn btn-primary" >
                                    </td>
                                </tr>
                            </form> 
                        
                   @endforeach
                                    </tbody>
                                  </table>

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