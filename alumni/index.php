<?php
session_start();

if(isset($_GET['legacy'])) {
    include_once "v1.php";
    die();
}

include_once("../dbinterface/dbconnect-sql.php");

$refer = true;
$config = "https://assets.faisalhanif.me";

$cbg = rand(1,2);
if($cbg == 1) $coverBg = 'Masak_JAN20_Gr_Front3.jpg';
if($cbg == 2) $coverBg = 'Masak_JUL20_LVR.jpeg';

$dark = false;
if(isset($_POST['_theme'])) $_SESSION['_theme'] = $_POST['_theme'];
if(isset($_SESSION['_theme']) && $_SESSION['_theme']==1) $dark = true;

?>
<!DOCTYPE html>
<html>
<head>
    <title>Masak</title>
    <?php include_once "../_incheader2.php";?>
    <style>
        .master-head {
            height: 100vh;
        }
        .text-header {
            position: absolute;
            transform: translateX(-50%)translateY(-50%);
            top:50%;
            left: 50%;
        }
        #masakMainSlide {
            background: url('../media/<?php echo $coverBg;?>');
            background-size: cover;
            background-position-x: center!important;
            background-position-y: center!important;
            background-attachment: fixed;
            filter: contrast(110%) saturate(120%) brightness(0.7);
        }
        @media(min-width:720px) {
            .master-head {
                height: 75vh;
            }
            #masakMainSlide {
                background-position-y: 75%!important;
            }
        }
        .square-sum {
            border-radius: 7px;
        }
        .link {
            text-decoration: none;
        }
        .blur {
            filter: blur(2px);
        }
        .navbar-nav.navbar-center {
            position: absolute;
            left: 50%;
            transform: translatex(-50%);
        }
        .masak-table-achievement {
            padding-left: 15px;
            padding-right: 15px;
        }
    </style>
</head>

<body>

<div class="wrapper pb-5">
<!--Header-->
    <div class="container-fluid master-head" id="masakMainSlide">
        <h1 class="text-header text-center p-4 m-card card-shadow" style="color:#1b1b1b;background-color:rgba(255,255,255,.7);">Alumni</h1>
    </div>

<!--Navbar-->
<nav class="navbar navbar-expand-lg m-nav-light bg-nav sticky-top card-shadow" id="mainNav">
  <a class="navbar-brand" href=".">MASAK</a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
    <i class="fa fa-ellipsis-h"></i>
  </button>
  <div class="collapse navbar-collapse" id="navbarNavDropdown">
    <ul class="navbar-nav">
      <li class="nav-item">
        <a class="nav-link" href="..">Home</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="../gallery">Galeri</a>
      </li>
      <li class="nav-item active">
        <a class="nav-link" href=".">Alumni</a>
      </li>
      <li class="nav-item dropdown">
        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
          Riwayat
        </a>
        <div class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
          <a class="dropdown-item" href="../hist/2018">Desember 2018</a>
          <a class="dropdown-item" href="../hist/2020-1">Januari 2020</a>
          <a class="dropdown-item" href="../hist/2020-2">Juli 2020</a>
        </div>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="../upcoming">Akan Datang</a>
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
<div class="wrapper p-3">
    <div class="container mt-5" id="listAlumni">
        
        <div class="m-card card-shadow p-4">
            <h4>Alumni Masak</h4>
            <div class="card-body">
                <?php

                $result=$conn->query("SELECT count(*) as total from alumnidata");
                $data=$result->fetch_assoc();
                $max = $data['total'];

                if($max > 0) {
                    $att = 0;
                    echo '<div class="container-fluid">
                    <table style="margin:0 auto; overflow-x:auto;width:100%">';
                    for($list = 1; $list <= $max && $list > 0; $list++) {
                        $sql = "SELECT * FROM `alumnidata` WHERE `alid` = $list";
                        $result = $conn->query($sql);while($row = $result->fetch_assoc()) {
                            if($row['attended']) {
                                $att++;
                                $alumAchievementCounter = 0;
                                echo '
                                    <tr style="padding: 15px;overflow-x:auto;" class="'; 
                                    //if($att%2==0) echo 'bg-secondary text-white'; else echo 'bg-dark text-white';
                                    echo'">
                                        <td class="masak-table-name"><b>'.$row['name'].' </b></td>
                                        <td class="masak-table-achievement row">';
                                        if($row['m2018'] == 1) {
                                            echo '<img class="mx-1" src="https://masak.faisalhanif.me/media/badge/badge_m2018.png" width="25px" alt="Masak 2018">';
                                            $alumAchievementCounter++;
                                        }
                                        if($row['m20201'] == 1) {
                                            echo '<img class="mx-1" src="https://masak.faisalhanif.me/media/badge/badge_m20201.png" width="25px" alt="Masak Jan 2020">';
                                            $alumAchievementCounter++;
                                        }
                                        if($row['m20202'] == 1) {
                                            echo '<img class="mx-1" src="https://masak.faisalhanif.me/media/badge/badge_m20202.png" width="25px" alt="Masak Jul 2020">';
                                            $alumAchievementCounter++;
                                        }
                                    echo '</td>';
                                    if($alumAchievementCounter == 3) echo '<!--<td>👍</td>-->';
                                    echo'</tr>';
                                
                            }
                        }
                    }
                    echo '</table><text class="mt-3">Total: '.$att.' alumnus</text></div>';
                }
                $perc = ($att/$max)*100;
                echo "<!--".number_format($perc,1,",",".")."% attendance-->";
                ?>
            </div>
        </div>
    </div>

</div>
    
</div>
<a class="p-0 hide change-section" id="scrollTop" href="#masakMainSlide" style="opacity:50%;position:fixed;bottom:5vh;right:5vw;transform:translateX(-50%)translateY(-50%);background-color:rgb(125,125,125);width:25px;height:25px;border-radius:50%">
    <i class="fas fa-angle-up align-self-center text-center" style="color:white;padding-left:7px;"></i>
</a>
<div class="footer container-fluid text-center p-2 mt-2">
    <a>&copy; <?php echo date('Y');?> Faisal Hanif. MasakUI v1.21. <a href="?legacy" class="link">Use version 1.0</a>.</a>
</div>
    <?php include_once "../_incjs.php";?>
</body>

</html>