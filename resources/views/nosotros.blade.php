<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  

  <script src="{{ asset('js/app.js') }}" defer></script>
  <script src="https://kit.fontawesome.com/2c36e9b7b1.js"></script>
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
            <a href="{{ route('nosotros2') }}"><button class="btn btn-sm btn-outline-info zoom" type="button">NOSOTROS</button></a>
        </li>
        <li class="nav-item" style="margin-right: 20px;">
            <a href="{{(('/'))}}"><button class="btn btn-sm btn-outline-info zoom" type="button">INICIO</button></a>
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
              
              <a class="nav-link active" href="{{ route('nosotros2') }}">NOSOTROS</a>

              <a class="nav-link active"  href="{{(('/'))}}">INICIO</a>

          </li>
        </ul>
      </div>
    </div>
  </div>
</nav>


@yield('content')

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
    <
</footer>       

</body>
</html>

