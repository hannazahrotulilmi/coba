  <!-- Full Page Image Background Carousel Header -->
    <div id="myCarousel" class="carousel slide" data-ride="carousel">
  <!-- Indicators -->
  <ol class="carousel-indicators">
    <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
    <li data-target="#myCarousel" data-slide-to="1"></li>
    <li data-target="#myCarousel" data-slide-to="2"></li>
    <li data-target="#myCarousel" data-slide-to="3"></li>
  </ol>

  <!-- Wrapper for slides -->
  <div class="carousel-inner" role="listbox">
    <div class="item active">
      <img src="img/1.jpg" alt="Chania" style width="1100" height="100">
    </div>

    <div class="item">
      <img src="img/2.jpg" alt="Chania" style width="1100" height="100">
    </div>

    <div class="item">
      <img src="img/3.jpg" alt="Flower" style width="1100" height="100">
    </div>
	
	<div class="item">
      <img src="img/4.jpg" alt="Flower" style width="1100" height="100">
    </div>
	
	<div class="item">
      <img src="img/5.jpg" alt="Flower" style width="1100" height="100">
    </div>
	
	<div class="item">
      <img src="img/6.jpg" alt="Flower" style width="1100" height="100">
    </div>
	
	<div class="item">
      <img src="img/7.jpg" alt="Flower" style width="1100" height="100">
    </div>
	
	<div class="item">
      <img src="img/8.jpg" alt="Flower" style width="1100" height="100">
    </div>
	
	<div class="item">
      <img src="img/9.jpg" alt="Flower" style width="1100" height="100">
    </div>
	
	<div class="item">
      <img src="img/10.jpg" alt="Flower" style width="1100" height="100">
    </div>
  </div>

  <!-- Left and right controls -->
  <a class="left carousel-control" href="#myCarousel" role="button" data-slide="prev">
    <span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span>
    <span class="sr-only">Previous</span>
  </a>
  <a class="right carousel-control" href="#myCarousel" role="button" data-slide="next">
    <span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span>
    <span class="sr-only">Next</span>
  </a>
</div>
	<!-- jQuery -->
    <script src="js/jquery.js"></script>

    <!-- Bootstrap Core JavaScript -->
    <script src="js/bootstrap.min.js"></script>

    <!-- Script to Activate the Carousel -->
    <script>
    $('.carousel').carousel({
        interval: 5000 //changes the speed
    })
    </script>
