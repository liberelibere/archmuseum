<!-- šis html būs kā templeits visām lapām, 
šeit liek to, kas atkārtojas visās lapās (footeris, scripti utt) -->


{{-- @yield('content') --}}

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('title')</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
    <link rel="stylesheet" href="/css/archmuseum.css?v={{rand()}}">
    <link rel="stylesheet" href="/css/querries.css?v={{rand()}}">
</head>
<body>


    @yield('content')


    <footer>
      <div class="container-fluid">
          <div class="row">
            <div class="col-12 d-flex justify-content-center align-items-center">
              <ul class="social-links">
                   <li><a href="https://www.facebook.com/arhitekturasmuzejs/" class="facebook"><ion-icon name="logo-facebook"></ion-icon></a></li>
                   <li><a href="#" class="twitter"><ion-icon name="logo-twitter"></ion-icon></a></li>
                   <li><a href="#" class="insta"><ion-icon name="logo-instagram"></ion-icon></a></li>
              </ul>
          </div>
              <div class="col-12 d-flex justify-content-center align-items-center">
                  <ul class="footer-nav">
                       <li><a href="/izstades">IZSTĀDES</a></li>
                       <li class="bull">&bull;</li>
                       <li><a href="/muzejs">PAR MUMS</a></li>
                       <li class="bull">&bull;</li>
                       <li><a href="/contact">APMEKLĒ MUZEJU</a></li>
                  </ul>
              </div>
              <div class="col-12 mt-1">
                <p>
                    Anna Libere &copy; 2020 Latvijas Arhitektūras muzejs
                </p>
            </div>
              
           
          </div>
          
      </div>
  </footer>
  
  <script src="/JS/archmuseum.js"></script>  
  <!-- <script src="JS/waypoints.js"></script>  -->
  <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
  <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
  <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>  
  <script type="module" src="https://unpkg.com/ionicons@5.0.0/dist/ionicons/ionicons.esm.js"></script>
  <script nomodule="" src="https://unpkg.com/ionicons@5.0.0/dist/ionicons/ionicons.js"></script>
</body>
</html>

