@extends('master')

@section('content')

<div class="row">
	<div class="col-md-12">
		<form action="/matkul/create" method="POST">

			@csrf

			<div class="card" style="border-top: 3px solid #096eb5">
				<div class="card-header">
					<h3 class="card-title">Tambah Mata Kuliah</h3>
				</div>

				<div class="card-body">

					@if($errors->any())
					<div class="alert alert-danger">
						{{implode('', $errors->all(':message'))}}
					</div>
					@endif

                    <div class="form-group">
                        <label for="">Kode Mata Kuliah</label>
                        <input type="text" name="kode_matakuliah" placeholder="" class="form-control" required autofocus>
                    </div>

                    <div class="form-group">
                        <label for="">Nama Mata Kuliah</label>
                        <input type="text" name="nama_matakuliah" placeholder="" class="form-control" required autofocus>
                    </div>

                    <div class="form-group">
                        <label for="">SKS</label>
                        <input type="text" name="sks" placeholder="" class="form-control" required autofocus>
                    </div>

                    <div class="form-group">
                        <label for="">Semester</label>
                        <input type="text" name="semester" placeholder="" class="form-control" required autofocus>
                    </div>
              
				</div>

				<div class="card-footer">

					<a href="/matkul" class="btn btn-default">Back</a>
                    &nbsp;&nbsp;
					<input type="submit" value="Save" class="pull-right btn btn-primary">

				</div>

			</div>

		</form>

	</div>
</div>



@endsection