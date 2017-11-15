<nav class="navbar navbar-toggleable-md navbar-light bg-faded">
  <button class="navbar-toggler navbar-toggler-right" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>
  <a class="navbar-brand" href="/suhailproject">XYZ College</a>

  <div class="collapse navbar-collapse justify-content-end pb-lg-0 pb-sm-5" id="navbarSupportedContent">
        <form class="form-inline ml-lg-5 ml-sm-0" action="includes/php/login.php" method="POST" autocomplete="off">
            <!-- <div id="error" class="form-control alert alert-danger mr-2 mt-2" role="alert"></div> -->
            <input class="form-control mr-2" type="text" placeholder="Username" id="username" name="username">
            <input class="form-control mr-2" type="password" placeholder="Password" id="password" name="password">
            <button class="btn btn-outline-success mr-2 mr-sm-0" type="submit" id="submit" name="submit">Login</button>
        </form>
  </div>
</nav>

<div class="container">
  <div id="carouselExampleCaptions" class="carousel slide mt-3" data-ride="carousel">
    <ol class="carousel-indicators">
      <li data-target="#carouselExampleCaptions" data-slide-to="0" class="active"></li>
      <li data-target="#carouselExampleCaptions" data-slide-to="1"></li>
      <li data-target="#carouselExampleCaptions" data-slide-to="2"></li>
    </ol>
    <!-- All the carousel images are 1600 X 500 resolution -->
    <div class="carousel-inner" role="listbox">
      <div class="carousel-item active">
        <img class="d-block img-fluid" src="images/slider1.jpg" alt="First slide" />
        <div class="carousel-caption d-none d-md-block">
          <h3>First slide label</h3>
          <p>Nulla vitae elit libero, a pharetra augue mollis interdum.</p>
        </div>
      </div>
      <div class="carousel-item">
        <img class="d-block img-fluid" src="images/slider2.jpg" alt="Second slide" />
        <div class="carousel-caption d-none d-md-block">
          <h3>Second slide label</h3>
          <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit.</p>
        </div>
      </div>
      <div class="carousel-item">
        <img class="d-block img-fluid" src="images/slider3.jpg" alt="Third slide" />
        <div class="carousel-caption d-none d-md-block">
          <h3>Third slide label</h3>
          <p>Praesent commodo cursus magna, vel scelerisque nisl consectetur.</p>
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