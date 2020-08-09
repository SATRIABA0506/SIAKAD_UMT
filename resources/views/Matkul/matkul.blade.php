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
    
    <a href="/tambah_matkul" class="btn btn-primary">
        <i class="fa fa-plus nav-icon"></i>
    </a>

<div class="card" style="border-top: 3px solid #096eb5">
        
       <div class="card-header">
            <h4>Mata Kuliah</h4>
        </div>

    <div class="card-body">
        <table class="table table-striped table table-bordered" id="datatable">
            <thead style="background-color: #096eb5">
                <tr>
                    <th class="text-center">No</th>
                    <th class="text-center">Kode Matkul</th>
                    <th class="text-center">Nama Matakuliah</th>
                    <th class="text-center">SKS</th>
                    <th class="text-center">Semester</th>
                    <th class="text-center" width="8%">Action</th>
                </tr>
            </thead>
            @php $i=1 @endphp
            <tbody>
                @php $i=1 @endphp
                 @foreach($matkul ?? '' as $m)
                <tr>
                    <td>{{$i++}}</td>
                   <td>{{$m->kode_matakuliah}}</td>
                   <td>{{$m->nama_matakuliah}}</td>
                   <td>{{$m->sks}}</td>
                   <td>{{$m->semester}}</td>
                    <td>
                         <div class="btn-group">

                            <a href="/matkul/edit/{{$m->kode_matakuliah}}" class="btn btn-warning  btn-sm" data-toggle="tootip" data-placement="bottom" title="Edit">
                                <i class="fa fa-edit nav-icon"></i>
                            </a>

                            <a href="/matkul/{{$m->kode_matakuliah}}/delete" onclick="return confirm('Anda yakin ingin menghapus data ini?');" class="btn btn-danger  btn-sm" data-toggle="tootip" data-placement="bottom" title="Delete">
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