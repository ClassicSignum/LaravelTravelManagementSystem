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
                        <div class="row">
                            <div class="col-md-6">
                                <div class="users">
                                    <canvas id="myUser"></canvas>
                                    <p>Graph of users</p>

                                </div>
                            </div>
                            <div class="col-md-6">

                                <canvas id="myProduct"></canvas>
                                <p>Chart of places</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

        </div>

    </section>
    <!-- admin dash part ends -->


     <!-- floating message part starts -->
  <div class="floating-chat">
        <i class="fas fa-comments"></i>
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
    
            <!-- <li class="self">......... -___-</li> -->
            <!-- <li class="self">Hello!</li> -->
           
          
        </ul>
          <div class="footer">
            <div class="text-box" contenteditable="true" disabled="true"></div>
            <button id="sendMessage1">send</button>
          </div>
        </div>
      </div>
      <!-- floating message part ends -->









    <script src="/js/jquery-3.4.1.min.js"></script>
    <script src="/js/popper.min.js"></script>
    <script src="/js/bootstrap.min.js"></script>
    <script src="/js/Chart.min.js"></script>
    <script src="/js/floatmessage.js"></script>
   


    <script type="text/javascript">
		jQuery(function($){
			// Websocket
			var websocket_server = new WebSocket("ws://localhost:8080/");
			websocket_server.onopen = function(e) {
				websocket_server.send(
					JSON.stringify({
						'type':'socket'
						
					})
				);
			};
			websocket_server.onerror = function(e) {
				// Errorhandling
			}
			websocket_server.onmessage = function(e)
			{
				var json = JSON.parse(e.data);
                
				switch(json.type) {
					case 'chat':
						// $('.messages').append("<li class='other'>"+json.msg+"</li>");
						$('.messages').append(json.msg);
						break;
				}
			}
			
            $('#sendMessage1').click(function(){
            var chat_msg = $('.text-box').text();

            // chat_msg="you "+chat_msg;
					websocket_server.send(
						JSON.stringify({
							'type':'chat',
							'chat_msg':chat_msg
						})
					);
					// $(this).val('');
                    $('.text-box').text('');
          });
		
		});
		</script>


    <!-- <script defer src="http://localhost:3000/admin/socket.io/socket.io.js"></script> -->
    <!-- <script src="../../script.js"></script> -->
    <!-- <script src="/js/script.js"></script> -->
    <!-- chart js starts -->
    <script>


        var ctx = document.getElementById('myUser').getContext('2d');
        
        var myUser = new Chart(ctx, {
            type: 'bar',
            data: {
                labels: ['Traveller', 'Hotel Emp', 'Travel Guider', 'Care'],
                datasets: [{
                    label: 'User Catagory',
                    data: [ "{{ $traveller }}" , "{{ $hotel }}", "{{ $guider }}","{{ $care }}"],
                    backgroundColor: [
                        'rgba(255, 99, 132, 0.2)',
                        'rgba(54, 162, 235, 0.2)',
                        'rgba(255, 206, 86, 0.2)',
                        'rgba(155, 155, 155, 0.2)'

                    ],
                    borderColor: [
                        'rgba(255, 99, 132, 1)',
                        'rgba(54, 162, 235, 1)',
                        'rgba(255, 206, 86, 1)',
                        'rgba(155, 155, 155, 1)'
                    ],
                    borderWidth: 1
                }]
            },
            options: {
                scales: {
                    yAxes: [{
                        ticks: {
                            beginAtZero: true
                        }
                    }]
                },
                animation: {

                    easing: 'easeOutBounce',

                }

            }
        });


        ///////////
        var myPie = document.getElementById('myProduct').getContext('2d');
        var myProduct = new Chart(myPie, {
            type: 'pie',
            data: {
                labels: ['Dhaka', 'Rajshahi', 'Khulna', 'Chittagong', 'Barishal', 'Sylhet'],
                datasets: [{
                    label: 'Places chart',
                    data: ["{{ 0 }}", "{{ $raj }}", "{{ $khu }}", "{{ $chit }}", "{{ 0 }}", "{{ $syl }}"],
                    backgroundColor: [
                        'rgba(180, 24, 180, 0.2)',
                        'rgba(0, 0, 255, 0.2)',
                        'rgba(0, 128, 0, 0.2)',
                        'rgba(255, 255, 0, 0.2)',
                        'rgba(255, 0, 0, 0.2)',
                        'rgba(0, 0, 0, 0.2)',

                    ],
                    borderColor: [
                        'rgba(180, 24, 180, 1)',
                        'rgba(0, 0, 255, 1)',
                        'rgba(0, 128, 0, 1)',
                        'rgba(255, 255, 0, 1)',
                        'rgba(255, 0, 0, 1)',
                        'rgba(0, 0, 0, 1)',

                    ],
                    borderWidth: 1
                }]
            },
            options: {
                animation: {

                    easing: 'easeOutBounce',

                }

            }
        });
    </script>
    <!-- chart js ends -->

</body>

</html>