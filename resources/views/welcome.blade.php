<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>G-mys | Monitoreo Satelital</title>

  <script src="{{ asset('js/app.js') }}" defer></script>
  <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">
  <script src="https://kit.fontawesome.com/2c36e9b7b1.js"></script>
  <script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>
  <link href="{{ asset('css/app.css') }}" rel="stylesheet">

  <style type="text/css">
    .body{
      background: #f0f2f5;
    }
    .zoom {
    transition: transform .6s; 
    }
 
    .zoom:hover {
    transform: scale(1.3); 
    }

   .btn{
    width: 150px;
    background: ;
    height: 45px;
    border-radius: 45px;
    cursor: pointer;
    border: none;
    text-transform: uppercase;
    letter-spacing: 2px;
    font-weight: bold;
    box-shadow: 0px 8px 15px rgba(0, 0, 0, 0.1);
    transition: all 0.5s ease;
    }

    .btn:hover{
      background: #2ceae5;
      transform: translateY(-7px);
      color: #fff;
      box-shadow: 0px 10px 25px rgba(46, 223, 229, 0.445);
      }

      .icon{
        display: inline-block;
        font-size: 30px;
        animation: float 5s ease-in-out infinite;
      }

      .fab fa-facebook{
        animation-delay: 1s;
      }
      .fab fa-twitter{
        animation-delay: 2s;
      }

      @keyframes float {
        0%{
          transform: translateY(0);
        }
        50%{
          transform: translateY(-15px);
        }
        100%{
          transform: translateY(0);
        }
      }

  </style>
       
</head>
<body style="background: #f0f2f5">


<nav class="navbar navbar-light bg-white container-fluid" style="padding: 2rem; position:fixed; top:0;z-index: 2; overflow: visible; top: 0px;">
<div class="container-fluid col-md-12">
    <a  href="{{('/')}}"><img src="img/logo.png" style="max-width: 150px;"></a>

  <div class="d-none d-sm-none d-md-block col-md-9">
    <ul class="nav">
      <li class="nav-item" style="margin-right: 20px;">
          <a href="{{ route('portafolio') }}"><button class="btn btn-sm btn-outline-info" type="button">SERVICIOS</button></a>
      </li>
      <li class="nav-item" style="margin-right: 20px;">
          <a href="{{ route('nosotros2') }}"><button class="btn btn-sm btn-outline-info" type="button">NOSOTROS</button></a>
      </li>
      <li class="nav-item" style="margin-right: 20px;">
          <a href="{{ route('contacto') }}"><button class="btn btn-sm btn-outline-info" type="button">CONTACTO</button></a>
      </li>
      <li class="nav-item" style="margin-right: 20px;">
          <a href="{{ route('medios') }}"><button class="btn btn-sm btn-outline-info" type="button">MEDIOS DE PAGO</button></a>
      </li>
      <li class="nav-item" style="margin-right: 20px;">
          <a href="{{ route ('home') }}"><button class="btn btn-sm btn-outline-info" type="button">INICIAR SESION</button></a>
      </li>
      <!--<li class="nav-item" style="margin-right: 20px;">
          <a href="{{ route('estadistica')}}"><button class="btn btn-sm btn-outline-info zoom" type="button">ESTADISTICA</button></a>
      </li>!-->
    </ul>
  </div>

    <button class="navbar-toggler d-block d-sm-block d-md-none" type="button" data-bs-toggle="offcanvas" data-bs-target="#offcanvasNavbar" aria-controls="offcanvasNavbar">
    <span class="navbar-toggler-icon" style=""></span>
    </button>

  <div class="offcanvas offcanvas-end" tabindex="-1" id="offcanvasNavbar" aria-labelledby="offcanvasNavbarLabel">
    <div class="offcanvas-header">
        <h5 class="offcanvas-title" id="offcanvasNavbarLabel">GMYS</h5>
        <button type="button" class="btn-close text-reset " data-bs-dismiss="offcanvas" aria-label="Close"></button>
    </div>
      <div class="offcanvas-body">
        <ul class="navbar-nav justify-content-end flex-grow-1 pe-3">
          <li class="nav-item text-center">
              
              <a class="nav-link" href="{{ route('portafolio') }}">SERVICIOS</a>
             
              <a class="nav-link" href="{{ route('nosotros2') }}">NOSOTROS</a>
             
              <a class="nav-link" href="{{ route('contacto') }}">CONTACTO</a>

              <a class="nav-link" href="{{(('/medios'))}}">MEDIOS DE PAGO</a>
              
              <a class="nav-link" href="{{(('home'))}}">INICIAR SESION</a>
          </li>
        </ul>
      </div>
    </div>
  </div>
</nav>


<!-- Carrusel-->
<!--
<div id="carouselExampleCaptions" class="carousel slide" data-bs-ride="carousel" class="container" style="margin-top:10rem;">
  <div class="carousel-indicators">
    <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
    <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="1" aria-label="Slide 2"></button>
    <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="2" aria-label="Slide 3"></button>
  </div>
  <div class="carousel-inner" >
    <div class="carousel-item active">
      <img src="img/1.jpg" class="d-block img-responsive" alt="..." width="100%" height="600" style="margin: 0 auto;">
    </div>
    <div class="carousel-item">
      <img src="img/2.jpg" class="d-block img-responsive" alt="..." width="100%" height="600" style="margin: 0 auto;">
    </div>
    <div class="carousel-item">
      <img src="img/3.jpg" class="d-block img-responsive" alt="..." width="100%" height="600" style="margin: 0 auto;">
    </div>
  </div>
  <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide="prev">
    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
    <span class="visually-hidden">Previous</span>
  </button>
  <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide="next">
    <span class="carousel-control-next-icon" aria-hidden="true"></span>
    <span class="visually-hidden">Next</span>
  </button>
</div>-->


<br>
<div class="container-fluid">



<div style="text-align: center;"><h2><br>Con G-MYS tienes la seguridad de tu vehículo en todo momento<br><br></h2></div>
    <br><br>

<div class="mb-2 col-md-12" style="max-width: relative;">
  <div class="row g-0">
    <div class="col-md-6" data-aos="fade-right">
      <center><img src="img/call.png" class="img-fluid rounded-start" alt="..." style="max-width: 300px; border-radius: 30%;"></center>
    </div>
    <div class="col-md-5" data-aos="fade-up">
      <div class="card-body text-center"><br>
        <h3 class="card-title">CENTRAL DE MONITOREO 24/7</h3><br>
        <h5 class="card-text">Contamos con personal experto que te brindará atención y estará disponible 24/7,  para brindarte ayuda cuando más lo necesites.</h5>
      </div>
    </div>
  </div>
</div>

<div class=" col-md-12 mb-2" data-aos="fade-up" style="max-width: relative;">
  <div class="row g-0">
    <div class="col-md-7 text-center" data-aos="fade-up">
        <h3 class="card-title" style="margin-top: 2rem;">UBICACION EN TIEMPO REAL</h3>
        <h5 class="card-text" style="margin: 3rem">Conozca en tiempo real la ubicación de su vehículo, velocidad, tiempo en <br>movimiento 
        o detenido y mucho más. </h5><br>
    </div>
    <div class="col-md-4"  data-aos="fade-right">
        <center><img src="img/gps.png" class="img-fluid rounded-start" alt="..." style="max-width: 300px; max-height: 215px;"></center>
   </div>
 </div>
</div>

<div class=" mb-2 col-md-12" style="max-width: relative;">
  <div class="row g-0">
    <div class="col-md-6" data-aos="fade-right"><br>
      <center><img src="img/map.png" class="img-fluid rounded-start" alt="..." style="max-width: 340px;"></center>
    </div>
    <div class="col-md-5">
      <div class="card-body text-center" data-aos="fade-up"><br>
        <h3 class="card-title">GEOCERCAS</h3><br>
        <h5 class="card-text">Controle dónde puede ir su vehículo y reciba alertas si se sale de la zona/ruta.</h5><br><br>
      </div>
    </div>
  </div>
</div>

<div class=" col-md-12 mb-2" style="max-width: relative;">
  <div class="row g-0">
    <div class="col-md-7 text-center" data-aos="fade-up"><br><br>
        <h3 class="card-title">MEJORA CONTINUA</h3><br>
        <h5 class="card-text">Siempre buscamos innovar para que nuestros servicios sean de <br> la mejor calidad.</h5>
    </div>
    <div class="col-md-5" data-aos="fade-right">
        <center><img src="img/flecha.png" class="img-fluid rounded-start" alt="..."  style="max-width: 300px; max-height: 215px;"></center>
   </div>
 </div>
</div>

<div class=" mb-2 col-md-12" style="max-width: relative;">
  <div class="row g-0">
    <div class="col-md-6" data-aos="fade-right"><br>
      <center><img src="img/soporte.jpg" class=" img-responsive" alt="..." style="max-width: 500px !important; margin-top: 4rem;"></center>
    </div>
    <div class="col-md-5">
      <div class="card-body" data-aos="fade-up" style="text-align: justify;"><br>
        <h3 class="card-title text-center">SOPORTE TECNICO</h3><br>
        <h5 class="card-text">
          Nuestro soporte técnico tiene dos enfoques especiales para su satisfacción y control de su vehículo:<br><br>

          Soporte en software: Un servicio que está disponible las 24 horas de los 7 días a la semana, comunicándose con nuestros monitores AVL, podrá solucionar cualquier problema o falla en el sistema que haya identificado.<br><br>

          Nuestro equipo de trabajo esta altamente calificado para desarrollar peticiones especiales en su usuario y plataforma, con el fin de que su satisfacción con nuestros servicios sea plena y confortable.<br><br>
        </h5>
      </div>
    </div>
  </div>
</div>

<div class="   col-md-12 mb-2" style="max-width: relative;" data-aos="fade-up">
  <div class="row g-0">
    <div class="col-md-7 text-center" style="margin-top: 8rem;" >
        <h3 class="card-title">Aplicación móvil</h3><br>
        <h5 class="card-text">
          Descarga nuestra App G-MYS para tener toda la informacion de tu vehículo a <br> 
          la mano y asi poder gestionar toda operacion desde tu dispositivo movil</h5><br><br>
        <a href="https://play.google.com/store/apps/details?id=com.gmys.appgmys"><img src="img/google.png" style="max-width: 150px; max-height: 200px;"></a>
    </div>
    <div class="col-md-5"><br>
        <center><img src="img/celular.png" class="img-fluid rounded-start img-responsive" alt="..." style="max-width: 100%; max-height: 400px;" ></center><br>
   </div>
 </div>
</div>


<!-- FOOTER -->
<footer>
  <div class="col-md-12" style="margin-top: 2rem;">
  <div class="row g-0">
   
    <div class="col-md-3">
      <div class="card-body text-center"><br>
      <ul class="nav-item "><i class="fas fa-envelope zoom" style="color: red; font-size: 25px;"></i><br><br>pqrs@gmys.com.co</ul>
      </div>
    </div>
    <div class="col-md-3">
      <div class="card-body text-center"><br>
        <ul class="nav-item "><i class="fas fa-phone-alt zoom" style="color: limegreen; font-size: 25px;"></i><br><br>3148111847</ul>
      </div>
    </div>
    <div class="col-md-3">
      <div class="card-body text-center"><br>
        <ul class="nav-item "><i class="fas fa-tools zoom" style="color: grey; font-size: 25px;"></i><br><br>310 464 5764 - 3102607446</ul>
      </div>
    </div>
    <div class="col-md-3">
      <div class="card-body text-center"><br>
        <ul class="nav-item "><i class="fas fa-map-marked-alt zoom" style="color: orangered; font-size: 25px;"></i><br><br>Pereira - Risaralda - Colombia</a></ul>
      </div>
    </div>
    </div>
    </div>
    <div>
    <div class="col-md-12">
      <center>
        <div class="card-body text-center"><br>
          <a href="https://instagram.com/gmyscolombia?igshid=YmMyMA2M2Y="><i class="fab fa-instagram icon" style="margin-right: 20px; color: red;"></i></a>
        
        <i class="fab fa-facebook icon" style="margin-right: 20px; color: royalblue;"></i>
        <i class="fab fa-twitter icon" style="color: skyblue;"></i>
      </div>
      </center>
      </div>
    <div class="col-md-12" style="margin-top:2rem;">
    <p class="text-center text-muted">© 2022 GMYS.<br>   Todos los derechos reservados, Aplican condiciones y restricciones.</p>
    </div>
    <
</footer>       

      <script>
      AOS.init({
        duration: 1000,
      });

      window.scrollTo({
        top: 0,
        behavior: 'smooth'
      });


      </script>



      

      </body>
</html>
