
<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css" integrity="sha384-9aIt2nRpC12Uk9gS9baDl411NQApFmC26EwAOH8WgZl5MYYxFfc+NcPb1dKGj7Sk" crossorigin="anonymous">

    <title>home</title>

    <link href="https://fonts.googleapis.com/css2?family=IBM+Plex+Sans&display=swap" rel="stylesheet">

    <!--styles-->
    <style>
    html, body {
                font-family:'IBM Plex Sans', sans-serif;
                background-color: #a6dcef;
            }
    .nav-link:hover::after {
              content:'' ;
              display: block;
              border-bottom: 3px solid #a6dcef;
              width: 50%;
              margin: auto;
              padding-bottom: 4px;
              margin-bottom: -7px;
          }
    .jumbotron {
    background-image: url(img/tangan.jpg);
    background-size: cover;
    text-align: center;
    position: relative;
    margin-top: -75px;
    height: 640px;
    }

    .jumbotron .container {
    position: relative;
    z-index: 1;
    }

    .jumbotron .display-4 {
    color: rgb(146, 226, 219);
    margin-top: 150px;
    font-weight: bold;
    text-shadow: 1px 1px 1px rgba(0, 0, 0, 0.7);
    font-size: 64px;
    margin-bottom: 30px;
    }

    .info-panel{
    box-shadow: 0 3px 20px rgba(0, 0, 0, 0.5);
    border-radius: 12px;
    margin-top: -100px;
    background-color: white;
    padding: 30px;
    }

    .info-panel img{
        width: 80px;
        height: 80px;
        margin-right: 20px;
        margin-bottom: 20px;
    }


    .info-panel h4 {
        font-size: 16px;
        text-transform: uppercase;
        font-weight: bold;
        margin-top: 5px;
    }


    .info-panel p {
        font-size: 14px;
        color: #ACACAC;
        margin-top: -5px;
        font-weight: 200;
    }
    </style>


  </head>
  <body>
      <nav class="navbar fixed-top navbar-expand-lg navbar-dark bg-info">
      <div class="container">
        <a class="navbar-brand" href="#">XploreJogja</a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
          <div class="navbar-nav">
            <a class="nav-item nav-link active" href="/home">Home <span class="sr-only">(current)</span></a>
            <a class="nav-item nav-link" href="/pendapatan">Pendapatan</a>
            <a class="nav-item nav-link" href="/pengeluaran">Pengeluaran</a>
            <a class="nav-item nav-link" href="/pengunjung">Pengunjung</a>
          </div>
        </div>
         <!-- Right Side Of Navbar -->
         <ul class="navbar-nav ml-auto">
                        <!-- Authentication Links -->
                        @guest
                            <li class="nav-item">
                                <a class="nav-link" href="{{ route('login') }}">{{ __('Login') }}</a>
                            </li>
                            @if (Route::has('register'))
                                <li class="nav-item">
                                    <a class="nav-link" href="{{ route('register') }}">{{ __('Register') }}</a>
                                </li>
                            @endif
                        @else
                            <li class="nav-item dropdown">
                                <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                                    {{ Auth::user()->name }} <span class="caret"></span>
                                </a>

                                <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">
                                    <a class="dropdown-item" href="{{ route('logout') }}"
                                       onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                                        {{ __('Logout') }}
                                    </a>

                                    <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                        @csrf
                                    </form>
                                </div>
                            </li>
                        @endguest
                    </ul>
                </div>
      </div>
      </div>
      </nav> 



<div class="jumbotron jumbotron-fluid">
  <div class="container text-center">
    <h1 class="display-4">XploreJogja</h1>
  </div>
</div>


<div class="container">
    <!-- info panel -->
    <div class="row justify-content-center">
      <div class="col-12 info-panel">
        <div class="row">
          <div class="col-lg">
                <img src="img/pendapatan.jpg" alt="pendapatan" class="float-left">
                <h4>PENDAPATAN</h4>
                <p>Menampilkan data banyaknya pendapatan tempat wisata </p>
                <a href="{{ route('grafik') }}" class="btn btn-primary">Go</a>
          </div>

          <div class="col-lg">
                <img src="img/pengeluaran.jpg" alt="pengeluaran" class="float-left">
                <h4>PENGELUARAN</h4>
                <p>Menampilkan data banyaknya pengeluaran tempat wisata</p>
          </div>

          <div class="col-lg">
                <img src="img/pengunjung.jpg" alt="pengunjung" class="float-left">
                <h4>PENGUNJUNG</h4>
                <p>Menampilkan data kategori umur pengunjung tempat wisata </p>
          </div>

        </div>
      </div>
    </div>
<!-- end infopanel -->

</div>

</div>














    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js" integrity="sha384-OgVRvuATP1z7JjHLkuOU7Xw704+h835Lr+6QL9UvYjZE3Ipu6Tp75j7Bh/kR0JKI" crossorigin="anonymous"></script>
  </body>
</html>