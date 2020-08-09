@extends('master')

@section('content')

<div class="row">
    <div class="col-md-12">
        <form action="/matkul/update/{{$matkul->kode_matakuliah}}" method="POST">

            @csrf
           
            <div class="card">
                <div class="card-header">
                    <h3 class="card-title">Edit Mata Kuliah</h3>
                </div>

                <div class="card-body">

                    @if($errors->any())
                    <div class="alert alert-danger">
                        {{implode('', $errors->all(':message'))}}
                    </div>
                    @endif

                    <div class="form-group">
                        <label>Kode Mata Kuliah</label>
                        <input type="text" name="kode_matakuliah" value="{{$matkul->kode_matakuliah}}" class="form-control" required autofocus>
                    </div>

                    <div class="form-group">
                        <label for="">Nama Mata Kuliah</label>
                        <input type="text" name="nama_matakuliah" value="{{$matkul->nama_matakuliah}}" class="form-control" required autofocus>
                    </div>

                    <div class="form-group">
                        <label for="">SKS</label>
                        <input type="text" name="sks" value="{{$matkul->sks}}" class="form-control" required autofocus>
                    </div>

                    <div class="form-group">
                        <label for="">semester</label>
                        <input type="text" name="semester" value="{{$matkul->semester}}" class="form-control" required autofocus>
                    </div>

                </div>

                <div class="card-footer">

                    <a href="/matkul" class="btn btn-default">Back</a>
                    <input type="submit" value="Save" class="pull-right btn btn-warning">

                </div>

            </div>

        </form>

    </div>
</div>



@endsection('content')