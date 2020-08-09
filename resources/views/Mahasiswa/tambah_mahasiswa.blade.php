@extends('master')

@section('content')

<div class="row">
	<div class="col-md-12">
		<form action="/mahasiswa/create" method="POST">

			@csrf

			<div class="card" style="border-top: 3px solid #096eb5">
				<div class="card-header">
					<h3 class="card-title">Tambah Mahasiswa</h3>
				</div>

				<div class="card-body">

					@if($errors->any())
					<div class="alert alert-danger">
						{{implode('', $errors->all(':message'))}}
					</div>
					@endif

                    <div class="form-group">
                        <label for="">NIM</label>
                        <input type="text" name="nim" placeholder="" class="form-control" required autofocus>
                    </div>

                    <div class="form-group">
                        <label for="">Nama Lengkap</label>
                        <input type="text" name="nama_lengkap" placeholder="" class="form-control" required autofocus>
                    </div>

                    <div class="form-group">
                        <label for="">Prodi</label>
                        <input type="text" name="prodi" placeholder="" class="form-control" required autofocus>
                    </div>

                    <div class="form-group">
                        <label for="">Alamat</label>
                        <textarea class="form-control" name="alamat" id="" cols="30" rows="5"></textarea>
                    </div>
              
				</div>

				<div class="card-footer">

					<a href="/mahasiswa" class="btn btn-default">Back</a>
                    &nbsp;&nbsp;
					<input type="submit" value="Save" class="pull-right btn btn-primary">

				</div>

			</div>

		</form>

	</div>
</div>



@endsection