<!DOCTYPE html>
<html lang="en">
   <head>
      <!-- basic -->
      <meta charset="utf-8">
      <meta http-equiv="X-UA-Compatible" content="IE=edge">
      <!-- mobile metas -->
      <meta name="viewport" content="width=device-width, initial-scale=1">
      <meta name="viewport" content="initial-scale=1, maximum-scale=1">
      <!-- site metas -->
      <title>IKALOG</title>
      <meta name="keywords" content="">
      <meta name="description" content="">
      <meta name="author" content="">
      <!-- bootstrap css -->
      <link rel="stylesheet" href="css/bootstrap.min.css">
      <!-- style css -->
      <link rel="stylesheet" href="css/style.css">
      <!-- Responsive-->
      <link rel="stylesheet" href="css/responsive.css">
      <!-- fevicon -->
      <link rel="icon" href="images/fevicon.png" type="image/gif" />
      <!-- Scrollbar Custom CSS -->
      <link rel="stylesheet" href="css/jquery.mCustomScrollbar.min.css">
      <!-- Tweaks for older IEs-->
      <link rel="stylesheet" href="https://netdna.bootstrapcdn.com/font-awesome/4.0.3/css/font-awesome.css">
      <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/fancybox/2.1.5/jquery.fancybox.min.css" media="screen">
      <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script><![endif]-->
   </head>
   <!-- body -->
   <body class="main-layout position_head">
      <!-- loader  -->
      <div class="loader_bg">
         <div class="loader"><img src="images/load.gif" alt="#" /></div>
      </div>
      <!-- end loader -->
      <!-- header -->
      <header>
         <!-- header inner -->
         <div class="header">
            <div class="container-fluid">
               <div class="row">
                  <div class="col-xl-3 col-lg-3 col-md-3 col-sm-3 col logo_section">
                     <div class="full">
                        <div class="center-desk">
                           <div class="logo">
                              <a href="index.php"><img src="images/ikalogrmv.png" alt="#" /></a>
                           </div>
                        </div>
                     </div>
                  </div>
                  <div class="col-xl-9 col-lg-9 col-md-9 col-sm-9">
                     <nav class="navigation navbar navbar-expand-md navbar-dark ">
                        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarsExample04" aria-controls="navbarsExample04" aria-expanded="false" aria-label="Toggle navigation">
                        <span class="navbar-toggler-icon"></span>
                        </button>
                        <div class="collapse navbar-collapse" id="navbarsExample04">
                           <ul class="navbar-nav mr-auto">
                              <li class="nav-item active">
                                 <a class="nav-link" href="index.php">beranda</a>
                              </li>
                              <li class="nav-item">
                                 <a class="nav-link" href="favorite.php">designer favorite</a>
                              </li>
                              <li class="nav-item">
                                 <a class="nav-link" href="designer.php">designer</a>
                              </li>
                              <li class="nav-item">
                                 <a class="nav-link" href="trend.php">designer terkenal</a>
                              </li>

                              <li class="nav-item d_none login_btn">
                                 <a class="nav-link" href="login.php">masuk</a>
                              </li>
                              <li class="nav-item d_none">
                                 <a class="nav-link" href="register.php">daftar</a>
                              </li>
                              <li class="nav-item d_none sea_icon">
                                 <a class="nav-link" href="#"><i class="fa fa-shopping-bag" aria-hidden="true"></i><i class="fa fa-search" aria-hidden="true"></i></a>
                              </li>
                           </ul>
                        </div>
                     </nav>
                  </div>
               </div>
            </div>
         </div>
      </header>
      <!-- end header inner -->
      <!-- end header -->

      <section class="pt-5 pb-5">
  <div class="container">
    <div class="row w-100">
        <div class="col-lg-12 col-md-12 col-12">
            <h3 class="display-5 mb-2 text-center">Desaigner Favorite</h3>
            <p class="mb-5 text-center">
                <i class="text-info font-weight-bold"></i> 3 perusahaan disini</p>
            <table id="shoppingCart" class="table table-condensed table-responsive">
                <thead>
                    <tr>
                        <th style="width:100%">Perusahaan</th>
                        <th style="width:20%"></th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td data-th="Product">
                            <div class="row">
                                <div class="col-md-3 text-left">
                                <img src="images/baru1.png" alt=''>
                                </div>
                                <div class="col-md-9 text-left mt-sm-2">
            <a href="casade.php">
                <h3 class="text" href="casade.php"></h3> Casade</a>
                                    <p class="font-weight-light">kamu puas kami senang</p>
                                </div>
                            </div>
</td>
                        <td class="actions" data-th="">
                            <div class="text-right">
                                <button class="btn btn-white border-secondary bg-white btn-md mb-2">
                                    <i class="fas fa-sync"></i>
                                </button>
                                <button class="btn btn-white border-secondary bg-white btn-md mb-2">
                                    <i class="fas fa-trash"></i>
                                </button>
                            </div>
                        </td>
                    </tr>
                    <tr>
                        <td data-th="Product">
                            <div class="row">
                                <div class="col-md-3 text-left">
                                    <img src="images/baru5.png" alt=''>
                                </div>
                                <div class="col-md-9 text-left mt-sm-2">
                                <a href="Appoy.php">
                <h3 class="text" href="Appoy.php"></h3> Appoynamics</a>
                                    <p class="font-weight-light">kekuatan imajinasi</p>
                                </div>
                            </div>
                        </td>
                        <td class="actions" data-th="">
                            <div class="text-right">
                                <button class="btn btn-white border-secondary bg-white btn-md mb-2">
                                    <i class="fas fa-sync"></i>
                                </button>
                                <button class="btn btn-white border-secondary bg-white btn-md mb-2">
                                    <i class="fas fa-trash"></i>
                                </button>
                            </div>
                        </td>
                    </tr>
                    <tr>
                        <td data-th="Product">
                            <div class="row">
                                <div class="col-md-3 text-left">
                                <img src="images/baru3.png" alt=''>
                                </div>
                                <div class="col-md-9 text-left mt-sm-2">
                                <a href="workshop.php">
                <h3 class="text" href="workshop.php"></h3>Workshop 88</a>
                                    <p class="font-weight-light">bekerja dengan ikhlas</p>
                                </div>
                            </div>
                        </td>
                        <td class="actions" data-th="">
                            <div class="text-right">
                                <button class="btn btn-white border-secondary bg-white btn-md mb-2">
                                    <i class="fas fa-sync"></i>
                                </button>
                                <button class="btn btn-white border-secondary bg-white btn-md mb-2">
                                    <i class="fas fa-trash"></i>
                                </button>
                            </div>
                        </td>
                    </tr>
                </tbody>
            </table>
        </div>
    </div>
        <div class="col-sm-6 mb-3 mb-m-1 order-md-1 text-md-left">
            <a href="index.php">
                <i class="fas fa-arrow-left mr-2" href="index.php"></i> Continue Shopping</a>
        </div>
    </div>
</div>
</section>
<br>
<br>
<br>
      <!-- end Our shop section -->
       <!-- Footer -->
   <footer
           class="text-center text-lg-start text-white"
           style="background-color: #211104"
           >
     <!-- Grid container -->
     <div class="container p-4 pb-0">
       <!-- Section: Links -->
       <section class="">
         <!--Grid row-->
         <div class="row">
           <!-- Grid column -->
           <div class="col-md-3 col-lg-3 col-xl-3 mx-auto mt-3">
             <h6 class="text-uppercase mb-4 font-weight-bold">
               IKALOG
             </h6>
             <p>
             IKALOG adalah halaman website yang dapat memudahkan dan menghemat waktu Anda dalam mengatur tata letak logo brand Anda, serta membuatnya lebih mudah dikenali oleh orang-orang di sekitar Anda.
             </p>
           </div>
           <!-- Grid column -->
 
           <hr class="w-100 clearfix d-md-none" />
 
           <!-- Grid column -->
           <div class="col-md-2 col-lg-2 col-xl-2 mx-auto mt-3">
             <h6 class="text-uppercase mb-4 font-weight-bold">Fitur</h6>
             <p>
               <a class="text-white" href="index.php" class="card-link">beranda</a>
             </p>
             <p>
             <a class="text-white" href="favorite.php" class="card-link">designer favorite</a>
             </p>
             <p>
               <a class="text-white" href="designer.php" class="card-link">designer</a>
             </p>
             <p>
               <a class="text-white" href="trend.php" class="card-link">designer terkenal</a>
             </p>
           </div>
           <!-- Grid column -->
 
           <hr class="w-100 clearfix d-md-none" />
 
           <!-- Grid column -->
           <div class="col-md-2 col-lg-2 col-xl-2 mx-auto mt-3">
             <h6 class="text-uppercase mb-4 font-weight-bold">Tentang akun</h6>
             <p>
               <a class="text-white" href="login.php" class="card-link">masuk</a>
             </p>
             <p>
               <a class="text-white" href="register.php" class="card-link">daftar</a>
             </p>
             <p>
               <a class="text-white" href="https://wa.me/081358354890/" class="card-link">help</a>
             </p>
           </div>
 
           <!-- Grid column -->
           <hr class="w-100 clearfix d-md-none" />
 
           <!-- Grid column -->
           <div class="col-md-2 col-lg-2 col-xl-2 mx-auto mt-3">
             <h6 class="text-uppercase mb-4 font-weight-bold">Kontak</h6>
             <p>
             <a class="text-white" href="https://instagram.com/anthr.dark?igshid=ZDdkNTZiNTM=" class="card-link">@anthr.dark</a>
             </p>
             <p>
               <a class="text-white" href="#" class="card-link">rizkalvia03@gmail.com</a>
             </p>
             <p>
               <a class="text-white" href="https://wa.me/081358354890/" class="card-link">+62 81 358 354 890</a>
             </p>
           </div>
           <!-- Grid column -->
         </div>
         <!--Grid row-->
       </section>
       <!-- Section: Links -->
 
       <hr class="my-3">
 
       <!-- Section: Copyright -->
       <section class="p-3 pt-0">
         <div class="row d-flex align-items-center">
           <!-- Grid column -->
           <div class="col-md-7 col-lg-8 text-center text-md-start">
             <!-- Copyright -->
             <div class="p-3">
               © 2022 Copyright:
               <a class="text-white" href="https://mdbootstrap.com/"
                  >MDBootstrap.com.rizkaalvia_32_xirpla</a
                 >
             </div>
             <!-- Copyright -->
           </div>
   </footer>
   <!-- Footer -->
      <!-- Javascript files-->
      <script src="js/jquery.min.js"></script>
      <script src="js/popper.min.js"></script>
      <script src="js/bootstrap.bundle.min.js"></script>
      <script src="js/jquery-3.0.0.min.js"></script>
      <!-- sidebar -->
      <script src="js/jquery.mCustomScrollbar.concat.min.js"></script>
      <script src="js/custom.js"></script>
   </body>
</html>