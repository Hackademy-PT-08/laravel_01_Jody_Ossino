<!DOCTYPE html>
<html lang="it">
    <head>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Presto.it</title>
        <!-- Google Font -->
        <link href="https://fonts.googleapis.com/css?family=Poppins:300,400,500,600,700,800,900" rel="stylesheet">
        <!-- Icona barra superiore -->
        <link rel="Website Icon" type="png" href="./img/favicon-prestoit.png">
        <!-- Bootstrap CSS -->
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-9ndCyUaIbzAi2FUVXJi0CjmCapSmO7SnpJef0486qhLnuZ2cdeRhO02iuK6FUUVM" crossorigin="anonymous">   
        <!-- Caraousel CSS --> 
        <link rel="stylesheet" href="./css carousel/css/owl.carousel.min.css">
        <link rel="stylesheet" href="./css carousel/css/owl.theme.default.min.css">
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/ionicons/4.5.6/css/ionicons.min.css">
        <link rel="stylesheet" href="./css carousel/css/style.css">  
        <!-- My CSS  -->
        <link href="css/styles.css" rel="stylesheet" />
        <link href="./css/querystyles.css" rel="stylesheet">   
    </head>
    <body>
    

          <!-- NAVBAR--> 
        <section id="navbar" class="my-bg-nav shadow-lg">
          <div class="container px-lg-5">
            <nav class="navbar navbar-expand-lg p-3">
              <div class="container-fluid">
                <img src="./img/navbar-logo-presto.it.png" style="height: 50px; width: 150px;" alt="">
                <button class="navbar-toggler my-navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
                  <i class="fa-solid fa-bars fa-lg" style="color: #a08cc4;"></i>
                </button>
                <div class=" collapse navbar-collapse" id="navbarNavDropdown">
                  <ul class="navbar-nav ms-auto text-center fs-6 ">
                    <li class="nav-item special-effect">
                      <a class="nav-link mx-2 active" aria-current="page" href="/">Home</a>
                    </li>
                    <li class="nav-item special-effect">
                      <a class="nav-link mx-2" href="/pagina-2">Candidati</a>
                    </li>
                    <li class="nav-item special-effect">
                      <a class="nav-link mx-2" href="/pagina-3">Info</a>
                    </li>
                  </ul>
                  <ul class="navbar-nav ms-auto d-none d-lg-inline-flex">
                    <li class="nav-item mx-2">
                      <a class="nav-link text-dark h5" href="#"><i class="fa-brands fa-facebook fa-2xl hoverBounce" style="color: #a08cc4;"></i></a>
                    </li>
                    <li class="nav-item mx-2">
                      <a class="nav-link text-dark h5" href="#"><i class="fa-brands fa-instagram fa-2xl hoverBounce" style="color: #a08cc4;"></i></a>
                    </li>
                    <li class="nav-item mx-2">
                      <a class="nav-link text-dark h5" href="#"><i class="fa-brands fa-twitter fa-2xl hoverBounce" style="color: #a08cc4;"></i></a>
                    </li>
                  </ul>
                </div>
              </div>
            </nav>
          </div>
        </section>


           <!-- CONTACT FORM -->
           <section id="contact" class="shadow-lg">
            <div class="container mb-sm-5">
              <div class="row">
                <p class="text-center fs-1 mt-5">Lavora con noi!</p>
                <p class="fs-5 text-center">Inviaci la tua <span class="lilla">candidatura</span> </p>
                <div class="col-12 col-md-6 p-lg-5">
                  <img src="./img/section-lavoraconnoi.svg" alt="" class="img-fluid animationLeft">
                </div>
                <div class="col-12 col-md-6 px-5 p-lg-5">
                  <form id="contactForm" class="mt-4 animationRight p-lg-5">
                    <div class="mb-3">
                     <input id="fullnameInput" type="text" class="form-control my-card-bg" placeholder="Nome e Cognome">
                    </div>
                    <div class="mb-3">
                      <input id="emailInput" type="email" class="form-control my-card-bg" placeholder="Inserisci la tua email">
                    </div>
                    <div class="mb-3">
                      <div class="form-floating">
                        <textarea id="messageInput my-card-bg" class="form-control form-control-lg my-card-bg" style="height: 100px;"></textarea>
                        <label for="messageInput">Parlaci di te</label>
                      </div>
                    </div>
                    <div class="mb-3 form-check">
                      <input type="checkbox" class="form-check-input my-form-check-input " id="exampleCheck1">
                      <label class="form-check-label" for="exampleCheck1">Accetto, termini e condizioni</label>
                    </div>
                    <button id="btnInput" type="submit" class="btn my-btn mb-5 shadow-lg">Invia la tua candidatura</button>
                  </form>
                </div>
              </div>
            </div>
        </section>

        <!-- Font-Awesome -->
        <script src="https://kit.fontawesome.com/7145949cc6.js" crossorigin="anonymous"></script>
         <!-- Bootstrap JS -->
         <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-geWF76RCwLtnZ8qwWowPQNguL3RmwHVBC9FhGdlKrxdiJJigb/j/68SIy3Te4Bkz" crossorigin="anonymous"></script>
        
         <script src="/js/scripts.js"></script>
      </body>
</html>