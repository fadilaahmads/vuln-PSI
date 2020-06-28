<!DOCTYPE html>
<html>
<head>
	<title>Pengeluaran</title>
</head>
<body>
 
<h1>Data Pengeluaran</h1>

 


<table>
        <tr>
            <th>Nama Pengeluaran</th><th>Waktu</th><th>Nominal</th>
        </tr>
    @foreach($pengeluaran as $p)
        <tr>
            <td>{{ $p->namaPengeluaran}}</td><td>{{ $p->waktu}}</td><td>{{ $p->nominal}}</td>
        </tr>
    @endforeach

    </table>
	
 
</body>
</html>