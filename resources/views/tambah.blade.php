<!DOCTYPE html>
<html>

<head>
	<title>Tambah Data Warga</title>
	<link href="https://stackpath.bootstrapcdn.com/bootstrap/4.2.1/css/bootstrap.min.css" rel="stylesheet">
	<link href="https://cdn.datatables.net/1.10.20/css/dataTables.bootstrap4.min.css" rel="stylesheet">
	<link rel="stylesheet" type="text/css" href="{{ asset('/css/style.css') }}">
</head>

<body>

	<div class="container">
        <div class="card mt-5">
            <div class="card-header text-center">
                Tambah Data Warga
            </div>
            <div class="card-body">
                <a href="/" class="btn btn-primary">Kembali</a>
                <br/>
                <br>
                <form action="/add" method="POST">
					{{ csrf_field() }}

					<table style="width: 500px">
						<tr>
							<td>No. KTP</td>
							<td>:</td>
							<td><input type="number" name="ktp" required="required" pattern="/^-?\d+\.?\d*$/" onKeyPress="if(this.value.length==4) return false;" placeholder="1111"></td>
						</tr>
						<tr>
							<td>Nama</td>
							<td>:</td>
							<td><input type="text" name="nama" required="required" placeholder="Budi Susilo"></td>
						</tr>
						<tr>
							<td>Jenis Kelamin</td>
							<td>:</td>
							<td>
								<select name="jenis_kelamin" >
									<option>Laki-Laki</option>
									<option>Perempuan</option>
								</select>
							</td>
						</tr>
						<tr>
							<td>No. Telepon</td>
							<td>:</td>
							<td><input type="number" name="telepon" required="required" pattern="/^-?\d+\.?\d*$/" onKeyPress="if(this.value.length==13) return false;" placeholder="08xxxxxxxxxx"></td>
						</tr>
						<tr>
							<td>Alamat</td>
							<td>:</td>
							<td><textarea type="text" name="alamat" required="" style="width: 300px; height: 80px; resize: none;">Perumahan Griya Kencana Blok </textarea></td>
						</tr>
						<tr>
							<td></td>
							<td></td>
							<td><input type="submit" value="Simpan Data" class="sbm"></td>
						</tr>
					</table>
										
				</form>
            </div>
        </div>
 
</body>
</html>