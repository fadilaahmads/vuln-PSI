<!DOCTYPE html>
<html>
<head>
	<title>Tutorial Laravel #20 : Eloquent Laravel</title>
</head>
<body>
 
<h1>Data Pegawai</h1>
<h3>www.malasngoding.com</h3>
 


<table>
        <tr>
            <th>Nama Pengeluaran</th><th>Waktu</th><th>Nominal</th>
        </tr>
    @foreach($pengeluaran as $p)
        <tr>
            <td>$p->namaPengeluaran</td><td>$p->waktu</td><td>nominal</td>
        </tr>
    @endforeach

    </table>
	
 
</body>
</html>