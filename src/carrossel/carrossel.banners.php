<div id="carouselBanners" class="carousel slide" data-ride="carousel">
  <ol class="carousel-indicators">
    <li data-target="#carouselBanners" data-slide-to="0" class="active"></li>
    <li data-target="#carouselBanners" data-slide-to="1"></li>
    <li data-target="#carouselBanners" data-slide-to="2"></li>
  </ol>
  <div class="carousel-inner">
    <div class="carousel-item active">
      <img class="d-block w-100" src="./src/img/3876902.jpg" style="width:100%;" alt="First slide">
    </div>
    <div class="carousel-item">
      <img class="d-block w-100" src="./src/img/4028484.jpg" alt="Second slide">
    </div>
    <div class="carousel-item">
      <img class="d-block w-100" src="./src/img/5811.jpg" alt="Third slide">
    </div>
  </div>
  <a class="carousel-control-prev" href="#carouselBanners" role="button" data-slide="prev">
    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
    <span class="sr-only">Previous</span>
  </a>
  <a class="carousel-control-next" href="#carouselBanners" role="button" data-slide="next">
    <span class="carousel-control-next-icon" aria-hidden="true"></span>
    <span class="sr-only">Next</span>
  </a>

  <script> 
    $('.carousel').carousel({
        interval: 3000
    })
  </script>
</div>