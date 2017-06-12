<?php 

  include '../neting/baglan.php';
  date_default_timezone_set('Europe/Istanbul');
  ob_start();
  session_start();

$kullanicisor= $db->prepare("select * from kullanici where kullanici_ad=:ad");
$kullanicisor->execute(array(
'ad' => $_SESSION['kullanici_ad']
  ));

$say = $kullanicisor->rowCount();

if($say==0)
{
  header("Location:login.php?durum=izinsiz");
  exit;
}

$kullanicicek = $kullanicisor->fetch(PDO::FETCH_ASSOC);

?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <!-- Meta, title, CSS, favicons, etc. -->
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title> Yönetim Paneli </title>

    <!-- Bootstrap -->
    <link href="../vendors/bootstrap/dist/css/bootstrap.min.css" rel="stylesheet">
    <!-- Font Awesome -->
    <link href="../vendors/font-awesome/css/font-awesome.min.css" rel="stylesheet">
    <!-- NProgress -->
    <link href="../vendors/nprogress/nprogress.css" rel="stylesheet">

    <!-- Custom Theme Style -->
    <link href="../build/css/custom.min.css" rel="stylesheet">
  </head>

  <body class="nav-md">
    <div class="container body">
      <div class="main_container">
        <div class="col-md-3 left_col">
          <div class="left_col scroll-view">
            <div class="navbar nav_title" style="border: 0;">
              <a href="index.php" class="site_title"><i class="fa fa-paw"></i> <span>Selaam!! Doktor</span></a>
            </div>

            <div class="clearfix"></div>

            <!-- menu profile quick info -->
            <div class="profile clearfix">
              <div class="profile_pic">
                <img src="images/img.jpg" alt="..." class="img-circle profile_img">
              </div>
              <div class="profile_info">
                <span>Hoşgeldin,</span>
                <h2><?php echo $_SESSION['kullanici_ad']; ?></h2>
              </div>
              <div class="clearfix"></div>
            </div>
            <!-- /menu profile quick info -->

            <br />

           <?php include'doktor-sidebar.php'; ?>

            <!-- /menu footer buttons -->
            <div class="sidebar-footer hidden-small">
              <a data-toggle="tooltip" data-placement="top" title="Settings">
                <span class="glyphicon glyphicon-cog" aria-hidden="true"></span>
              </a>
              <a data-toggle="tooltip" data-placement="top" title="FullScreen">
                <span class="glyphicon glyphicon-fullscreen" aria-hidden="true"></span>
              </a>
              <a data-toggle="tooltip" data-placement="top" title="Lock">
                <span class="glyphicon glyphicon-eye-close" aria-hidden="true"></span>
              </a>
              <a data-toggle="tooltip" data-placement="top" title="Logout">
                <span class="glyphicon glyphicon-off" aria-hidden="true"></span>
              </a>
            </div>
            <!-- /menu footer buttons -->
          </div>
        </div>

        <!-- top navigation -->
        <div class="top_nav">
          <div class="nav_menu">
            <nav>
              <div class="nav toggle">
                <a id="menu_toggle"><i class="fa fa-bars"></i></a>
              </div>

              <ul class="nav navbar-nav navbar-right">
                <li class="">
                  <a href="javascript:;" class="user-profile dropdown-toggle" data-toggle="dropdown" aria-expanded="false">
                    <img src="images/img.jpg" alt=""><?php echo $_SESSION['kullanici_ad']; ?>
                    <span class=" fa fa-angle-down"></span>
                  </a>
                  <ul class="dropdown-menu dropdown-usermenu pull-right">
                    <li><a href="kullanici-profil.php"> Profil Düzünle</a></li>
                   
                    
                    <li><a href="logout.php"><i class="fa fa-sign-out pull-right"></i> Çıkış Yap</a></li>
                  </ul>
                </li>

                  <li role="presentation" class="dropdown">
                  <a href="javascript:;" class="dropdown-toggle info-number" data-toggle="dropdown" aria-expanded="false">
                    <i class="fa fa-envelope-o"></i>
                    <span class="badge bg-green">6</span>
                  </a>
                  <ul id="menu1" class="dropdown-menu list-unstyled msg_list" role="menu">
                    <li>
                      <a>
                        <span class="image"><img src="images/img.jpg" alt="Profile Image" /></span>
                        <span>
                          <span>Ali Şerif</span>
                          <span class="time">45 dakika önce</span>
                        </span>
                        <span class="message">
                          Hasta kaydı güncellemesi
                        </span>
                      </a>
                    </li>
                    <li>
                      <a>
                        <span class="image"><img src="images/img.jpg" alt="Profile Image" /></span>
                        <span>
                          <span>Ayşe Durak</span>
                          <span class="time">57 dakika önce</span>
                        </span>
                        <span class="message">
                          Hasta Dosyası Onayı
                        </span>
                      </a>
                    </li>
                    <li>
                      <a>
                        <span class="image"><img src="images/img.jpg" alt="Profile Image" /></span>
                        <span>
                          <span>Selim Kırlı</span>
                          <span class="time">3 saat önce</span>
                        </span>
                        <span class="message">
                          Hasta dosyası Oluşturma
                        </span>
                      </a>
                    </li>
                    <li>
                      <a>
                        <span class="image"><img src="images/img.jpg" alt="Profile Image" /></span>
                        <span>
                          <span>Zeynep Dişli</span>
                          <span class="time">5 saat önce</span>
                        </span>
                        <span class="message">
                           Hasta kaydı güncellemesi
                        </span>
                      </a>
                    </li>
                    <li>
                      <div class="text-center">
                        <a>
                          <strong>Tüm Mesajlara Bak</strong>
                          <i class="fa fa-angle-right"></i>
                        </a>
                      </div>
                    </li>
                  </ul>
                </li>
                  
              </ul>
            </nav>
          </div>
        </div>
        <!-- /top navigation -->