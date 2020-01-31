<!DOCTYPE html>
<html>

<head>
	<title>Data Warga</title>
	<link href="https://stackpath.bootstrapcdn.com/bootstrap/4.2.1/css/bootstrap.min.css" rel="stylesheet">
	<link href="https://cdn.datatables.net/1.10.20/css/dataTables.bootstrap4.min.css" rel="stylesheet">
	<link rel="stylesheet" type="text/css" href="{{ asset('/css/style.css') }}">
</head>

<body>
	<div class="container">

        <div class="card mt-5">
            <div class="card-header text-center">
                Data Warga Jalan Surabaya
            </div>
            <div class="card-body">
                <a href="/tambah" class="btn btn-primary">Tambah Data Warga</a>
                <br/>
                <br/>
                <table id="datatable" class="table table-bordered table-hover table-striped tblind">
                    <thead>
                        <tr>
							<th hidden="">No. KTP</th>
							<th>Nama</th>
							<th hidden="">Jenis Kelamin</th>
							<th hidden="">Telepon</th>
							<th>Alamat</th>
							<th style="width: 200px">Aksi</th>
						</tr>
                    </thead>
                    <tbody>
                      	@foreach($warga as $p)
						<tr>
							<td hidden="">{{ $p->ktp }}</td>
							<td>{{ $p->nama }}</td>
							<td hidden="">{{ $p->jenis_kelamin }}</td>
							<td hidden="">{{ $p->telepon }}</td>
							<td>{{ $p->alamat }}</td>
							<td>
								<a href="#" class="btn btn-success detail">Detail</a>
								<a href="/edit/{{ $p->ktp }}" class="btn btn-warning">Edit</a>
								<a href="/hapus/{{ $p->ktp }}" class="btn btn-danger">Hapus</a>
							</td>
						</tr>
						@endforeach
                    </tbody>
                </table>
            </div>
        </div>

		<div class="modal fade" id="EditModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
			<div class="modal-dialog" role="document">
				<div class="modal-content">
					<div class="modal-header">
						<h5 class="modal-title" id="exampleModalLabel">Detail Warga</h5>
						<button type="button" class="close" data-dismiss="modal" aria-label="Close" style="color: white;">
						<span aria-hidden="true">&times;</span>
						</button>
					</div>

					{{ csrf_field() }}
					{{ method_field('PUT') }}

					<div class="modal-body">
							<div class="form-group">
								<label class="col-form-label">No. KTP :</label>
								<input type="number" class="form-control" id="ktp" name="ktp" readonly="">
							</div>
							<div class="form-group">
								<label class="col-form-label">Nama :</label>
								<input type="text" class="form-control" id="nama" name="nama" readonly="">
							</div>
							<div class="form-group">
								<label class="col-form-label">Jenis Kelamin :</label>
								<input type="text" class="form-control" id="jenis_kelamin" name="jenis_kelamin" readonly="">
							</div>
							<div class="form-group">
								<label class="col-form-label">No. Telepon :</label>
								<input type="number" class="form-control" id="telepon" name="telepon" readonly="">
							</div>
							<div class="form-group">
								<label class="col-form-label">Alamat :</label>
								<input type="text" class="form-control" id="alamat" name="alamat" readonly="">
							</div>
					</div>

				</div>
			</div>
		</div>

    </div>

<script src="https://code.jquery.com/jquery-3.3.1.slim.js"></script>

<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js"></script>

<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js"></script>

<script src="https://cdn.datatables.net/1.10.20/js/jquery.dataTables.min.js"></script>

<script src="https://cdn.datatables.net/1.10.20/js/dataTables.bootstrap4.min.js"></script>

<script type="text/javascript">
	
	$(document).ready(function () {

		var table = $('#datatable').DataTable();

		table.on('click', '.detail', function () {

			$tr = $(this).closest('tr');
			if ($($tr).hasClass('child')) {
				$tr = $tr.prev('.parent');
			}

			var data = table.row($tr).data();
			console.log(data);

			$('#ktp').val(data[0]);
			$('#nama').val(data[1]);
			$('#jenis_kelamin').val(data[2]);
			$('#telepon').val(data[3]);
			$('#alamat').val(data[4]);

			$('#EditModal').modal('show');

		})

	})

</script>

</body>
</html>