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
  <link rel="stylesheet" href="/css/floatmessage.css">
  <title>TRAVELIA!</title>
</head>

<body>

  <!-- header part starts -->

  <header class="header-part">
    <div class="items container-fluid bg-dark">
      <nav class="navbar navbar-expand-lg navbar-light">
        <a class="navbar-brand" href="">
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
              <a class="" href="">Home <span class="sr-only">(current)</span></a>
            </li>

            <li class="dhover1 nav-item dropdown pr-4 pb-0">
              <a class=" dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown"
                aria-haspopup="true" aria-expanded="false">
                destinations
              </a>
              <div class="dropdown-menu bg-dark dmenu1" aria-labelledby="navbarDropdown">
                <a class="dropdown-item" class="chittagong"  href="/travelia/destinations/chittagong">CHITTAGONG</a>
                <a class="dropdown-item" id="sylhet" href="/travelia/destinations/sylhet">SYLHET</a>
                <a class="dropdown-item" class="rajshahi" href="/travelia/destinations/rajshahi">RAJSHAHI</a>
                <a class="dropdown-item" class="khulna" href="/travelia/destinations/khulna">KHULNA</a>
                <a class="dropdown-item" class="barishal" href="/travelia/destinations/barishal">BARISHAL</a>
                <div class="dropdown-divider"></div>
                <a class="dropdown-item" class="dhaka" href="/travelia/destinations//dhaka">DHAKA</a>
              </div>
            </li>

            <li class="nav-item pr-4">
              <a class="" href="howitworks.html">how it works <span class="sr-only">(current)</span></a>
            </li>

            <li class="nav-item pr-4">
              <a class="" href="help.html">help <span class="sr-only">(current)</span></a>
            </li>


          </ul>
          <form class="form-inline my-2 my-lg-0">
            <!-- <input class="form-control mr-sm-2" type="search" placeholder="Search" aria-label="Search"> -->
            <!-- <button class="btn btn-outline-success my-2 my-sm-0 mr-4" type="submit">Sign in</button> -->
            <a href="#loginModal" role="button" class="btn btn-outline-success mr-4" data-toggle="modal">Login</a>
            <a href="#signupModal" role="button" class="btn btn-outline-success mr-4" data-toggle="modal">Sign up</a>
            <!-- <button class="btn btn-outline-success my-2 my-sm-0" data-target="#reg-form" type="submit">Sign up</button> -->
          </form>
        </div>
      </nav>
    </div>
  </header>

  <!-- header part ends -->

  <!-- picture part starts -->
  <section class="picture-part">

    <div class="bd-example">
      <div id="carouselExampleCaptions" class="carousel slide" data-ride="carousel">
        <ol class="carousel-indicators">
          <li data-target="#carouselExampleCaptions" data-interval="1300" data-slide-to="0" class="active"></li>
          <li data-target="#carouselExampleCaptions" data-interval="1300" data-slide-to="1"></li>
          <li data-target="#carouselExampleCaptions" data-interval="1300" data-slide-to="2"></li>
        </ol>
        <div class="carousel-inner">
          <div class="carousel-item active">
            <img src="/images/travelia/place-1.jpg" class="d-block w-100 wow heartBeat" data-wow-duration="10s"
              data-wow-iteration="90" alt="...">
            <div class="carousel-caption d-none d-md-block">
              <h5>paharpur</h5>
              <br>
              <p>Somapuri mahabhihara in paharpur</p>
            </div>
          </div>
          <div class="carousel-item">
            <img src="/images/travelia/place-2.jpg" class="d-block w-100 wow pulse" data-wow-duration="3s"
              data-wow-iteration="90" alt="...">
            <div class="carousel-caption d-none d-md-block">
              <h5>St. Martin's island</h5>
              <br>
              <p>Saint Martin's Beach</p>
            </div>
          </div>
          <div class="carousel-item">
            <img src="/images/travelia/place-3.jpg" class="d-block w-100 wow heartBeat" data-wow-duration="8s"
              data-wow-iteration="90" alt="...">
            <div class="carousel-caption d-none d-md-block">
              <h5>Gaur</h5>
              <br>
              <p>Chotto sona masjid</p>
            </div>
          </div>
        </div>
        <a class="carousel-control-prev" href="#carouselExampleCaptions" role="button" data-slide="prev">
          <span class="carousel-control-prev-icon" aria-hidden="true"></span>
          <span class="sr-only">Previous</span>
        </a>
        <a class="carousel-control-next" href="#carouselExampleCaptions" role="button" data-slide="next">
          <span class="carousel-control-next-icon" aria-hidden="true"></span>
          <span class="sr-only">Next</span>
        </a>
      </div>
    </div>


  </section>
  <!-- picture part ends -->

  <!-- holiday part starts -->
  <section class="holiday-part">
    <div class="items text-center">
      <h3>Choose Your</h3>
      <br>
      <h1>PERFECT HOLIDAY</h1>
    </div>
    <div class="items2">
      <div class="container">
        <div class="row ">
          <div class="col-md-3">
            <div class="place text-center">
              <figure class="wow slideInLeft">

                <img src="/images/travelia/chittagong.jpg" alt="">
                <h3>Chittagong</h3>
              </figure>
            </div>
          </div>
          <div class="col-md-3">
            <div class="project wow slideInUp">
              <div class="project__card">
                <a href="" class="project__image"><img src="/images/travelia/chitt-1.png" width=600 height=400
                    alt=""></a>
                <div class="project__detail">
                  <h2 class="project__title"><a href="#">Cox's Bazar</a></h2>
                  <small class="project__category"><a href="#">remarkable beach</a></small>
                </div>
              </div>
            </div>

          </div>
          <div class="col-md-3">

            <div class="project wow slideInUp">
              <div class="project__card">
                <a href="" class="project__image"><img src="/images/travelia/chitt-2.png" width=600 height=400
                    alt=""></a>
                <div class="project__detail">
                  <h2 class="project__title"><a href="#">Saint Martin</a></h2>
                  <small class="project__category"><a href="#">a lovely beach</a></small>
                </div>
              </div>
            </div>

          </div>
          <div class="col-md-3">

            <div class="project wow slideInUp">
              <div class="project__card">
                <a href="" class="project__image"><img src="/images/travelia/chitt-3.png" width=600 height=400
                    alt=""></a>
                <div class="project__detail">
                  <h2 class="project__title"><a href="#">Nilachal</a></h2>
                  <small class="project__category"><a href="#">beautiful place in bandarban</a></small>
                </div>
              </div>
            </div>

          </div>
        </div>
        <!--  -->
        <div class="row">

          <div class="col-md-3">
            <div class="project">
              <div class="project__card">
                <a href="" class="project__image"><img src="/images/travelia/syl-1.png" width=600 height=400 alt=""></a>
                <div class="project__detail">
                  <h2 class="project__title"><a href="#">Ratargul Forest</a></h2>
                  <small class="project__category"><a href="#">ride through the calm</a></small>
                </div>
              </div>
            </div>

          </div>
          <div class="col-md-3">

            <div class="project">
              <div class="project__card">
                <a href="" class="project__image"><img src="/images/travelia/syl-2.png" width=600 height=400 alt=""></a>
                <div class="project__detail">
                  <h2 class="project__title"><a href="#">Bisnakandi</a></h2>
                  <small class="project__category"><a href="#">a lovely place</a></small>
                </div>
              </div>
            </div>

          </div>
          <div class="col-md-3">

            <div class="project">
              <div class="project__card">
                <a href="" class="project__image"><img src="/images/travelia/syl-3.png" width=600 height=400 alt=""></a>
                <div class="project__detail">
                  <h2 class="project__title"><a href="#">Jaflong</a></h2>
                  <small class="project__category"><a href="#">crystal clear waterfalls</a></small>
                </div>
              </div>
            </div>

          </div>
          <div class="col-md-3">
            <div class="place text-center">
              <figure class="wow lightSpeedIn">

                <img src="/images/travelia/sylhet.jpg" alt="">
                <h3>Sylhet</h3>
              </figure>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>
  <!-- holiday part ends -->

  <!-- plan part starts -->
  <section class="plan-part">

    <div class="items text-center">
      <h2>Go & Discover</h2>
      <h1>Breathtaking cities</h1>
    </div>
    <div class="items2 container">
      <div class="row">
        <div class="col-md-4 text-center text-white">
          <i class="fas fa-utensils"></i>
          <p>Restaurent</p>
          <h6>Lovely restaurents and delicious food!</h6>
        </div>
        <div class="col-md-4 text-center text-white">
          <i class="fas fa-route"></i>
          <p>Sightseeing</p>
          <h6>Top Hop-On Hop-Off Destinations</h6>
        </div>
        <div class="col-md-4 text-center text-white">
          <i class="fas fa-hotel"></i>
          <p>Where to stay</p>
          <h6>Book cheap, budget and luxury hotels at best price ...</h6>
        </div>
      </div>
    </div>


  </section>
  <!-- plan part ends -->

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





  <!-- login part starts -->

  


  <div id="loginModal" class="modal fade" tabindex="-1" role="dialog" aria-hidden="true">
    <div class="modal-dialog">
      <div class="modal-content">
        <div class="modal-header">
          <h3>Login</h3>
          <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
        </div>
        <div class="modal-body">
          <form class="form" action="/login" method="POST">
            <div class="form-group">

              <label for="uname1">Email address</label>
              <input type="text" class="form-control form-control-lg" name="email" id="loginemail" value="{{ $login[0] }}">
              <div class="invalid-feedback">Oops, you missed this one.</div>
            </div>
            <div class="form-group">
              <label>Password</label>
              <input type="password" class="form-control form-control-lg" id="loginpassword" name="password" value="{{ $login[1] }}">

              <div class="invalid-feedback">Enter your password too!</div>
            </div>
            <div class="custom-control custom-checkbox">
              <input type="checkbox" name="remember" class="custom-control-input" id="rememberMe" {{ $login[3] }} >
              <label class="custom-control-label" for="rememberMe">Remember me on this computer</label>
            </div>
            <div class="form-group py-4">
              <button class="btn btn-outline-secondary btn-lg" data-dismiss="modal" aria-hidden="true">Cancel</button>
              <input type="submit" name="submit" value="submit" class="btn btn-success btn-lg float-right"
                id="btnLogin"></input>
            </div>
          </form>
        </div>
      </div>
    </div>
  </div>
  <!-- login part ends -->


  <!-- sign up part starts -->


  <div class="modal fade " tabindex="-1" role="dialog" aria-hidden="true" id="signupModal">
    <div class=" modal-dialog">
      <div class=" modal-content">

        <div class="modal-header">
          <h3>Registration</h3>
          <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
        </div>
        <div class="modal-body">
          <form id="reg_form" action="/travelia" method="post">
            <div class="row">
              <div class="col-xs-6 col-sm-6 col-md-6">
                <div class="form-group">
                  <input type="text" name="firstname" id="first_name" class="form-control input-sm"
                    placeholder="First Name" value="{{old('firstname')}}">
                  <div class="invalid-feedback">Oops, you missed first name</div>
                </div>
              </div>
              <div class="col-xs-6 col-sm-6 col-md-6">
                <div class="form-group">
                  <input type="text" name="lastname" id="last_name" class="form-control input-sm"
                    placeholder="Last Name" value="{{old('lastname')}}">
                  <div class="invalid-feedback">Oops, you missed last name</div>
                </div>
              </div>
            </div>

            <div class="form-group">
              <input type="email" name="email" id="email" value="{{old('email')}}" class="form-control input-sm" placeholder="Email Address">
              <div class="invalid-feedback">Oops, you missed email address</div>
            </div>

            <div class="form-group">
              <label for="exampleFormControlSelect1">User type</label>
              <select class="form-control user_type" name="usertype" id="exampleFormControlSelect1">
                <option>Travel guider</option>
                <option>Hotel Emp</option>
                <option>Traveller</option>
              </select>
            </div>

            <div class="form-group">
              <input type="text" name="address" value="{{old('address')}}" id="address" class="form-control input-sm" placeholder="Address">
              <div class="invalid-feedback">Oops, you missed address</div>
            </div>

            <div class="form-group">
              <input type="number" name="phoneno" value="{{old('phoneno')}}" id="phoneno" class="form-control input-sm" placeholder="Phone no">
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

            <input type="submit" value="Register" name="submit" class="btn btn-info btn-block submit">

          </form>
        </div>
      </div>
    </div>
  </div>

  <!-- sign up part ends -->

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




  <!-- Optional JavaScript -->
  <!-- jQuery first, then Popper.js, then Bootstrap JS -->

 
  <script src="/js/jquery-3.4.1.min.js"></script>
  <script src="/js/popper.min.js"></script>
  <script src="/js/bootstrap.min.js"></script>
  <script src="/js/wow.js"></script>
  <script src="/js/jquery.hover3d.js"></script>
  <script src="/js/jquery-confirm.min.js"></script>
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




  <script>

  if ("{{$login[4]}}" == "unsuccessful") {
    $.alert({
      title: "Alert!",
      content: "Invalid Registration",
    });
  }
  else if ("{{$login[4]}}" == "successful") {

    $.alert({
      title: "Alert!",
      content: "Registration Successful",
    });

  }
  else {

    
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

    var wow = new WOW();
    wow.init();


  </script>
  <script></script>


</body>

</html>