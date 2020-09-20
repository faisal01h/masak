<?php
session_start();
$refer = true;
$config = "https://assets.faisalhanif.me";

$cbg = rand(1,2);
if($cbg == 1) $coverBg = 'Masak_JAN20_Overhead1.jpg';
if($cbg == 2) $coverBg = 'Masak_JAN20_Overhead1.jpg';

$dark = false;
if(isset($_POST['_theme'])) $_SESSION['_theme'] = $_POST['_theme'];
if(isset($_SESSION['_theme']) && $_SESSION['_theme']==1) $dark = true;

?>

<!DOCTYPE html>
<html>
<head>
    <title>Masak</title>
    <?php require_once "_incheader2.php";?>
    <meta name="theme-color" content="#d6d6d6"/>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/flickity/1.0.0/flickity.css">
    <style>
        #masakMainSlide {
            background: url('media/<?php echo $coverBg;?>');
        }
    </style>
</head>
<body>
    <div class="container-fluid master-head cover-image" id="masakMainSlide">
        <h1 class="text-header text-center" style="color:#fff;font-family:Montserrat">MASAK</h1>
    </div>

    <!--Navbar-->
<nav class="navbar navbar-expand-lg m-nav-light bg-nav sticky-top" id="mainNav">
  <a class="navbar-brand" href="."><b>MASAK</b></a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
    <i class="fa fa-ellipsis-h"></i>
  </button>
  <div class="collapse navbar-collapse" id="navbarNavDropdown">
    <ul class="navbar-nav">
      <li class="nav-item active">
        <a class="nav-link" href="#">Home <span class="sr-only">(current)</span></a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="gallery">Galeri</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="alumni">Alumni</a>
      </li>
      <li class="nav-item dropdown">
        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
          Riwayat
        </a>
        <div class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
          <a class="dropdown-item" href="hist/2018">Desember 2018</a>
          <a class="dropdown-item" href="hist/2020-1">Januari 2020</a>
          <a class="dropdown-item" href="hist/2020-2">Juli 2020</a>
        </div>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="upcoming">Akan Datang</a>
      </li>
    </ul>
    <ul class="navbar-nav ml-auto">
        <li class="nav-item dropdown mr-2">
          <a class="nav-link dropdown-toggle" href="#" id="settingsDropdown" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
            <i class="fa fa-cog" id="settingsDropdownIcon"></i>
          </a>
          <div class="dropdown-menu" aria-labelledby="settingsDropdown">
            <form action="" method="post">
              <input type="hidden" name="_theme" value="<?php if(!$dark) echo '1'; else echo '0'; ?>">
              <button type="submit" class="dropdown-item">Ganti Tema</button>
            </form>
        </div>
        </li>
        <li><text class="" id="accountControl"></text></li>
    </ul>
  </div>
</nav>

<!-- Main Content -->
    <div class="wrapper container p-3">
        <div class="m-card card-shadow p-4 mt-3">
            <h4>Apa itu Masak?</h4>
            <p class="lead">Masak adalah agenda memasak rutin yang biasa diadakan pada saat liburan.</p>
            <b>Sejarah masak</b>
            <p>Acara masak pertama adalah "<i>Liburan masak-masak</i>" yang diadakan pada 25 Desember 2018. Menu yang direncanakan pada acara tersebut terus berubah-ubah hingga H-1 acara. Mulai dari seblak, richeese, hingga cheesecake. Akhirnya menu yang dimasak adalah bolu dan onion ring.
            Pada acara masak selanjutnya, acara ini kembali diagendakan oleh Bibor. Pada acara masak yang ketiga, untuk pertama kalinya
            acara ini diagendakan oleh Aceng.
            <!--<br>
            <p class="text-right m-0 p-0" style="font-size:.7rem">Faisal Hanif <span style="color:gray">20 Sep 2020</span></p>-->
            </p>
        </div>

        <div class="m-card card-shadow p-4 mt-5 text-center" data-aos="fade-right">
            <h4 class="text-center mb-4">Riwayat Masak</h4>
            <div class="square-sum p-5 my-3 hist-card card-shadow" data-aos="fade-right" onclick="location.href='hist/2018';" style="background: url('media/Masak_DEC2018_Wide.jpg');background-position-y:60%;background-size:cover;"> 
                <button onclick="location.href = 'hist/2018';" class="link btn"><b style="color:white">25 Desember 2018</b></button>
                <br>
                <a href="hist/2018#gallery" class="text-white link mx-1"><i class="fa fa-image"></i>
                <a href="hist/2018#alumni" class="text-white link mx-1"><i class="fa fa-users"></i></a>
            </div>
            <div class="square-sum p-5 my-3 hist-card card-shadow" data-aos="fade-right" onclick="location.href='hist/2020-1';" style="background: url('media/Masak_JAN20_Gr_Front3.jpg');background-position-y:50%;background-position-x:45%;background-size:cover"> 
                <button onclick="location.href='hist/2020-1';" class="link btn"><b style="color:white">9 Januari 2020</b></button>
                <br>
                <a href="hist/2020-1#gallery" class="text-white link mx-1"><i class="fa fa-image"></i>
                <a href="hist/2020-1#alumni" class="text-white link mx-1"><i class="fa fa-users"></i></a>
            </div>
            <div class="square-sum p-5 my-3 hist-card card-shadow" data-aos="fade-right" onclick="location.href='hist/2020-2';" style="background: url('media/Masak_JUL20_LVR.jpeg');background-position-y:62%;background-position-x:45%;background-size:cover"> 
                <button onclick="location.href='hist/2020-2';" class="link btn"><b style="color:white">4 Juli 2020</b></button>
                <br>
                <a href="hist/2020-2#gallery" class="text-white link mx-1"><i class="fa fa-image"></i>
                <a href="hist/2020-2#alumni" class="text-white link mx-1"><i class="fa fa-users"></i></a>
            </div>
        </div>

        <div class="m-card card-shadow p-4 mt-5 text-center" data-aos="fade-right">
          <h4>Highlights</h4>
          <?php
          if(!isset($_SESSION['loggedin'])) {
            echo '
            <p>Silahkan login untuk melihat highlights.</p>
            <a class="btn btn-outline-success" style="border-radius: 0px;" href="login"><i class="fa fa-sign-in-alt"></i> Login</a>
            ';
          } else {
            echo '
          <div class="gallery js-flickity mb-3" data-aos="fade-right" style="height:100%">
            <div class="gallery-cell my-1 mb-3 mx-1 m-card">
              <div class="square-sum hist-card card-shadow"> 
                <img src="media/Masak_JAN20_Gr_Front1.jpg" alt="Masak Januari 2020" height="200vh" class="m-card">
              </div>
            </div>
            <div class="gallery-cell my-1 mb-3 mx-1 m-card">
              <div class="square-sum hist-card card-shadow"> 
                <img src="media/Masak_JAN20_Gr_Front3.jpg" alt="Masak Januari 2020" height="200vh" class="m-card">
              </div>
            </div>
            <div class="gallery-cell my-1 mb-3 mx-1 m-card">
              <div class="square-sum hist-card card-shadow"> 
                <img src="media/Masak_DEC2018_Wide.jpg" alt="Masak Desember 2018" height="200vh" class="m-card">
              </div>
            </div>
            <div class="gallery-cell my-1 mb-3 mx-1 m-card">
              <div class="square-sum hist-card card-shadow"> 
                <img src="media/Masak_JUL20_LVR.jpeg" alt="Masak Juli 2020" height="200vh" class="m-card">
              </div>
            </div>
            <div class="gallery-cell my-1 mb-3 mx-1 m-card">
              <div class="square-sum hist-card card-shadow"> 
                <img src="media/Masak_JAN20_Overhead1.jpg" alt="Masak Januari 2020" height="200vh" class="m-card">
              </div>
            </div>
          </div>
            ';
          }
          
          ?>
        </div>

        <a class="p-0 hide change-section" id="scrollTop" href="#masakMainSlide" style="opacity:50%;position:fixed;bottom:5vh;right:5vw;transform:translateX(-50%)translateY(-50%);background-color:rgb(125,125,125);width:25px;height:25px;border-radius:50%">
            <i class="fas fa-angle-up align-self-center text-center" style="color:white;padding-left:7px;"></i>
        </a>
        
    </div>
    <div class="footer container-fluid text-center p-2 mt-4">
        <a>&copy; <?php echo date('Y');?> Faisal Hanif. MasakUI v1.21. <a href="?legacy" class="link">Use version 1.0</a>.</a>
    </div>
    <?php include_once "_incjs.php";?>

    <script src="https://cdnjs.cloudflare.com/ajax/libs/flickity/1.0.0/flickity.pkgd.js"></script>
</body>
</html>