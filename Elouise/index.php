<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    <title>Blueasy Portfolio</title>
    <!-- Bootstrap -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
    <!--Fonts-->
    <link href="https://fonts.googleapis.com/css?family=Roboto" rel="stylesheet">
    <!--Custom CSS-->
    <link rel="stylesheet" type="text/css" href="css/style.css">
    <!--PHP to allow ifram sameorigin-->
  </head>
  <body>
  <!--Navbar-->
    
    <nav class="navbar fixed-top sticky-top navbar-inverse bg-inverse">
      <div class="container">
        <a class="navbar-brand" href="#"><span>E</span>louise</a>
        <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
          <div class="navbar-nav">
            <a class="nav-item nav-link active" href="#">Home <span class="sr-only">(current)</span></a>
            <a class="nav-item nav-link" href="#">Features</a>
            <a class="nav-item nav-link" href="#">Pricing</a>
            <a class="nav-item nav-link disabled" href="#">Disabled</a>
          </div>
        </div>
      </div>
    </nav>
    <!--End Navbar-->

    <!--Jumbotron-->
    <div class="jumbotron header">
      <h1 class="first">"I'm looking for the unexpected</h1><br>
      <h1>I'm looking for things I've never seen before."</h1>
    </div>
    <!--End Jumbotron-->

    <!--Services-->
    <div class="services">
    <div class="container">
      <h2>Services</h2>
      <hr>
      <div class="container">
        <div class="row">
          <div class="col-sm-3">
            <img src="">
            <h3>Landmark</h3>
            <p>Maybe you want a picture from the Golden Gate Bridge. Or you want a picture of the statue of liberty. Whatever landmark you want I got it!</p>
          </div>
          <div class="col-sm-3">
            <img src="">
            <h3>Weddings</h3>
            <p>For All the events you need. From weddings to prom or a school reunion. You can hire me for the event.</p>
          </div>
          <div class="col-sm-3">
            <img src="">
            <h3>Panoramics</h3>
            <p>Sometimes you just want a great photo for that websites but want it to be unique and not a stock picture. I only sell my Panoramic photos once and you will own all the rights for use as you please!</p>
          </div>
          <div class="col-sm-3">
            <img src="">
            <h3>Portraits</h3>
            <p>For the times where you need a professional photo taken from you! This service includes 5 unique shots, 2 for the head. You can use them for your professional endeavors!</p>
          </div>
        </div>
      </div>
    </div>
    </div>
    <!--End Services-->

    <!--Portfolio-->
    <div class="portfolio">
    <div class="container">
      <h2>Portfolio</h2>
      <ul>
        <a href="all"><li class="active">All</li></a>
        <a href="panorama"><li>Panoramas</li></a>
        <a href="portrait"><li>Portraits</li></a>
        <a href="event"><li>Events</li></a>
        <a href="landmark"><li>Landmarks</li></a>
      </ul>
      <hr>
      
        <div class="row"> <!--2 rows of images, begin row 1-->
          <div class="col-sm-3">
            <img src="" class="img-fluid portfolio-img">
          </div>
          <div class="col-sm-3">
            <img src="" class="img-fluid portfolio-img">
          </div>
          <div class="col-sm-3">
            <img src="" class="img-fluid portfolio-img">
          </div>
          <div class="col-sm-3">
            <img src="" class="img-fluid portfolio-img">
          </div>
        </div> <!--2 rows of images, end row 1-->
        <div class="row"> <!--2 rows of images, begin row 2-->
          <div class="col-sm-3">
            <img src="" class=" portfolio-img">
          </div>
          <div class="col-sm-3">
            <img src="" class="img-fluid portfolio-img">
          </div>
          <div class="col-sm-3">
            <img src="" class="img-fluid portfolio-img">
          </div>
          <div class="col-sm-3">
            <img src="" class="img-fluid portfolio-img">
          </div>
        </div> <!--2 rows of images, end row 2-->
    </div>
    </div>
    <!--End Portfolio-->

    <!--Philosophy-->
    <div class="philosophy">
      <div class="container">
        <div class="row">
          <div class="col-sm-7">
            <h2>Elouise Philosophy</h2>
            <p>Maybe you want a picture from the Golden Gate Bridge. Or you want a picture of the statue of liberty. Whatever landmark you want I got it For All the events you need. From weddings to prom or a school reunion.</p><p>You can hire me for the event. Sometimes you just want a great photo for that websites but want it to be unique and not a stock picture. I only sell my Panoramic photos once and you will own all the rights for use as you please! </p>
            <button>heyo</button>
          </div>
          <div class="col-sm-5">
            <iframe src="https://www.youtube.com/watch?v=0uaquGZKx_0"></iframe>
          </div>
        </div>
      </div>
    </div>
    <!--End Philosophy-->

    <!--Quote API Section-->
    <div class="quotes">
      <div class="container">
        <h2>Inspiration</h2>
        <hr>
        <p class="quote">
         Hey<!--Ajax info injection here-->
        </p>
      </div>
    </div>


    <!--END Quote API Section-->

    <!--Elouise Bio-->

    <div class="bio">
      <div class="container">
      <h2>Who is Elouise?</h2>
        <div class="row">
          <div class="col-sm-6">
            <p>
              Maybe you want a picture from the Golden Gate Bridge. Or you want a picture of the statue of liberty. Whatever landmark you want I got it For All the events you need. From weddings to prom or a school reunion. You can hire me for the event. 
            </p>
          </div>
          <div class="col-sm-6">
            <p>
              Maybe you want a picture from the Golden Gate Bridge. Or you want a picture of the statue of liberty. Whatever landmark you want I got it For All the events you need. From weddings to prom or a school reunion. You can hire me for the event. 
            </p>
          </div>
        </div>
        <div class="row"> <!--Second Bio Row-->
          <div class="col-sm-6">
            <p>
              Maybe you want a picture from the Golden Gate Bridge. Or you want a picture of the statue of liberty. Whatever landmark you want I got it For All the events you need. From weddings to prom or a school reunion. You can hire me for the event. 
            </p>
          </div>
          <div class="col-sm-6">
            <p>
              svgs
            </p>
          </div>
        </div>
      </div>
    </div>

    <!--END Elouise Bio-->

    <!--Testimonials-->
    <div class="testimonials">
      <div class="container">
        <h2>Testimonials</h2>
        <hr>
        <p class="testimony">Hiring Elouise was the best decision I have made in my entire life. Her high quality pictures gave my business the presentation to be succesful</p>
        <span>Realtor Jones, Owner of Real House Orlando</span>
      </div>
    </div>
    <!--END Testimonials-->

    <!--Contact-->
    <div class="contact">
      <div class="container">
        <h2>Contact</h2>
        <hr>
        <form method="post" name="myemailform" action="form-to-email.php">
          <div class="row">
            <div class="col-sm-6">
              Enter Name:<br> <input type="text" class="info" name="name">
            </div>
            <div class="col-sm-6">
            <p>Maybe you want a picture from the Golden Gate Bridge. Or you want a picture of the statue of liberty.</p>
            </div>
          </div>
          <div class="row">
            <div class="col-sm-6">
              Enter Email Address: <br> <input type="text" class="info" name="email">
            </div>
            <div class="col-sm-6">
            <p>Maybe you want a picture from the Golden Gate Bridge. Or you want a picture of the statue of liberty.</p>
            </div>
          </div>
          <div class="row">
            <div class="col-sm-12">
              Enter Message: <br> <textarea name="message" class="message"></textarea>
            </div>
          </div> 
            <input type="submit" value="Send Form">
        </form>
      </div>
    </div>
    <!--End Contact-->

    <!--Footer-->
    <footer>
      <div class="container">
            <a class="" href="#">Home <span class="sr-only">(current)</span></a>
            <a class="" href="#">Features</a>
            <a class="" href="#">Pricing</a>
            <a class="" href="#">Disabled</a>
      </div>
    </footer>
    <!--ENDFooter-->


    <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>
    <script type="text/javascript" src="js/app.js"></script>
  </body>
</html>