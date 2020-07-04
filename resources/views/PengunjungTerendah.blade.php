<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css" integrity="sha384-9aIt2nRpC12Uk9gS9baDl411NQApFmC26EwAOH8WgZl5MYYxFfc+NcPb1dKGj7Sk" crossorigin="anonymous">

    <title>Data Pendapatan</title>
    <link href="https://fonts.googleapis.com/css2?family=IBM+Plex+Sans&display=swap" rel="stylesheet">
    
    <!-- style -->
    <style> 
    html, body{
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

    .fitur {
        margin-top: 80px;
    }

    .tombol{
        margin-bottom: 10px;
    }
    </style>

  </head>
  <body>
  <nav class="navbar fixed-top navbar-expand-lg navbar-dark bg-info">
      <div class="container">
        <a class="navbar-brand" href="/home">XploreJogja</a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
          <div class="navbar-nav">
            <a class="nav-item nav-link" href="/home">Home <span class="sr-only">(current)</span></a>
            <a class="nav-item nav-link" href="/pendapatan">Pendapatan</a>
            <a class="nav-item nav-link" href="/pengeluaran">Pengeluaran</a>
            <a class="nav-item nav-link active" href="/pengunjung">Pengunjung</a>
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
      </nav> 


      <div class="container">
        <h4 class="fitur text-center">Terendah pengunjung perbulan</h4>
        <a href="/pengunjung/export_excel" class="btn btn-success my-3" target="_blank">EXPORT EXCEL</a>
        <div class="chart" id="chartNilai"></div>
      </div>
  
    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js" integrity="sha384-OgVRvuATP1z7JjHLkuOU7Xw704+h835Lr+6QL9UvYjZE3Ipu6Tp75j7Bh/kR0JKI" crossorigin="anonymous"></script>
    <script src="https://code.highcharts.com/highcharts.js"></script>
    <script>
      Highcharts.chart('chartNilai', {
    chart: {
        type: 'line'
    },
    title: {
        text: ''
    },
    subtitle: {
        text: ''
    },
    xAxis: {
        categories: [
            'Jan',
            'Feb',
            'Mar',
            'Apr',
            'May',
            'Jun',
            'Jul',
            'Aug',
            'Sep',
            'Oct',
            'Nov',
            'Dec'
        ],
        crosshair: true
    },
    yAxis: {
        min: 0,
        title: {
            text: 'Terendah'
        }
    },
    tooltip: {
        headerFormat: '<span style="font-size:10px">{point.key}</span><table>',
        pointFormat: '<tr><td style="color:{series.color};padding:0">{series.name}: </td>' +
            '<td style="padding:0"><b>{point.y:.1f} orang</b></td></tr>',
        footerFormat: '</table>',
        shared: true,
        useHTML: true
    },
    plotOptions: {
        column: {
            pointPadding: 0.2,
            borderWidth: 0
        }
    },
    series: [{
        name: 'Pengunjung',
        data: [
          {{$terendahJanuary}}, 
          {{$terendahFebruary}}, 
          {{$terendahMarch}}, 
          {{$terendahApril}}, 
          {{$terendahMay}}, 
          {{$terendahJune}}, 
          {{$terendahJuly}}, 
          {{$terendahAugust}}, 
          {{$terendahSeptember}}, 
          {{$terendahOctober}}, 
          {{$terendahNovember}}, 
          {{$terendahDecember}}]
    }]
    
    
});
    </script>
    <br>
    <br>
  <div class="card text-center offset-1 col-10">
    <div class="card-header">
      <ul class="nav nav-tabs card-header-tabs">
        <li class="nav-item">
          <a class="nav-link" href="/pengunjung">Total</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="/pengunjung/rata2">Rata-Rata</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="/pengunjung/tertinggi">Tertinggi</a>
        </li>
        <li class="nav-item">
          <a class="nav-link active" href="/pengunjung/terendah">Terendah</a>
        </li>
      </ul>
    </div>
    <div class="card-body">
      <div class="form-group row">
        <div class="col-3 text-left">
          <p>Terendah Tahun ini : </p>
          <hr>
          <p>Terendah Bulan Januari : </p>
          <p>Terendah Bulan Februari: </p>
          <p>Terendah Bulan Maret: </p>
          <p>Terendah Bulan April: </p>
          <p>Terendah Bulan Mei: </p>
          <p>Terendah Bulan Juni: </p>
          <p>Terendah Bulan Juli: </p>
          <p>Terendah Bulan Agustus: </p>
          <p>Terendah Bulan September: </p>
          <p>Terendah Bulan Oktober: </p>
          <p>Terendah Bulan November: </p>
          <p>Terendah Bulan Desember: </p>
        </div>
        <div class="col-3 text-left">
          <p> {{$terendahTahun}} Orang</p>
          <hr>
          <p> {{$terendahJanuary}} Orang</p>
          <p> {{$terendahFebruary}} Orang</p>
          <p> {{$terendahMarch}} Orang</p>
          <p> {{$terendahApril}} Orang</p>
          <p> {{$terendahMay}} Orang</p>
          <p> {{$terendahJune}} Orang</p>
          <p> {{$terendahJuly}} Orang</p>
          <p> {{$terendahAugust}} Orang</p>
          <p> {{$terendahSeptember}} Orang</p>
          <p> {{$terendahOctober}} Orang</p>
          <p> {{$terendahNovember}} Orang</p>
          <p> {{$terendahDecember}} Orang</p>
        </div>
      </div>
    </div>
</div>
<br/>
<br/>
  </body>
</html>