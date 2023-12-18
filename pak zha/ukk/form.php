<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Form</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
  </head>
  <body>
    
    <!-- navbar -->

    <?php
    include('header.php');

    ?>
    <!-- <nav class="navbar navbar-expand-lg text-uppercase fw-bold p-3" style="background-color: #F8EDE3; ">
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
      
      <!-- row/col -->
      <div class="row text-center">
        <div class="col-12 p-5 rounded" style="background-color:#DFD3C3 ;">
            <h3 class="text-center">Data Diri Pembeli</h3>
            <h3 class="text-center">SCYLA BAKERY</h3>
        </div>
      </div>

      <div class="row p-4 text-center ">
        <div class="col-12 rounded-5" style="background-color:#DFD3C3 ;">
            <h3 class="text-center">Isikan Form dibawah</h3>
            
        </div>
      </div>
      <!-- form -->
      <div class="container">
        <form> 
        <div class="mb-3">
          <label for="exampleInputEmail1" class="form-label">Nama Depan</label>
          <input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
          <div id="emailHelp" class="form-text"></div>
        </div>
        <div class="mb-3">
          <label for="exampleInputPassword1" class="form-label">Nama Belakang</label>
          <input type="text" class="form-control" id="exampleInputPassword1">
        </div>
        <div class="mb-3">
            <label for="exampleInputPassword1" class="form-label">Alamat</label>
            <input type="text" class="form-control" id="exampleInputPassword1">
          </div>
        <div class="mb-3 form-check">
          <input type="checkbox" class="form-check-input" id="exampleCheck1">
          <label class="form-check-label" for="exampleCheck1">Pesan</label>
        </div>
        <button type="submit" class="btn btn-primary">OK</button>
      </form>
</div>

    <!-- table -->
    <?php 

  $data =[ ["No" => 1, "Nama" =>"Nia Aurora", "Alamat" => "Bendo", "Kelas" => "11", "Jurusan" => "SIJA"],
           ["No" => 2, "Nama" =>"Priyawidia", "Alamat" => "Bendo", "Kelas" => "11", "Jurusan"=> "SIJA"],
           ["No" => 3, "Nama" =>"Devy ayu anggraini", "Alamat" => "Blau", "Kelas" => "11", "Jurusan"=> "SIJA"],
           ["No" => 4, "Nama" =>"Nofa nofianti", "Alamat" => "lowok permanu", "Kelas" => "11", "Jurusan"=> "SIJA"],
           ["No" => 5, "Nama" =>"Bunga wijayanti", "Alamat" => "taman ayu", "Kelas" => "11", "Jurusan" => "SIJA"],
           
  
          ]; 
          
  
   ?>
   <div class="container">
   <table class="table table-bordered table-responsive mt-5">
      
      <tr>
         <td class="fw-bold">No</td>
         <td class="fw-bold">Nama</td> 
         <td class="fw-bold">Alamat</td> 
         <td class="fw-bold">Kelas</td>
         <td class="fw-bold">Jurusan</td> 
  
      </tr>
  
      <tr>
         <td class="fw-bold"> <?= $data[0]["No"]; ?></td>
         <td><?= $data[0]["Nama"]; ?></td> 
         <td><?= $data[0]["Alamat"]; ?></td> 
         <td><?= $data[0]["Kelas"]; ?></td> 
         <td><?= $data[0]["Jurusan"]; ?></td> 
  
      </tr>
  
      <tr>
         <td class="fw-bold"> <?= $data[1]["No"]; ?></td>
         <td><?= $data[1]["Nama"]; ?></td> 
         <td><?= $data[1]["Alamat"]; ?></td> 
         <td><?= $data[1]["Kelas"]; ?></td> 
         <td><?= $data[1]["Jurusan"]; ?></td> 
  
  
      </tr>
  
      <tr>
         <td class="fw-bold"> <?= $data[2]["No"]; ?></td>
         <td><?= $data[2]["Nama"]; ?></td> 
         <td><?= $data[2]["Alamat"]; ?></td> 
         <td><?= $data[2]["Kelas"]; ?></td> 
         <td><?= $data[2]["Jurusan"]; ?></td> 
  
      </tr>
  
      <tr>
         <td class="fw-bold"> <?= $data[3]["No"]; ?></td>
         <td><?= $data[3]["Nama"]; ?></td> 
         <td><?= $data[3]["Alamat"]; ?></td> 
         <td><?= $data[3]["Kelas"]; ?></td> 
         <td><?= $data[3]["Jurusan"]; ?></td> 
  
      </tr>
      <tr>
         <td class="fw-bold"> <?= $data[4]["No"]; ?></td>
         <td><?= $data[4]["Nama"]; ?></td> 
         <td><?= $data[4]["Alamat"]; ?></td> 
         <td><?= $data[4]["Kelas"]; ?></td> 
         <td><?= $data[4]["Jurusan"]; ?></td> 
  
      </tr>
  
  
  
  </table>

	</div>



    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4" crossorigin="anonymous"></script>
  </body>
</html>