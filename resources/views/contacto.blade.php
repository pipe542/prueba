<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>G-mys | Contacto</title>
	<script src="{{ asset('js/app.js') }}" defer></script>
  <script src="https://kit.fontawesome.com/2c36e9b7b1.js"></script>
  <script src="https://unpkg.com/axios/dist/axios.min.js"></script>
  <link href="{{ asset('css/app.css') }}" rel="stylesheet">

   <style type="text/css">
     #con{
      display: block;
     }
     #correo{
      display: none;
     }
     #wpp{
      display: none;
    }
     #cont{
      display: none;
     }
     #w1{
      display: none;
     }
     #w2{
      display: none;
     }
     #w3{
      display: none;
     }
     #w4{
      display: none;
     }

    .btn{
    width: 130px;
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
<body>

<nav class="navbar navbar-light bg-white container-fluid" style="padding: 2rem; position:fixed; top:0;z-index: 2; overflow: visible; top: 0px;">

  <div class="container-fluid col-md-12">

    <a  href="{{('/')}}"><img src="img/logo.png" style="max-width: 150px;"></a>

    <div class="d-none d-sm-none d-md-block col-md-7">
          <ul class="nav">
            <li class="nav-item" style="margin-right: 20px;">
                <a href="{{(('/contacto'))}}"><button class="btn btn-sm btn-outline-info " type="button" >CONTACTO</button></a>
            </li>
            <li class="nav-item" style="margin-right: 20px;">
                <a href="{{(('/'))}}" ><button class="btn btn-sm btn-outline-info " type="button">INICIO</button></a>
            </li>
          </ul>
    </div>

    <button class="navbar-toggler d-block d-sm-block d-md-none" type="button" data-bs-toggle="offcanvas" data-bs-target="#offcanvasNavbar" aria-controls="offcanvasNavbar">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="offcanvas offcanvas-end" tabindex="-1" id="offcanvasNavbar" aria-labelledby="offcanvasNavbarLabel">

      <div class="offcanvas-header">

        <h5 class="offcanvas-title" id="offcanvasNavbarLabel">GMYS</h5>
        <button type="button" class="btn-close text-reset " data-bs-dismiss="offcanvas" aria-label="Close"></button>
      </div>
      <div class="offcanvas-body">
        <ul class="navbar-nav justify-content-end flex-grow-1 pe-3">
          <li class="nav-item text-center">
              
           <a class="nav-link" href="{{(('/'))}}">INICIO</a>

          </li>
        </ul>
      </div>
    </div>
  </div>
</nav>

<div class="container"  style="padding-top: 10rem;">
<div class="mb-4">
  <div class="row g-0">
    <div class="col-md-6">
      <iframe src="https://www.google.com/maps/d/embed?mid=1CM9ltH2L_d3eWL-0p-Ek_ZJE52w&ehbc=2E312F" width="100%; relative;" height="500px"></iframe>
    </div>
    <div class="col-md-6">
      <div class="card-body">

  <center>
  <a href="#"><button class="btn btn-sm btn-outline-info " type="button" style="margin-right: 20px;" onclick="ocultar();">Correo</button></a>

  <a href="#"><button class="btn btn-sm btn-outline-info" type="button" style="margin-right: 20px;" onclick="mostrarwpp();">WhatsApp</button></a>
  </center>

<div class="container-fluid" id="correo">
  <form action="https://formsubmit.co/pipegomes44@gmail.com" method="POST" id="form" class="form">
      <div class="mb-6">
        <label class="form-label">Nombre</label>
        <input name="Nombre"  class="form-control">
      </div><br>
      <div class="mb-3">
        <label class="form-label">Correo electronico</label>
        <input name="Correo" class="form-control" >
      </div>
      <div class="mb-3">
        <label class="form-label">Asunto del correo</label>
        <input name="Asunto" class="form-control" >
      </div>
      <div >
        <div class="row">
        <center><textarea class="mb-3 col-md-12" cols="30" rows="5" name="Mensaje" placeholder="MENSAJE:"></textarea></center>
        </div>
      </div> 
      <center><button class="btn btn-sm btn-outline-info" type="submit">ENVIAR</button></center>
    </form>
</div>

 

<div class="container" id="wpp" style="margin-top:2rem;">
  

    <form>
      <select class="form-select" aria-label="Default select example" style="margin-top: 2rem;">
        <option selected onclick="ocultarmed();">Por favor elije el area al cual se quiere comunicar:</option>
        <option value="1" onclick="mostrarmed1();">Ventas</option>
        <option value="2" onclick="mostrarmed2();">Cartera</option>
        <option value="3" onclick="mostrarmed3();">Soporte dia</option>
        <option value="4" onclick="mostrarmed4();">Soporte nocturno y fin de semana</option>
      </select>
    </form>
  <div class="container-fluid" id="w1" style="margin-top: 5rem;">
    <center>
    <h5>Para comunicarte con un asesor, oprime la imagen</h5>
    <a href="https://api.whatsapp.com/send?phone=573148111847&text=Hola%2C%20deseo%20adquirir%20mas%20informacion%20sobre%20sus%20productos"><img src="img/wpp.png" width="200" height="50"></a>
  </center>
  </div>

  <div class="container-fluid" id="w2" style="margin-top: 5rem;">
    <center>
    <h5>Para comunicarte con un asesor, oprime la imagen</h5>
    <a href="https://api.whatsapp.com/send?phone=573104645764&text=Hola%2C%20me%20podrias%20ayudar%20"><img src="img/wpp.png" width="200" height="50"></a>
  </center>
  </div>

  <div class="container-fluid" id="w3" style="margin-top: 5rem;">
    <center>
    <h5>Para comunicarte con un asesor, oprime la imagen</h5>
    <a href="https://api.whatsapp.com/send?phone=573104645764&text=Hola%2C%20solicito%20soporte%20con%20"><img src="img/wpp.png" width="200" height="50"></a>
  </center>
  </div>

  <div class="container-fluid" id="w4" style="margin-top: 5rem;">
    <center>
    <h5>Para comunicarte con un asesor, oprime la imagen</h5>
    <a href="https://api.whatsapp.com/send?phone=573104645764&text=Hola%2C%20solicito%20ayuda%20con%20"><img src="img/wpp.png" width="200" height="50"></a>
  </center>
  </div>
</div>

<div id="con" class="container">
  <center><img src="img/contacto.png" style="max-width: 100%; border-radius: 100% ; padding: 3rem;" class="img-responsive"></center>
</div>
</div>
</div>
</div>
</div></div>



 <script>
   function ocultar(){
    document.getElementById('con').style.display = 'none';
    document.getElementById('correo').style.display = 'block';
    document.getElementById('wpp').style.display = 'none';

   }
   function mostrarwpp(){
    document.getElementById('con').style.display = 'none';
    document.getElementById('correo').style.display = 'none';
    document.getElementById('wpp').style.display = 'block';
   }

   function mostrarmed1(){
    document.getElementById('w1').style.display = 'block';
    document.getElementById('w2').style.display = 'none';
    document.getElementById('w3').style.display = 'none';
    document.getElementById('w4').style.display = 'none';
   }

   function mostrarmed2(){
    document.getElementById('w2').style.display = 'block';
    document.getElementById('w1').style.display = 'none';
    document.getElementById('w3').style.display = 'none';
    document.getElementById('w4').style.display = 'none';

   }
    
   function mostrarmed3(){
    document.getElementById('w3').style.display = 'block';
    document.getElementById('w1').style.display = 'none';
    document.getElementById('w2').style.display = 'none';
    document.getElementById('w4').style.display = 'none';

   }
   
   function mostrarmed4(){
    document.getElementById('w4').style.display = 'block';
    document.getElementById('w1').style.display = 'none';
    document.getElementById('w2').style.display = 'none';
    document.getElementById('w3').style.display = 'none';

   }

   function ocultarmed(){
    document.getElementById('w1').style.display = 'none';
    document.getElementById('w2').style.display = 'none';
    document.getElementById('w3').style.display = 'none';
    document.getElementById('w4').style.display = 'none';

   }
 </script>



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
        <ul class="nav-item "><i class="fas fa-map-marked-alt zoom" style="color: orangered; font-size: 25px;"></i><br><br>Pereira-Risaralda-Colombia</a></ul>
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
</footer>       

     
 

<!--
               <div class="home__social">
                    <a href="" class="home__social-icon"><i class='bx bxl-twitter'></i></a>
                    <a href="" class="home__social-icon"><i class='bx bxl-github'></i></a>
                    <a href="" class="home__social-icon"><i class='bx bxl-linkedin'></i></a>
                </div>
              -->

</body>
</html>
