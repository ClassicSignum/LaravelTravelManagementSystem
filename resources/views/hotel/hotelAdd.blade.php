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


<style>
    .item2 form {
        width: 90%;
    }
</style>

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
                   
                        <form method="post" enctype="multipart/form-data">

                            <div class="prev-part">
                                <label for="">Hotel Name:</label>
                                <input type="text" name="hotelname" id="hotelname" class="form-control">
                                <br>
                                <label for="">Division:</label>
                                <select name="division" id="division" class="form-control divis">
                                    <option value="dhaka">Dhaka</option>
                                    <option value="rajshahi">Rajshahi</option>
                                    <option value="khulna">Khulna</option>
                                    <option value="barishal">Barishal</option>
                                    <option value="sylhet">Sylhet</option>
                                    <option value="chittagong">Chittagong</option>
                                </select>
                                <br>
                                <input type="submit" value="next->" name="submit" id="divisionSubmit"
                                    class="btn btn-outline-success">
                            </div>
                            <br>
                            <div class="next-part">


                            </div>


                            <!-- <input type="submit" id="submitall" name="submit" value="submit" class="btn btn-success mt-2"> -->

                        </form>


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

        var ajaxcall;
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

        $('#submitall').click(function () {
            ajaxcall.abort();
        });

        $('#divisionSubmit').click(function () {
            //////////////
            $nxt = $('.next-part');


            $div = $('#division').val();

            $hotelname = $('#hotelname').val();

            if ($div == "" || $hotelname == "") {

            }
            else {

                $('.prev-part').remove();

                $('.next-part').append('<label for="">Location:</label>');
                $('.next-part').append('<select name="location" id="location" class="form-control">');

                var result = {!! json_encode($result->toArray()) !!};

                for(var i = 0; i<result.length; i++){
                    if($div==result[i].division){
                        $('#location').append('<option value="'+result[i].travelplace+'"> '+result[i].travelplace+'</option>');
                    }
                }
                
                  
                 
               
                   
               

                    $('.next-part').append('<label for="">Total rooms:</label> <br>');
                $('.next-part').append('<input type="number" name="totalroom" class="form-control"> <br>');

                $('.next-part').append('<input type="hidden" value="'+$hotelname+'" name="hotelname" class="form-control"> <br>');
                $('.next-part').append('<input type="hidden" value="'+$div+'" name="division" class="form-control"> <br>');

                $('.next-part').append('<label for="">single bed room price per night:</label>');
                $('.next-part').append('<input type="number" name="singlebed" class="ml-2">');

                $('.next-part').append('<label for="">double bed room price per night:</label>');
                $('.next-part').append('<input type="number" name="doublebed" class="ml-2">');

                $('.next-part').append('<label for="">suit room price per night:</label>');
                $('.next-part').append('<input type="number" name="suitbed" class="ml-2">');

                $('.next-part').append('<label for="">description or feature:</label> <br>');
                $('.next-part').append(' <textarea name="description" id="" cols="50" rows="5"></textarea>');



                $('.next-part').append(' <label for="">Add Hotel Photo:</label>');

                $('.next-part').append(' <input type="file" name="file" class="form-control-file">');

                $('.next-part').append('<input type="submit" name="submit" value="submit" class="btn btn-success mt-2">');
            }


        });

            
    </script>


</body>

</html>