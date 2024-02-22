<!DOCTYPE html>
<html lang="en">
   <head>
      <meta charset="utf-8">
      <title>Kider - Escola Bilingue</title>
      <meta content="width=device-width, initial-scale=1.0" name="viewport">
      <meta content="" name="keywords">
      <meta content="" name="description">
      <!-- Favicon -->
      <link href="img/favicon.ico" rel="icon">
      <!-- Google Web Fonts -->
      <link rel="preconnect" href="https://fonts.googleapis.com">
      <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
      <link href="https://fonts.googleapis.com/css2?family=Heebo:wght@400;500;600&family=Inter:wght@600&family=Lobster+Two:wght@700&display=swap" rel="stylesheet">
      <!-- Icon Font Stylesheet -->
      <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.10.0/css/all.min.css" rel="stylesheet">
      <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.4.1/font/bootstrap-icons.css" rel="stylesheet">
      <!-- Libraries Stylesheet -->
      <link href="lib/animate/animate.min.css" rel="stylesheet">
      <link href="lib/owlcarousel/assets/owl.carousel.min.css" rel="stylesheet">
      <!-- Customized Bootstrap Stylesheet -->
      <link href="css/bootstrap.min.css" rel="stylesheet">
      <!-- Template Stylesheet -->
      <link href="css/style.css" rel="stylesheet">
      <!-- JavaScript Libraries -->
      <script src="https://code.jquery.com/jquery-3.4.1.min.js"></script>
      <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0/dist/js/bootstrap.bundle.min.js"></script>
      <script src="lib/wow/wow.min.js"></script>
      <script src="lib/easing/easing.min.js"></script>
      <script src="lib/waypoints/waypoints.min.js"></script>
      <script src="lib/owlcarousel/owl.carousel.min.js"></script>
   </head>
   <body>
      <div class="container-xxl bg-white p-0">
         <!-- Spinner Start -->
         <div id="spinner" class="show bg-white position-fixed translate-middle w-100 vh-100 top-50 start-50 d-flex align-items-center justify-content-center">
            <div class="spinner-border text-primary" style="width: 3rem; height: 3rem;" role="status">
               <span class="sr-only">Carregando...</span>
            </div>
         </div>
         <!-- Spinner End -->
         <!-- Navbar Start -->
         <nav class="navbar navbar-expand-lg bg-white navbar-light sticky-top px-4 px-lg-5 py-lg-0">
            <a href="index.php" class="navbar-brand">
               <h1 class="m-0 text-primary"><i class="fa fa-book-reader me-3"></i>Kider</h1>
            </a>
            <button type="button" class="navbar-toggler" data-bs-toggle="collapse" data-bs-target="#navbarCollapse">
            <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarCollapse">
               <div class="navbar-nav mx-auto">
                  <a href="index.php" class="nav-item nav-link active">Início</a>
                  <a href="professor.php" class="nav-item nav-link">Seja Professor</a>
                  <div class="nav-item dropdown">
                     <a href="#" class="nav-link dropdown-toggle" data-bs-toggle="dropdown">Mais</a>
                     <div class="dropdown-menu rounded-0 rounded-bottom border-0 shadow-sm m-0">
                        <a href="" class="dropdown-item">Nosso programa</a>
                        <a href="professores.php" class="dropdown-item">Nossos professores</a>
                        <a href="" class="dropdown-item">Seja um professor</a>
                        <a href="" class="dropdown-item">Depoimentos</a>
                     </div>
                  </div>
                  <a href="pergunta.php" class="nav-item nav-link">Contato</a>
               </div>
               <a href="index.php" class="btn btn-primary rounded-pill px-3 d-none d-lg-block">Crie sua conta<i class="fa fa-arrow-right ms-3"></i></a>
            </div>
         </nav>
         <!-- Navbar End -->
         <!-- Appointment Start -->
         <div class="container-xxl py-5">
            <div class="container">
               <div class="bg-light rounded">
                  <div class="row g-0">
                     <div class="col-lg-6 wow fadeIn" data-wow-delay="0.1s">
                        <div class="h-100 d-flex flex-column justify-content-center p-5">
                           <h1 class="mb-4">Contato</h1>
                           <form>
                              <div class="row g-3">
                                 <div class="col-sm-6">
                                    <div class="form-floating">
                                       <input type="text" class="form-control border-0" id="gname" placeholder="">
                                       <label for="gname">Nome dos pais</label>
                                    </div>
                                 </div>
                                 <div class="col-sm-6">
                                    <div class="form-floating">
                                       <input type="email" class="form-control border-0" id="gmail" placeholder="">
                                       <label for="gmail">Email</label>
                                    </div>
                                 </div>
                                 <div class="col-sm-6">
                                    <div class="form-floating">
                                       <input type="text" class="form-control border-0" id="cname" placeholder="">
                                       <label for="cname">Nome da criança</label>
                                    </div>
                                 </div>
                                 <div class="col-sm-6">
                                    <div class="form-floating">
                                       <input type="text" class="form-control border-0" id="cage" placeholder="">
                                       <label for="cage">Idade</label>
                                    </div>
                                 </div>
                                 <div class="col-12">
                                    <div class="form-floating">
                                       <textarea class="form-control border-0" placeholder="" id="message"></textarea>
                                       <label for="message">Recado</label>
                                    </div>
                                 </div>
                                 <div class="col-12">
                                    <button class="btn btn-primary w-100 py-3" type="submit">Enviar</button>
                                 </div>
                              </div>
                           </form>
                        </div>
                     </div>
                     <div class="col-lg-6 wow fadeIn" data-wow-delay="0.5s" style="min-height: 400px;">
                        <div class="position-relative h-100">
                           <img class="position-absolute w-100 h-100 rounded" src="img/appointment.jpg" style="object-fit: cover;">
                        </div>
                     </div>
                  </div>
               </div>
            </div>
         </div>
         <!-- Appointment End -->
         <!-- Footer Start -->
         <div class="container-fluid bg-dark text-white-50 footer pt-5 mt-5 wow fadeIn" data-wow-delay="0.1s">
            <div class="container py-5">
               <div class="row g-5">
                  <div class="col-lg-3 col-md-6">
                     <h3 class="text-white mb-4">Onde estamos</h3>
                     <p class="mb-2"><i class="fa fa-map-marker-alt me-3"></i>Avenida ACM, 1520 - Ilhéus - Ba</p>
                     <p class="mb-2"><i class="fa fa-phone-alt me-3"></i>(73) 3656-0120</p>
                     <p class="mb-2"><i class="fa fa-envelope me-3"></i>info@kider.com.br</p>
                     <div class="d-flex pt-2">
                        <a class="btn btn-outline-light btn-social" href=""><i class="fab fa-twitter"></i></a>
                        <a class="btn btn-outline-light btn-social" href=""><i class="fab fa-facebook-f"></i></a>
                        <a class="btn btn-outline-light btn-social" href=""><i class="fab fa-youtube"></i></a>
                     </div>
                  </div>
                  <div class="col-lg-3 col-md-6">
                     <h3 class="text-white mb-4">Galeria</h3>
                     <div class="row g-2 pt-2">
                        <div class="col-4">
                           <img class="img-fluid rounded bg-light p-1" src="img/classes-1.jpg" alt="">
                        </div>
                        <div class="col-4">
                           <img class="img-fluid rounded bg-light p-1" src="img/classes-2.jpg" alt="">
                        </div>
                        <div class="col-4">
                           <img class="img-fluid rounded bg-light p-1" src="img/classes-3.jpg" alt="">
                        </div>
                        <div class="col-4">
                           <img class="img-fluid rounded bg-light p-1" src="img/classes-4.jpg" alt="">
                        </div>
                        <div class="col-4">
                           <img class="img-fluid rounded bg-light p-1" src="img/classes-5.jpg" alt="">
                        </div>
                        <div class="col-4">
                           <img class="img-fluid rounded bg-light p-1" src="img/classes-6.jpg" alt="">
                        </div>
                     </div>
                  </div>
                  <div class="col-lg-3 col-md-6">
                     <h3 class="text-white mb-4">Assine nossa newsletter</h3>
                     <p>Dolor amet sit justo amet elitr clita ipsum elitr est.</p>
                     <div class="position-relative mx-auto" style="max-width: 400px;">
                        <input class="form-control bg-transparent w-100 py-3 ps-4 pe-5" type="text" placeholder="   Seu email">
                        <button type="button" class="btn btn-primary py-2 position-absolute top-0 end-0 mt-2 me-2">Enviar</button>
                     </div>
                  </div>
               </div>
            </div>
         </div>
         <!-- Footer End -->
         <!-- Back to Top -->
         <a href="#" class="btn btn-lg btn-primary btn-lg-square back-to-top"><i class="bi bi-arrow-up"></i></a>
      </div>
      <script src="js/main.js"></script>
   </body>
</html>