<?php include('partials-front/menu.php'); ?>

<!---- Home Bar --->
	<div id="carouselExampleIndicators" class="carousel slide" data-bs-ride="carousel">
  <div class="carousel-indicators">
    <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="0" class="active" style="background-color: black;" aria-current="true" aria-label="Slide 1"></button>
    <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="1" style="background-color: black;" aria-label="Slide 2"></button>
    <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="2" style="background-color: black;" aria-label="Slide 3"></button>
  </div>
  <div class="carousel-inner">
    <div class="carousel-item active">
      <img src="image/2.png" class="d-block w-100" style="width: 100%; height: 500px" alt="...">
      <div class="carousel-caption d-none d-md-block">
        <h1 id="reSize" style="font-size: 30px; font-weight:bold; color:black; font-family: cursive;">Move to What Moves You</h1>
      </div>
    </div>
    <div class="carousel-item">
      <img src="image/3.png" class="d-block w-100" style="width: 100%; height: 500px" alt="...">
      <div class="carousel-caption d-none d-md-block">
      	<h1 id="reSize" style="font-size: 30px; font-weight:bold; color:black;font-family: cursive;">Where Dreams Come Home</h1>
      </div>
    </div>
    <div class="carousel-item">
      <img src="image/6.png" class="d-block w-100" style="width: 100%; height: 500px" alt="...">
      <div class="carousel-caption d-none d-md-block">
        <h1 id="reSize" style="font-size: 30px; font-weight:bold; color:black;font-family: cursive;">Let us Guide you Home</h1>
      </div>
    </div>
  </div>
  <button class="carousel-control-prev" type="button" color="black" data-bs-target="#carouselExampleIndicators" data-bs-slide="prev">
    <span class="carousel-control-prev-icon" style="background-color: black;"aria-hidden="true"></span>
    <span class="visually-hidden">Previous</span>
  </button>
  <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide="next">
    <span class="carousel-control-next-icon" style="background-color: black;"aria-hidden="true"></span>
    <span class="visually-hidden">Next</span>
  </button>
</div>
			
	<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.3/dist/umd/popper.min.js" integrity="sha384-eMNCOe7tC1doHpGoWe/6oMVemdAVTMs2xqW4mwXrXsW0L84Iytr2wi5v2QjrP/xp" crossorigin="anonymous"></script>
	<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.0/dist/js/bootstrap.min.js" integrity="sha384-cn7l7gDp0eyniUwwAZgrzD06kc/tftFf19TOAs2zVinnD/C7E91j9yyk5//jjpt/" crossorigin="anonymous"></script>
</br>

<!---- Content Box ----->

<div class="row row-cols-1 row-cols-md-3 g-3">
  <div class="col">
    <div class="card" >
      <img src="image/buy.png" class="card-img-top" alt="...">
      <div class="card-body">
        <h2 class="card-title" style="font-size:30px; font-weight: bold;">Buy a home</h2>
        <p class="card-text">Find your place with an immersive photo experience and the most listings, including things you won't find anywhere else</p></br>
        <a href="buy.php"><button type="button" class="btn btn-success" style="position: inherit;">Search</button></a>
      </div>
    </div>
  </div>
  <div class="col">
    <div class="card">
      <img src="image/rent.png" class="card-img-top" alt="...">
      <div class="card-body">
        <h2 class="card-title" style="font-size:30px; font-weight: bold;">Rent a home</h2>
        <p class="card-text">We're creating a seamless online experiences - from shopping on the largest rental network, to applying, to paying rent</p></br>
        <a href="rent.php"><button type="button" class="btn btn-success" style="position: inherit;">Search</button></a>
      </div>
    </div>
  </div>
</div>
</br>

<?php include('partials-front/footer.php'); ?>
