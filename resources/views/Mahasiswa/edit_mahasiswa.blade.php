@extends('master')

@section('content')

<div class="row">
    <div class="col-md-12">
        <form action="/mahasiswa/update/{{$mahasiswa->nim}}" method="POST">

            @csrf
           
            <div class="card">
                <div class="card-header">
                    <h3 class="card-title">Edit Mahasiswa</h3>
                </div>

                <div class="card-body">

                    @if($errors->any())
                    <div class="alert alert-danger">
                        {{implode('', $errors->all(':message'))}}
                    </div>
                    @endif

                    <div class="form-group">
                        <label>NIM</label>
                        <input type="text" name="nim" value="{{$mahasiswa->nim}}" class="form-control" required autofocus>
                    </div>

                    <div class="form-group">
                        <label for="">Nama Lengkap</label>
                        <input type="text" name="nama_lengkap" value="{{$mahasiswa->nama_lengkap}}" class="form-control" required autofocus>
                    </div>

                    <div class="form-group">
                        <label for="">Prodi</label>
                        <input type="text" name="prodi" value="{{$mahasiswa->prodi}}" class="form-control" required autofocus>
                    </div>

                    <div class="form-group">
                        <label for="">Alamat</label>
                        <textarea name="alamat" class="form-control" id="" cols="30" rows="5">{{$mahasiswa->alamat}}</textarea>
                    </div>

                </div>

                <div class="card-footer">

                    <a href="/mahasiswa" class="btn btn-default">Back</a>
                    <input type="submit" value="Save" class="pull-right btn btn-warning">

                </div>

            </div>

        </form>

    </div>
</div>



@endsection('content')