@extends('master')
 
@section('content')

{{-- Notifikasi form validasi --}}
    @if ($errors->has('file'))
        <span class="invalid-feedback" role="alert">
            <strong>{{$errors->first('file')}}</strong>
        </span>
    @endif

    {{-- notifikasi sukses --}}
	@if ($sukses = Session::get('sukses'))
		<div class="alert alert-success alert-block">
			<button type="button" class="close" data-dismiss="alert">×</button> 
			<i class="icon fas fa-check"></i> {{ $sukses }}
		</div>
    @endif
    
    <a href="/tambah_mahasiswa" class="btn btn-primary">
        <i class="fa fa-plus nav-icon"></i>
    </a>

<div class="card" style="border-top: 3px solid #096eb5">
        
       <div class="card-header">
            <h4>Mahasiswa</h4>
        </div>

    <div class="card-body">
        <table class="table table-striped table table-bordered" id="datatable">
            <thead style="background-color: #096eb5">
                <tr>
                    <th class="text-center">No</th>
                    <th class="text-center">NIM</th>
                    <th class="text-center">Nama Lengkap</th>
                    <th class="text-center">Prodi</th>
                    <th class="text-center">Alamat</th>
                    <th class="text-center" width="8%">Action</th>
                </tr>
            </thead>
            @php $i=1 @endphp
            <tbody>
                @php $i=1 @endphp
                 @foreach($mahasiswa ?? '' as $m)
                <tr>
                    <td>{{$i++}}</td>
                   <td>{{$m->nim}}</td>
                   <td>{{$m->nama_lengkap}}</td>
                   <td>{{$m->prodi}}</td>
                   <td>{{$m->alamat}}</td>
                    <td>
                         <div class="btn-group">

                            <a href="/mahasiswa/edit/{{$m->nim}}" class="btn btn-warning  btn-sm" data-toggle="tootip" data-placement="bottom" title="Edit">
                                <i class="fa fa-edit nav-icon"></i>
                            </a>

                            <a href="/mahasiswa/{{$m->nim}}/delete" onclick="return confirm('Anda yakin ingin menghapus data ini?');" class="btn btn-danger  btn-sm" data-toggle="tootip" data-placement="bottom" title="Delete">
                                <i class="fa fa-edit nav-icon"></i>
                            </a>

                        </div>
                    </td>
                    
                </tr>
                @endforeach
            </tbody>
        </table>
    </div>
</div>

@endsection