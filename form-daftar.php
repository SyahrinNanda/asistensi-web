<?php
require "koneksi.php";
$sql = "SELECT* FROM daftar";
$execute = mysqli_query($koneksi, $sql);
?>

<!DOCTYPE html>
<html>
  <head>
    <!-- Basic -->
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <!-- Mobile Metas -->
    <meta
      name="viewport"
      content="width=device-width, initial-scale=1, shrink-to-fit=no"
    />
    <!-- Site Metas -->
    <meta name="keywords" content="" />
    <meta name="description" content="" />
    <meta name="author" content="" />

    <title>Goid</title>
    <!-- slider stylesheet -->
    <link rel="stylesheet" href="css/form.css" />
    <link
      rel="stylesheet"
      type="text/css"
      href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.carousel.min.css"
    />

    <!-- bootstrap core css -->
    <link rel="stylesheet" type="text/css" href="css/bootstrap.css" />

    <!-- fonts style -->
    <link
      href="https://fonts.googleapis.com/css?family=Open+Sans:400,700|Poppins:400,700|Raleway:400,700&display=swap"
      rel="stylesheet"
    />

    <!-- Custom styles for this template -->
    <link href="css/style.css" rel="stylesheet" />
    <!-- responsive style -->
    <link href="css/responsive.css" rel="stylesheet" />
  </head>

  <body class="sub_page">
    <div class="hero_area">
      <!-- header section strats -->
      <header class="header_section">
        <div class="container-flued">
          <nav class="navbar navbar-expand-lg row">
            <a class="navbar-brand" href="index.html">
              <img src="images/logo.png" alt="" />
              <span>Nonton<br />Yuk</span>
            </a>

            <div class="navbar-collapse" id="">
              <div class="custom_menu-btn">
                <button onclick="openNav()">
                  <span class="s-1"> </span>
                  <span class="s-2"> </span>
                  <span class="s-3"> </span>
                </button>
              </div>
              <div id="myNav" class="overlay">
                <div class="overlay-content">
                  <a href="index.html">HOME</a>
                  <a href="about.html">ABOUT</a>
                  <a href="food.html">Food</a>
                  <a href="contact.html">Contact Us</a>
                </div>
              </div>
            </div>
          </nav>
        </div>
      </header>
      <!-- end header section -->
    </div>

    <!-- about section -->
    <section class="about_section layout_margin">
      <div class="container-fluid" id="container">
        <div class="col border rounded">
          <form action="insert.php" method="POST" class="row g-3">
            <h5 class="ml-3 mb-3 py-3 font-weight-bold">
              Pembeli Ticket Nonton
            </h5>

            <div class="col-12">
              <label for="namaLengkap" class="form-label">Nama Lengkap</label>
              <input
                type="text"
                class="form-control"
                id="inputNamaLengkap"
                placeholder="Nama Lengkap Kamu"
              />
            </div>

            <div class="col-12 mt-4">
              <label for="nomorAntrian" class="form-label">Nomor Antrian</label>
              <input
                type="number"
                class="form-control"
                id="inputAntrian"
                placeholder="Masukkan Nomor Antrian Kamu"
              />
            </div>

            <div class="col-12 mt-4">
              <label for="inputAlamat" class="form-label">Alamat</label>
              <input
                type="text"
                class="form-control"
                id="inputAlamat"
                placeholder="Masukkan Alamat Kamu"
              />
            </div>

            <div class="col-md-6 mt-4">
              <label for="inputJK" class="form-label">Jenik Kelamin</label>
              <br />
              <input type="radio" class="form-radio-input" id="inputJK" />
              <label for="inputJK" class="form-label">Laki-laki</label>
              <br />
              <input type="radio" class="form-radio-input" id="inputJK" />
              <label for="inputJK" class="form-label">Perempuan</label>
            </div>

            <div class="col-12 mt-4">
              <label for="noWA" class="form-label">Nomor WhatsApp</label>
              <input
                type="number"
                class="form-control"
                id="inputNoWA"
                placeholder="08123456738"
              />
            </div>

            <div class="col-12 mt-4">
              <label for="instagram" class="form-label">Instagram</label>
              <input
                type="text"
                class="form-control"
                id="inputInstagaram"
                placeholder="@exmple (isi '-' Jika tidak memiliki Instagram)"
              />
            </div>

            <div class="col-12 mt-4">
              <label for="pin" class="form-label">Pin</label>
              <input
                type="password"
                class="form-control"
                id="pin"
                placeholder="............(6 Digit)"
              />
            </div>

            <div class="col-12 mt-4">
              <label for="kodePembelian" class="form-label"
                >Kode Pembelian</label
              >
              <input
                type="text"
                class="form-control"
                id="kodePembelian"
                placeholder="Kode Pembelian"
              />
            </div>

            <div class="col-12 mt-4">
              <div class="ml-3">
                <input
                  class="form-check-input"
                  type="checkbox"
                  id="gridCheck"
                />
                <label class="form-check-label" for="gridCheck">
                  Saya telah bersedia untuk mengikuti aturan yang telah
                  ditetapkan
                </label>
              </div>
            </div>

            <div class="col-12 mt-4 mb-3">
              <button type="submit" class="btn btn-primary">Submit</button>
            </div>
          </form>
        </div>

        <div class="col border rounded">
          <div>
            <h5 class="ml-3 mb-3 py-3 font-weight-bold">
              List Pembelian Ticket
            </h5>
            <table class="table table-bordered">
              <thead>
                <tr>
                  <th scope="col">No</th>
                  <th scope="col">Nama</th>
                  <th scope="col">Nomor Antrian</th>
                  <th scope="col">Edit</th>
                </tr>
              </thead>
              <tbody>
                <?php 
                // $no = 0;
                    while ($result = mysqli_fetch_assoc($execute)) {?>
                <tr>
                  <th scope="row"><?= $result['id']?></th>
                  <td><?= $result['nama']?></td>
                  <td><?= $result['noAntrian']?></td>
                  <td><a href="edit.php?id"><button type="button" class="btn btn-primary">Edit</button></a></td>
                </tr>
                <?php }?>
              </tbody>
            </table>
          </div>
        </div>
      </div>
    </section>

    <!-- end about section -->

    <!-- subscribe section -->

    <!-- <section class="subscribe_section">
      <div class="container">
        <form action="">
          <div class="row">
            <div class="col-lg-3 col-md-4">
              <label for="subEmail"> Our Newsletter </label>
            </div>
            <div class="col-lg-9 col-md-8">
              <div class="box">
                <input
                  type="email"
                  placeholder="Enter your email"
                  id="subEmail"
                />
                <button>Subscribe</button>
              </div>
            </div>
          </div>
        </form>
      </div>
    </section>

    end subscribe section -->

    <!-- footer section -->

    <!-- <section class="container-fluid footer_section">
      <div class="social_container">
        <h4>Follow on</h4>
        <div class="social-box">
          <a href="">
            <img src="images/fb.png" alt="" />
          </a>
          <a href="">
            <img src="images/twitter.png" alt="" />
          </a>
          <a href="">
            <img src="images/linkedin.png" alt="" />
          </a>
          <a href="">
            <img src="images/youtube.png" alt="" />
          </a>
        </div>
      </div>
      <p>
        &copy; 2019 All Rights Reserved. Design by
        <a href="https://html.design/">Free Html Templates</a>
      </p>
    </section> -->

    <!-- footer section -->

    <script type="text/javascript" src="js/jquery-3.4.1.min.js"></script>
    <script type="text/javascript" src="js/bootstrap.js"></script>
    <script
      type="text/javascript"
      src="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/owl.carousel.min.js"
    ></script>

    <script>
      function openNav() {
        document.getElementById("myNav").classList.toggle("menu_width");
        document
          .querySelector(".custom_menu-btn")
          .classList.toggle("menu_btn-style");
      }
    </script>

    <!-- owl carousel script -->
    <script type="text/javascript">
      $(".owl-carousel").owlCarousel({
        loop: true,
        margin: 35,
        navText: [],
        autoplay: true,
        autoplayHoverPause: true,
        responsive: {
          0: {
            items: 1,
          },
          600: {
            items: 2,
          },
          1000: {
            items: 3,
          },
        },
      });
    </script>
    <!-- end owl carousel script -->
  </body>
</html>
