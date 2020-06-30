<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css" integrity="sha384-9aIt2nRpC12Uk9gS9baDl411NQApFmC26EwAOH8WgZl5MYYxFfc+NcPb1dKGj7Sk" crossorigin="anonymous">

    <title>Data Pengunjung</title>
    <link href="https://fonts.googleapis.com/css2?family=IBM+Plex+Sans&display=swap" rel="stylesheet">
    
    <!-- style -->
    <style> 
    html, body{
        font-family:'IBM Plex Sans', sans-serif;
        background-color: #a6dcef;
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
        <a class="navbar-brand" href="#">XploreJogja</a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
          <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
            <div class="navbar-nav">
            <a class="nav-item nav-link" href="#">Home </a>
            <a class="nav-item nav-link" href="#">Pendapatan</a>
            <a class="nav-item nav-link" href="#">Pengeluaran</a>
            <a class="nav-item nav-link active" href="#">Pengunjung <span class="sr-only">(current)</span></a>
            </div>
          </div>
        </div>
      </nav> 


      <div class="container">
        <h4 class="fitur text-center">Pengunjung</h4>
          <a href="" class="btn btn-primary tombol">Minggu</a>
          <a href="" class="btn btn-primary tombol">Bulan</a>
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
        type: 'column'
    },
    title: {
        text: 'Banyaknya Pengunjung perbulan'
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
            text: 'Banyaknya'
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
        name: 'Anak-anak',
        data: [49, 71, 98, 93, 106, 84, 105, 104, 91, 83, 106, 92]

    }, {
        name: 'Dewasa',
        data: [83, 75, 106, 129, 144, 176, 135, 148, 100, 194, 95, 54]

    }]
});
    </script>
  </body>
</html>