<!doctype html>
<html lang="en">

<head>
  <!-- Required meta tags -->
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

  <!-- Bootstrap CSS -->
  <link rel="stylesheet" type="text/css" href="/css/bootstrap.min.css">
  <link rel="stylesheet" href="/css/traveliaStyle.css">
  <link rel="stylesheet" href="/css/animate.css"> <!-- included in wow js -->
  <link rel="stylesheet" href="/css/all.min.css">
  <link rel="stylesheet" href="/css/jquery-confirm.min.css">
  <title>TRAVELIA!</title>
</head>

<body>

  <!-- header part starts -->

  <header class="header-part">
    <div class="items container-fluid bg-dark">
      <nav class="navbar navbar-expand-lg navbar-light">
        <a class="navbar-brand" href="index.html">
          <img class="wow rotateIn" src="/images/travelia/logo.png" data-wow-duration="3s" data-wow-iteration="40"
            height="50" width="60" alt="">
        </a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent"
          aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>

        <div class="collapse navbar-collapse" id="navbarSupportedContent">
          <ul class="navbar-nav m-auto">
            <li class="nav-item active pr-4">
              <a class="" href="/traveller">Home <span class="sr-only">(current)</span></a>
            </li>

            <li class="dhover1 nav-item dropdown pr-4 pb-0">
              <a class=" dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown"
                aria-haspopup="true" aria-expanded="false">
                destinations
              </a>
              <div class="dropdown-menu bg-dark dmenu1" aria-labelledby="navbarDropdown">
                <a class="dropdown-item" href="">CHITTAGONG</a>
                <a class="dropdown-item" href="">SYLHET</a>
                <a class="dropdown-item" href="">RAJSHAHI</a>
                <a class="dropdown-item" href="">KHULNA</a>
                <a class="dropdown-item" href="">BARISHAL</a>
                <div class="dropdown-divider"></div>
                <a class="dropdown-item" href="">DHAKA</a>
              </div>
            </li>

            <li class="nav-item pr-4">
              <a class="" href="">how it works <span class="sr-only">(current)</span></a>
            </li>

            <li class="nav-item pr-4">
              <a class="" href="">help <span class="sr-only">(current)</span></a>
            </li>


          </ul>
          <form class="form-inline my-2 my-lg-0">
                      
            <li class="account nav-item dropdown pr-4 pb-0">
                    <a class=" dropdown-toggle" href="#" id="navbarDropdown" role="button"
                        data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                        <i class="fas fa-user-circle"></i>
                         Account
                    </a>
                    <div class="dropdown-menu bg-dark account-menu" aria-labelledby="navbarDropdown">
                        <a class="dropdown-item" href="">My info</a>
                        <div class="dropdown-divider"></div>
                        <a class="dropdown-item" href="">My bookings</a>
                        
                    </div>
                </li>
            <a href="" class="bell mr-4">
                <i class="fas fa-bell"></i>
            </a>

            <a href="/logout" role="button" class="btn btn-outline-success mr-4">Log out</a>
        </form>
        </div>
      </nav>
    </div>
  </header>

  <!-- header part ends -->


  <!-- mybookings starts -->
  <section class="mybooking-part">

        <table class="table table-hover wow flipInX table-dark">
                <thead>
                  <tr >
                    <th scope="col">#</th>
                    <th scope="col">Hotel Email</th>
                    <th scope="col">Hotel Name</th>
                    <th scope="col">Check in</th>
                    <th scope="col">Check out</th>
                    <th scope="col">Days</th>
                    <th scope="col">Room type</th>
                    <th scope="col">Total Cost</th>
                    <th scope="col">Status</th>
                    <th scope="col">Message</th>
                  </tr>
                </thead>
                <tbody>
         <?php
          $count =0;
          ?>
         @foreach($result as $result) 
            <?php $count++;  ?>
             @if($result->status=="requested")
                <?php $btn="success"; ?>
             
             @else
                <?php $btn = "danger"; ?>
             
            @endif
               
       <form action="" method="post" >
       <input type="hidden" name="id"  value="{{ $result->id }}">
       <input type="hidden" name="hotelempmail"  value="{{ $result->hotelempmail }}">

      
    
           <tr>
               <th scope="row"><?=$count?></th>
               <td>{{ $result->hotelempmail }}</td>
               <td>{{ $result->hotelname }}</td>
               <td>{{ $result->checkin }}</td>
               <td>{{ $result->checkout }}</td>
               <td>{{ $result->days }}</td>
               <td>{{ $result->roomtype }}</td>
               <td>{{ $result->totalcost }}</td>
               
               <td> 
                 {{ $result->status }}
                 @if($result->status=="requested")
                 <input type="submit" class="btn btn-danger" name="submit" value="Cancel">
                 @endif
                </td>
             
                <td>
                    <input type="text" name="messagebox">
                    <input type="submit" name="submit" value="send" class="btn btn-primary" >
                </td>
            </tr>
        </form> 
    
@endforeach
                </tbody>
              </table>

  </section>
  <!-- mybookings ends -->

  

  <!-- footer part starts -->
  <section class="footer-part">
    <div class="container">
      <div class="items text-center">
        <img src="/images/travelia/logo.png" alt="">
        <div class="info">
          <div class="row">
            <div class="col-md-7 text-white">
              <h4>More Info</h4>
              <h6>OUR AGREEMENT</h6>
              <br>
              <h6>BOOK NOW!</h6>
              <H4>Follow Us</H4>
              <div class="icons">
                <i class="fab fa-instagram"></i>
                <i class="fab fa-facebook"></i>
                <i class="fab fa-twitter"></i>
                <i class="fab fa-google-plus"></i>
              </div>
            </div>
            <div class="col-md-5 text-white">
              <h4>Have Any Question ?</h4>
              <h6>VISIT HELP CENTER</h6>
              <br>
              <h6>CONTACT US</h6>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>
  <!-- footer part ends -->





  



  <!-- Optional JavaScript -->
  <!-- jQuery first, then Popper.js, then Bootstrap JS -->

  <!-- <script src="../js/jquery-3.4.1.min.js"></script>
    <script src="../js/popper.min.js"></script>
    <script src="../js/bootstrap.min.js"></script> -->
  <script src="/js/jquery-3.4.1.min.js"></script>
  <script src="/js/popper.min.js"></script>
  <script src="/js/bootstrap.min.js"></script>
  <script src="/js/wow.js"></script>
  <script src="/js/jquery.hover3d.js"></script>
  <script src="/js/jquery-confirm.min.js"></script>




  <script>

  if("{{$msg}}"=="message sent"){

    $.alert({
      title: "Alert!",
      content: "Message sent",
    });


  }
  else{

    
  }

    $('.dhover1, .dmenu1').mouseenter(function () {
      $('.dmenu1').fadeIn();
    });
    $('.dhover1').mouseleave(function () {
      $('.dmenu1').fadeOut();
    });


    $('.dhover2, .dmenu2').mouseenter(function () {
      $('.dmenu2').fadeIn();
    });
    $('.dhover2').mouseleave(function () {
      $('.dmenu2').fadeOut();
    });

    $('.account, .account-menu').mouseenter(function () {
            $('.account-menu').fadeIn();
        });
        $('.account').mouseleave(function () {
            $('.account-menu').fadeOut();
        });


    var wow = new WOW();
    wow.init();


  </script>
  <script></script>


</body>

</html>