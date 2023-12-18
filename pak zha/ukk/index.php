<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>index</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
    <link rel="stylesheet" type="text/css" href="css/style.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Tilt+Neon&display=swap" rel="stylesheet">
  </head>

  <body>
<!-- navbar -->
<?php 
include('header.php');
?>
<!-- <nav class="navbar navbar-expand-lg text-uppercase fw-bold " style="background-color: #B05A7A; ">
        <div class="container-fluid ">
          <a class="navbar-brand" href="#">Devi Ayu .A.</a>
          <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
          </button>
          <div class="collapse navbar-collapse " id="navbarNav">
            <ul class="navbar-nav ms-auto">
              <li class="nav-item">
                <a class="nav-link active" aria-current="page" href="#">Home</a>
              </li>
              <li class="nav-item">
                <a class="nav-link active" href="#">About</a>
              </li>
              <li class="nav-item">
                <a class="nav-link active" href="#">Fasilitas</a>
              </li>
              <li class="nav-item">
                <a class="nav-link active ">Contact</a>
              </li>
            </ul>
          </div>
        </div>
      </nav> -->


 <!-- slide -->
      <div id="carouselExampleSlidesOnly" class="carousel slide" data-bs-ride="carousel">
        <div class="carousel-inner">
          <div class="carousel-item active">
            <img src="img/c1.jpg" class="d-block w-100" alt="...">
          </div>
          <div class="carousel-item">
            <img src="img/c2.jpg" class="d-block w-100" alt="...">
          </div>
          <div class="carousel-item">
            <img src="img/c3.jpg" class="d-block w-100" alt="...">
          </div>
        </div>
      </div>

      <!-- row/col -->
      <div class="row d-flex justify-content-center mt-5">
        <div class="col-5"> 
            <h4 class="fw-bold">Lorem ipsum dolor sit amet consectetur Lorem ipsum dolor sit amet consectetur adipisicing elit. </h4>
            <h4 class="fst-italic">Lorem ipsum dolor sit amet consectetur adipisicing elit. Minus aut repudiandae qui. Dolorum dolor quos ipsum earum reprehenderit? Harum fuga asperiores sed adipisci praesentium maxime delectus rerum ut. Possimus, cumque.</h4>
            <h5>Lorem ipsum, dolor sit amet consectetur adipisicing elit. Itaque, dignissimos a illum saepe repudiandae temporibus ducimus incidunt id autem enim atque nobis nihil quae, exercitationem, omnis veniam! Sequi, sit repellendus. Lorem ipsum dolor sit amet consectetur adipisicing elit. Culpa exercitationem quasi obcaecati ipsum quod in? Quidem blanditiis aspernatur eligendi iure, sint dolore, tempora illo laudantium impedit, unde quae! Maxime, facilis? Lorem ipsum dolor, sit amet consectetur adipisicing elit. Suscipit quaerat obcaecati doloribus consectetur recusandae cum ipsa quasi sequi dolorem soluta odit animi rem quae eos quos ullam ipsum, voluptatem iusto!</h5>
        
        
        </div>

        <div class="col-5"><img src="img/d.jpg" alt=""></div>
      </div>

      <!-- card1 -->
      <div class="card text-center mt-5">
        <div class="card-header" style="background-color: #EFA3C8;">
          Selamat Berbelanja
        </div>
        <div class="card-body">
          <blockquote class="blockquote mb-0 p-4" style="background-color: aquamarine;">
            <p>Kue murah meriah, enak, dan pastinya bervarian rasa>_<</p>
            <footer class="blockquote-footer"><cite title="Source Title">isekai</cite></footer>
          </blockquote>
        </div>
      </div>

      <!-- card2 -->
      <div class="row">
        <div class="col-sm-4">
          <div class="card"  style="background-color:#FFD4D4 ;">
            <div class="card-body">
              <h5 class="card-title">Kue Ulang Tahun</h5>
              <p class="card-text">Tersedia berbagai jenis kue ulang tahun untuk anak-anak dan orang dewasa, bisa custom</p>
              <a href="form.php" target="_blank" class="btn btn-primary">Beli</a>
            </div>
          </div>
        </div>

        <div class="col-sm-4">
          <div class="card" style="background-color:#FFD4D4 ;">
            <div class="card-body">
              <h5 class="card-title">Kue Pernikahan</h5>
              <p class="card-text">Tersedia berbagai ukuran dari yang kecil sampai yang besar, bisa custom juga</p>
              <a href="form.php" target="_blank" class="btn btn-primary">Beli</a>
            </div>
          </div>
        </div>

        <div class="col-sm-4">
            <div class="card" style="background-color:#FFD4D4 ;">
              <div class="card-body">
                <h5 class="card-title">Dessert</h5>
                <p class="card-text">Tersedia berbagai macam dessert/makanan penutup dengan varian rasa dari vanilla, coklat, dan lain-lain</p>
                <a href="form.php" target="_blank" class="btn btn-primary">Beli</a>
              </div>
            </div>
          </div>
      </div>


 <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4" crossorigin="anonymous"></script>
  </body>
</html>