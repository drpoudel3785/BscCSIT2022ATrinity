<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="css/bootstrap.css" rel="stylesheet" type="text/css" />
    <link rel="stylesheet" href="//code.jquery.com/ui/1.13.2/themes/base/jquery-ui.css">
</head>
<body>
    <div class="container">
        <?php include('inc_header.php');?>
        <div class="row">
            <div class="col-xxl-6">
              <div id="carouselExampleDark" class="carousel carousel-dark slide" data-bs-ride="carousel">
                <div class="carousel-indicators">
                  <button type="button" data-bs-target="#carouselExampleDark" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
                  <button type="button" data-bs-target="#carouselExampleDark" data-bs-slide-to="1" aria-label="Slide 2"></button>
                  <button type="button" data-bs-target="#carouselExampleDark" data-bs-slide-to="2" aria-label="Slide 3"></button>
                  <button type="button" data-bs-target="#carouselExampleDark" data-bs-slide-to="3" aria-label="Slide 3"></button>
                </div>
                <div class="carousel-inner">
                  <div class="carousel-item active" data-bs-interval="10000">
                    <img src="images/bmw1.jpg"  class="img-fluid img-thumbnail" alt="bmw1">
                    <div class="carousel-caption d-none d-md-block">
                      <h5>First slide label</h5>
                      <p>Some representative placeholder content for the first slide.</p>
                    </div>
                  </div>
                  <div class="carousel-item" data-bs-interval="2000">
                    <img src="images/bmw1.jpg"  class="img-fluid img-thumbnail" alt="bmw1">
                    <div class="carousel-caption d-none d-md-block">
                      <h5>Second slide label</h5>
                      <p>Some representative placeholder content for the second slide.</p>
                    </div>
                  </div>
                  <div class="carousel-item">
                    <img src="images/bmw1.jpg"  class="img-fluid img-thumbnail" alt="bmw1">
                    <div class="carousel-caption d-none d-md-block">
                      <h5>Third slide label</h5>
                      <p>Some representative placeholder content for the third slide.</p>
                    </div>
                  </div>

                  <div class="carousel-item">
                    <img src="images/bmw1.jpg"  class="img-fluid img-thumbnail" alt="bmw1">
                    <div class="carousel-caption d-none d-md-block">
                      <h5>Fourth slide label</h5>
                      <p>Some representative placeholder content for the third slide.</p>
                    </div>
                  </div>
                </div>
                <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleDark" data-bs-slide="prev">
                  <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                  <span class="visually-hidden">Previous</span>
                </button>
                <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleDark" data-bs-slide="next">
                  <span class="carousel-control-next-icon" aria-hidden="true"></span>
                  <span class="visually-hidden">Next</span>
                </button>
              </div>

            </div>
            <div class="col-xxl-6">
                <div class="row">
                    <div class="col-xxl-4">Thumb</div>
                    <div class="col-xxl-8">Description</div>
                </div>
                <div class="row">
                    <div class="col-xxl-4">Thumb</div>
                    <div class="col-xxl-8">Description</div>
                </div>
                <div class="row">
                    <div class="col-xxl-4">Thumb</div>
                    <div class="col-xxl-8">Description</div>
                </div>
            </div>
        </div>

        <div class="row">
            <div class="col-xxl-3">
                <div class="card" style="width: 18rem;">
                    <img src="images/bmw1.jpg" alt="BMW" title="BMW" class="card-img-top img-fluid img-thumbnail" />
                      <div class="card-body">
                      <h5 class="card-title">Card title</h5>
                      <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                      <a href="#" class="btn btn-primary">Go somewhere</a>
                    </div>
                  </div>   
            </div>
            <div class="col-xxl-3"> <img src="images/bmw1.jpg" alt="BMW" title="BMW" class="img-fluid img-thumbnail" /></div>
            <div class="col-xxl-3"> <img src="images/bmw1.jpg" alt="BMW" title="BMW" class="img-fluid img-thumbnail" /></div>
            <div class="col-xxl-3"> <img src="images/bmw1.jpg" alt="BMW" title="BMW" class="img-fluid img-thumbnail" /></div>
        </div>

        <div class="row">
            <div class="col-xxl-6">
              <div id="accordion">
                <h3>Section 1</h3>
                <div>
                  <p>
                  Mauris mauris ante, blandit et, ultrices a, suscipit eget, quam. Integer
                  ut neque. Vivamus nisi metus, molestie vel, gravida in, condimentum sit
                  amet, nunc. Nam a nibh. Donec suscipit eros. Nam mi. Proin viverra leo ut
                  odio. Curabitur malesuada. Vestibulum a velit eu ante scelerisque vulputate.
                  </p>
                </div>
                <h3>Section 2</h3>
                <div>
                  <p>
                  Sed non urna. Donec et ante. Phasellus eu ligula. Vestibulum sit amet
                  purus. Vivamus hendrerit, dolor at aliquet laoreet, mauris turpis porttitor
                  velit, faucibus interdum tellus libero ac justo. Vivamus non quam. In
                  suscipit faucibus urna.
                  </p>
                </div>
                <h3>Section 3</h3>
                <div>
                  <p>
                  Nam enim risus, molestie et, porta ac, aliquam ac, risus. Quisque lobortis.
                  Phasellus pellentesque purus in massa. Aenean in pede. Phasellus ac libero
                  ac tellus pellentesque semper. Sed ac felis. Sed commodo, magna quis
                  lacinia ornare, quam ante aliquam nisi, eu iaculis leo purus venenatis dui.
                  </p>
                  <ul>
                    <li>List item one</li>
                    <li>List item two</li>
                    <li>List item three</li>
                  </ul>
                </div>
                <h3>Section 4</h3>
                <div>
                  <p>
                  Cras dictum. Pellentesque habitant morbi tristique senectus et netus
                  et malesuada fames ac turpis egestas. Vestibulum ante ipsum primis in
                  faucibus orci luctus et ultrices posuere cubilia Curae; Aenean lacinia
                  mauris vel est.
                  </p>
                  <p>
                  Suspendisse eu nisl. Nullam ut libero. Integer dignissim consequat lectus.
                  Class aptent taciti sociosqu ad litora torquent per conubia nostra, per
                  inceptos himenaeos.
                  </p>
                </div>
              </div>

            </div>
            <div class="col-xxl-6"><div id="tabs">
              <ul>
                <li><a href="#tabs-1">Nunc tincidunt</a></li>
                <li><a href="#tabs-2">Proin dolor</a></li>
                <li><a href="#tabs-3">Aenean lacinia</a></li>
              </ul>
              <div id="tabs-1">
                <p>Proin elit arcu, rutrum commodo, vehicula tempus, commodo a, risus. Curabitur nec arcu. Donec sollicitudin mi sit amet mauris. Nam elementum quam ullamcorper ante. Etiam aliquet massa et lorem. Mauris dapibus lacus auctor risus. Aenean tempor ullamcorper leo. Vivamus sed magna quis ligula eleifend adipiscing. Duis orci. Aliquam sodales tortor vitae ipsum. Aliquam nulla. Duis aliquam molestie erat. Ut et mauris vel pede varius sollicitudin. Sed ut dolor nec orci tincidunt interdum. Phasellus ipsum. Nunc tristique tempus lectus.</p>
              </div>
              <div id="tabs-2">
                <p>Morbi tincidunt, dui sit amet facilisis feugiat, odio metus gravida ante, ut pharetra massa metus id nunc. Duis scelerisque molestie turpis. Sed fringilla, massa eget luctus malesuada, metus eros molestie lectus, ut tempus eros massa ut dolor. Aenean aliquet fringilla sem. Suspendisse sed ligula in ligula suscipit aliquam. Praesent in eros vestibulum mi adipiscing adipiscing. Morbi facilisis. Curabitur ornare consequat nunc. Aenean vel metus. Ut posuere viverra nulla. Aliquam erat volutpat. Pellentesque convallis. Maecenas feugiat, tellus pellentesque pretium posuere, felis lorem euismod felis, eu ornare leo nisi vel felis. Mauris consectetur tortor et purus.</p>
              </div>
              <div id="tabs-3">
                <p>Mauris eleifend est et turpis. Duis id erat. Suspendisse potenti. Aliquam vulputate, pede vel vehicula accumsan, mi neque rutrum erat, eu congue orci lorem eget lorem. Vestibulum non ante. Class aptent taciti sociosqu ad litora torquent per conubia nostra, per inceptos himenaeos. Fusce sodales. Quisque eu urna vel enim commodo pellentesque. Praesent eu risus hendrerit ligula tempus pretium. Curabitur lorem enim, pretium nec, feugiat nec, luctus a, lacus.</p>
                <p>Duis cursus. Maecenas ligula eros, blandit nec, pharetra at, semper at, magna. Nullam ac lacus. Nulla facilisi. Praesent viverra justo vitae neque. Praesent blandit adipiscing velit. Suspendisse potenti. Donec mattis, pede vel pharetra blandit, magna ligula faucibus eros, id euismod lacus dolor eget odio. Nam scelerisque. Donec non libero sed nulla mattis commodo. Ut sagittis. Donec nisi lectus, feugiat porttitor, tempor ac, tempor vitae, pede. Aenean vehicula velit eu tellus interdum rutrum. Maecenas commodo. Pellentesque nec elit. Fusce in lacus. Vivamus a libero vitae lectus hendrerit hendrerit.</p>
              </div>
            </div></div>
        </div>
        <div class="row">
            <div class="col-xxl-12">Google Map</div>
        </div>
       <?php include('inc_footer.php');?>
    </div><!--container-->

    <script src="js/bootstrap.bundle.js"></script>
    <script src="https://code.jquery.com/jquery-3.6.0.js"></script>
  <script src="https://code.jquery.com/ui/1.13.2/jquery-ui.js"></script>
  <script>
  $( function() {
    $( "#accordion" ).accordion();
  } );

  $( function() {
      $( "#tabs" ).tabs();
    } );
  </script>


    
</body>
</html>