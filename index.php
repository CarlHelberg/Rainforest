<!DOCTYPE html>
<html lang="en">
<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta http-equiv='X-UA-Compatible' content='IE=edge'>
  	<meta name='viewport' content='width=device-width, initial-scale=1'>

    <!-- Bootstrap CSS -->
    <link rel='stylesheet' href='https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css' integrity='sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u' crossorigin='anonymous'>
    <!--Font Awesome-->
    <link rel = "stylesheet" href = "https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel = "stylesheet" href = "css/style.css">
    <title>Rainforest</title>
</head>
<body>
    <!-- header-->
    <header>
      <div class = "container-fluid">
        <div class = "jumbotron text-center">
          <h1>Rain<em>f</em>orest</h1>
          <p>Offering a wide range of products and gifts for every occasion and every need!</p>
        </div>
      </div>
    </header>
    <nav class = "navbar navbar-inverse navbar-fixed-top">
      <div class = "container-fluid">
        <header class = "navbar-header">
          <button type = "button" class ="navbar-toggle" data-toggle = "collapse" data-target = "#myNavbar">
            <!-- Add manual glyphicon-hamberger one bar at a time-->
            <span class = "icon-bar"></span>
            <span class = "icon-bar"></span>
            <span class = "icon-bar"></span>

          </button>
          <a class = "navbar-brand" href = "index.php">Rain<em>f</em>orest Home </a>
        </header>
      <div class ="collapse navbar-collapse" id ="myNavbar">
        <ul class = "nav navbar-nav">
          <li><a href = "#">Products</a></li>
          <li><a href ="#">Deals</a></li>
        </ul>
        <ul class = " nav navbar-nav navbar-right">
          <li><a href = "#"><span class = "glyphicon glyphicon-user"></span> Sign In</a></li>
          <li><a href = "#"><span class = "glyphicon glyphicon-shopping-cart"></span> Cart</a></li>
          <li><form class = "navbar-form" action = "#" method ="POST">
            <input type ="text"class = "form-control" placeholder = "Search for a product">
            <button type = "submit" class = "btn btn-primary"><span class = "glyphicon glyphicon-search s"></span></button>
          </form></li>
        </ul>
      </div>
    </div>
    </nav>
    <!--Main-->
  <main>
    <div class = "container">
      <div class = "row">
        <div class = "col-md-3">
          <p class = "lead">Product range</p>
          <p>Cars</p>
          <div class = "list-group">
            <a href = "#" class = "list-group-item"> Catagory 1</a>
            <a href = "#" class = "list-group-item"> Catagory 2</a>
            <a href = "#" class = "list-group-item"> Catagory 3</a>
          </div>
          <p>Computors</p>
          <div class = "list-group">
            <a href = "#" class = "list-group-item"> Catagory 4</a>
            <a href = "#" class = "list-group-item"> Catagory 5</a>
            <a href = "#" class = "list-group-item"> Catagory 6</a>
          </div>
        </div>

        <div class = "col-md-9"> <!-- Carousel start -->

          <div class = ""> <!-- Carousel contents -->
            <div id = "carousel-example-generic" class = "carousel slide" data-ride = "carousel">
              <ol class = "carousel-indicators">
                <li data-target = "#carousel-example-generic" data-slide-to = "0" class = "active"></li>
                <li data-target="#carousel-example-generic" data-slide-to="1"></li>
                <li data-target="#carousel-example-generic" data-slide-to="2"></li>
              </ol>
              <div class = "carousel-inner">
                <div class = "item active">
                  <img class = "slide-image" src = "images/car1.jpg" alt = "">
                </div>
                <div class = "item">
                  <img class = "slide-image" src = "images/car2.jpg" alt = "">
                </div>
                <div class = "item">
                  <img class = "slide-image" src = "images/car3.jpg" alt = "">
                </div>
              </div>
                <a class="left carousel-control" href="#carousel-example-generic" role="button" data-slide="prev">
                  <span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span>
                  <span class="sr-only">Previous</span>
                </a>
                <a class="right carousel-control" href="#carousel-example-generic" role="button" data-slide="next">
                  <span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span>
                  <span class="sr-only">Next</span>
                </a>
            </div>
          </div>
              <div class = "row">
                  <div class = "col-md-4">
                    <div class = "thumbnail">
                      <img src = "http://placehold.it/320x150" alt = "thumbnail image">
                      <div class = "caption">
                        <h4 class = "pull-right">R199 999.99</h4>
                        <h4><a href = "#"></a>A Product</h4>
                        <p>This is a product description</p>
                      </div>
                        <div class = "ratings">
                          <p class = "pull-right">107 Reviews</p>
                          <p>
                              <span class = "glyphicon glyphicon-star"></span>
                              <span class = "glyphicon glyphicon-star"></span>
                              <span class = "glyphicon glyphicon-star"></span>
                              <span class = "glyphicon glyphicon-star"></span>
                              <span class = "glyphicon glyphicon-star-empty"></span>
                          </p>
                        </div>
                    </div>
                  </div>
                  <div class = "col-md-4">
                    <div class = "thumbnail">
                      <img src = "http://placehold.it/320x150" alt = "thumbnail image">
                      <div class = "caption">
                        <h4 class = "pull-right">R299 999.99</h4>
                        <h4><a href = "#"></a>A Product</h4>
                        <p>This is a product description</p>
                      </div>
                        <div class = "ratings">
                          <p class = "pull-right">200 Reviews</p>
                          <p>
                              <span class = "glyphicon glyphicon-star"></span>
                              <span class = "glyphicon glyphicon-star"></span>
                              <span class = "glyphicon glyphicon-star-empty"></span>
                              <span class = "glyphicon glyphicon-star-empty"></span>
                              <span class = "glyphicon glyphicon-star-empty"></span>
                          </p>
                        </div>
                    </div>
                  </div>
                  <div class = "col-md-4">
                    <div class = "thumbnail">
                      <img src = "http://placehold.it/320x150" alt = "thumbnail image">
                      <div class = "caption">
                        <h4 class = "pull-right">R399 999.99</h4>
                        <h4><a href = "#"></a>A Product</h4>
                        <p>This is a product description</p>
                      </div>
                        <div class = "ratings">
                          <p class = "pull-right">17 Reviews</p>
                          <p>
                              <span class = "glyphicon glyphicon-star"></span>
                              <span class = "glyphicon glyphicon-star"></span>
                              <span class = "glyphicon glyphicon-star"></span>
                              <span class = "glyphicon glyphicon-star"></span>
                              <span class = "glyphicon glyphicon-star-empty"></span>
                          </p>
                        </div>
                    </div>
                  </div>
              </div> <!-- Thumbnail row end-->
        </div> <!-- carousel contents col md 9 end -->
      </div> <!--row end wrapper for carousel & product lsit-->
    </div><!-- Main container end-->
  </main>



    <!-- footer -->
  <footer class = "text-center">
    <nav class = "navbar navbar-inverse">
      <div class = "container-fluid">
        <ul class = " nav navbar-nav">
          <li class = "navbar-text"> Copyright &copy; Someone</li>
          <li><a href = "#"><i class = "fa fa-facebook"></i></a></li>
          <li><a href = "#"><i class = "fa fa-google"></i></a></li>
          <li><a href = "#"><i class = "fa fa-twitter"></i></a></li>
        </ul>
        <ul class = "nav navbar-nav navbar-right">
        <li><a href = "#">Site Map</a></li>
        <li><a href = "#">Contact</a></li>
        <li><a href = "#">Terms &amp; Conditions</a></li>
        </ul>
      </div>
    </nav>
  </footer>
  <!--JAVASCRIPT-->
	<!--JQuery-->
	<script src='https://code.jquery.com/jquery-3.1.0.min.js' integrity='sha256-cCueBR6CsyA4/9szpPfrX3s49M9vUU5BgtiJj06wt/s=' crossorigin='anonymous'></script>

	<!--Bootstrap JS-->
	<script src='https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js' integrity='sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa' crossorigin='anonymous'></script>

	<!--Custom JS-->

</body>
</html>
