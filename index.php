
<!DOCTYPE html>

    
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="icon" href="../../favicon.ico">

    <title>Justified Nav Template for Bootstrap</title>

    <!-- Bootstrap core CSS -->
    <link href="/dist/css/bootstrap.css" rel="stylesheet">

	<link href="/css/carousel.css" rel="stylesheet">
    <!-- Custom styles for this template -->
    <link href="justified-nav.css" rel="stylesheet">
    
    <link href="/css/main.css" rel="stylesheet">
    
    <link href='http://fonts.googleapis.com/css?family=Ledger' rel='stylesheet' type='text/css'>
   
    <!-- Just for debugging purposes. Don't actually copy these 2 lines! -->
    <!--[if lt IE 9]><script src="../../assets/js/ie8-responsive-file-warning.js"></script><![endif]-->
    <script src="../../assets/js/ie-emulation-modes-warning.js"></script>

    <!-- IE10 viewport hack for Surface/desktop Windows 8 bug -->
    <script src="../../assets/js/ie10-viewport-bug-workaround.js"></script>

    <!-- HTML5 shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
  </head>

  <body id="home">
    
    <div class="container">
      <div data-brackets-id='180' class="masthead">
      
      <? $sec="home";
      include ("modules/includes/hdr.php"); ?>
      
      </div>

     
      
 
       <!-- Carousel
    ================================================== -->
    <div id="myCarousel" class="carousel slide" >
      <!-- Indicators -->
      <ol class="carousel-indicators">
        <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
        <li data-target="#myCarousel" data-slide-to="1"></li>
        <li data-target="#myCarousel" data-slide-to="2"></li>
      </ol>
      <div class="carousel-inner">
        <div class="item active">
          <img src="../images/vancity.jpg" alt="First slide" height="650px">
          <div class="container">
            <div class="carousel-caption">
             <div class="carousel-caption-header">
             	 <h1>Welcome New Students!</h1>
             </div>
              <p>Welcome to BCIT Civil Engineering's Student Society. The BCIT Chapter of the CSCE is here to help students build connections and get the most out of their BCIT experience. From student competitions and educational seminars to social events and sports, the CSCE can help!</p>
              <p><a class="btn btn-lg btn-primary" href="/about" role="button">Learn more</a></p>
            </div>
          </div>
        </div>
        <div class="item">
          <img src="/images/Troitsky1.jpg" alt="Second slide">
          <div class="container">
            <div class="carousel-caption">
            	<div class="carousel-caption-header">
              <h1>Get out there!</h1>
            	</div>
              <p>Build bridges and crush them! The CSCE makes it possible. Whether it's competitions or competitive sports, we organize and fund too many student activities to list here.
              </p>
              <p><a class="btn btn-lg btn-primary" href="/about" role="button">Learn more</a></p>
            </div>
          </div>
        </div>
        <div class="item">
          <img src="/images/pronight.jpg" alt="Third slide">
          <div class="container">
            <div class="carousel-caption">
              <div class="carousel-caption-header">
              <h1>Put your knowledge to work.</h1>
              </div>
              <p>The CSCE helps you put it all together by organizing our annual professional night. Members have the opportunity to meet leaders in the local engineering community at an informal evening where we thank our sponsors for making it all possible.</p>
              <p><a class="btn btn-lg btn-primary" href="/professional-night" role="button">Learn more</a></p>
            </div>
          </div>
        </div>
      </div>
      <a class="left carousel-control" href="#myCarousel" role="button" data-slide="prev"><span class="glyphicon glyphicon-chevron-left"></span></a>
      <a class="right carousel-control" href="#myCarousel" role="button" data-slide="next"><span class="glyphicon glyphicon-chevron-right"></span></a>
    </div><!-- /.carousel -->

   
      <!-- Example row of columns -->
      <div class="row">
        <div class="col-lg-4">
          <h2>President's Award</h2>
         <p>The BCIT Student Chapter has again been named recipient of the CSCE's President's Award. This is the second time BCIT has received this award, previously in 2011.</p>
             <p>The CSCE President's Award recognizes the exceptional accomplishments of the chapter over the past school year.</p>
            <p> Congratulations are in order for UBC who recieved 'Most Improved Chapter', signalling the continuing growth of the CSCE in the Western Provinces.</p>
          <p><a class="btn btn-primary" href="/presidents-award" role="button">View details &raquo;</a></p>
        </div>
        <div class="col-lg-4">
          <h2>Professional Night</h2>
          <p>This year, our 8th annual professional night is being held on February 20, 2014. The purpose of this event is to give professionals the opportunity to network and discuss career paths with students. The event also allows students to develop a better understanding of the Civil Engineering Industry. </p>
          <p><a class="btn btn-primary" href="/professional-night" role="button">View details &raquo;</a></p>
       </div>
        <div class="col-lg-4">
          <h2>Social Events and Competitions</h2>
          <p>The BCIT CSCE Student club is very active in encouraging and supporting our members to participate in student competitions and social events. The club hosts many social events each year, which allow students to take a break from their course, work and relax with peers. Our club also supports student competitions allowing our members to compete with other schools, and gain knowledge from outside the class room.</p>
          <p><a class="btn btn-primary" href="/events" role="button">View details &raquo;</a></p>
        </div>
      </div>

      <!-- Site footer -->
      <div class="footer">
        <p>&copy; Company 2014</p>
      </div>

    </div> <!-- /container -->


    <!-- Bootstrap core JavaScript
    ================================================== -->
    <!-- Placed at the end of the document so the pages load faster -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>
    <script src="../../dist/js/bootstrap.min.js"></script>
    <script src="../../assets/js/docs.min.js"></script>
  </body>
</html>
