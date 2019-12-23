<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Hotel Employee!</title>

    <link rel="stylesheet" href="/css/bootstrap.min.css">
    <link rel="stylesheet" href="/css/all.min.css">
    <link rel="stylesheet" href="/css/admin.css">
    <!-- <link rel="stylesheet" href="/public/css/admin.scss"> -->
    <link rel="stylesheet" href="/css/floatmessage.css">
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
                                <a href="/hotel">Home</a>
                            </div>
                        </div>

                        <div class="row btns">

                            <div class="col-md-3">
                                <i class="fas fa-info-circle"></i>
                            </div>
                            <div class="col-md-9 text-center">
                                <a href="/hotel/hotelProfile">My Info</a>
                            </div>
                        </div>

                        <div class="row btns">

                            <div class="col-md-3">
                                <i class="fas fa-hotel"></i>
                            </div>
                            <div class="col-md-9 text-center">
                                <a href="/hotel/hotelAdd">Add my hotel</a>
                            </div>
                        </div>

                        <div class="row btns">

                            <div class="col-md-3">
                                <i class="fas fa-hotel"></i>
                            </div>
                            <div class="col-md-9 text-center">
                                <a href="/hotel/hotelReq">Booking req</a>
                            </div>
                        </div>

                       


                    </div>
                </div>
                <div class="col-md-10">
                    <div class="items2">

                    
                      <?php $room=0;
                      $cost[0]=0;
                      ?>
                      @if(!empty($result))

                      @foreach(explode(",",$result->roomtypes) as $roomtype)

                     <?php 
                     $cost[$room] = preg_replace('/\D/', '', $roomtype); 
                     $room++;
                     ?>

                     @endforeach

                       
                      
                   
                    

                        <form action="" method="post">
                                <label for="">Hotel Name</label>
                                <input type="text" name="hotelname" value="{{ $result->hotelname }}" class="form-control " id="hotelname">

                                <label for="">Total Rooms</label>
                                <input type="number" name="totalroom" value="{{ $result->totalroom }}" class="form-control " id="totalroom">

                                <label for="">Single bed room price per night</label>
                                <input type="number" name="singlebed" value="<?=$cost[0]?>" class="form-control " id="totalroom">
                                <label for="">Double bed Room price per night</label>
                                <input type="number" name="doublebed" value="<?=$cost[1]?>" class="form-control " id="totalroom">
                                <label for="">Suit Room price per night</label>
                                <input type="number" name="suit" value="<?=$cost[2]?>" class="form-control " id="totalroom">
                                
                                <input type="submit" value="update" name="submit" class="btn btn-outline-info mt-2">
                                <input type="submit" value="delete" name="submit" class="btn btn-outline-danger ml-3 mt-2">
                        </form>

                   
                       @endif
                    </div>
                </div>
            </div>

        </div>

    </section>
    <!-- admin dash part ends -->


    <!-- floating message part starts -->
  <div class="floating-chat">
    <i class="fas fa-comments"></i>

    <form action="" id="message-container">

        <div class="chat">
          <div class="header">
            <span class="title">
              what's on your mind?
            </span>
            <button>
              <i class="fas fa-times-circle"></i>
            </button>
    
          </div>
        <ul class="messages">
          
        </ul>
          <div class="footer">
            <!-- <div class="text-box" contenteditable="true" disabled="true"></div> -->
            <input type="text" class="text-box" id="message-input">
            <input type="submit" value="send" class="btn btn-outline-success" name="" id="sendMessage">
          </div>
        </div>
    </form>
  </div>
  <!-- floating message part ends -->









    <script src="/js/jquery-3.4.1.min.js"></script>
    <script src="/js/popper.min.js"></script>
    <script src="/js/bootstrap.min.js"></script>
    <script src="/js/Chart.min.js"></script>
    <script src="/js/floatmessage.js"></script>
    <!-- <script src="/socket.io/socket.io.js"></script> -->

<script>



  
    
</script>
   
    
</body>

</html>