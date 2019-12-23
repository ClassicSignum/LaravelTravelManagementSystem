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

                        <table class="table table-hover wow flipInX table-dark">
                            <thead>
                                <tr>
                                    <th scope="col">#</th>
                                    <th scope="col">Traveller Email</th>
                                    <th scope="col">Check-in</th>
                                    <th scope="col">Check-out</th>
                                    <th scope="col">Requested days</th>
                                    <th scope="col">Room type</th>
                                    <th scope="col">Total Cost</th>
                                    <th scope="col">Status</th>
                                    <th scope="col">Action</th>
                                    <!-- <th scope="col">Message</th> -->
                                </tr>
                            </thead>
                            <tbody>

                                    <?php
                                     $count =0;
                                    ?>
                                    @foreach($result as $result) 
                                       <?php $count++; ?>
                                    
                                <form action="" method="post">
                                       
                                    <input type="hidden" name="id" value="{{ $result->id }}">



                                    <tr>
                                        <th scope="row"><?= $count ?></th>
                                        <td>{{ $result->travellermail }}</td>
                                        <td>{{ $result->checkin }}</td>
                                        <td>{{ $result->checkout }}</td>
                                        <td>{{ $result->days }}</td>
                                        <td>{{ $result->roomtype }}</td>
                                        <td>{{ $result->totalcost }}</td>
                                        <td>{{ $result->status }}</td>

                                      
                         @if($result->status=="requested")

                            <td> 
                                    <input type="submit" class="btn btn-success" name="submit" value="Accept">
                                    <br>
                                    <br>
                                        <input type="submit" class="btn btn-danger" name="submit" value="Reject">
                                        </td>

                                     
                                        @else
                                        <td>
                                            
                                        </td>

                                @endif



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
    <script src="/socket.io/socket.io.js"></script>

    <script>

        $(function () {

            var socket = io();
            $('#message-container').submit(function (e) {
                e.preventDefault(); // prevents page reloading
                $selfMsg = $('#message-input').val();
                socket.emit('send-chat-message', $('#message-input').val());
                $('.messages').append($('<li class="other">').text($selfMsg));
                $('#message-input').val('');
                return false;
            });
            socket.on('chat-message', function (msg) {
                $('.messages').append($('<li class="self" >').text("CUSTOMER CARE:" + msg));
            });
        });



    </script>


</body>

</html>