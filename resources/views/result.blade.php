<!-- result.blade.php -->
@extends('master')
@section('container')
<div class="container">
	@if (count($hasil))
	<div class="alert alert-info">
		Hasil Pencarian : <b>{{$query}}</b>
	</div>

	@foreach($hasil as $data)
    <div class="row">
		
		<div class="panel panel-body">
		<a href="{{url('barang/lihat/'.$data->id)}}">
		        <label class="col-sm-2 control-label" > {{ $data->nama_barang }} </label></a>
			<div class="col-sm-5"> Rp. {{ $data->harga }}  </div> <div> {{ $data->pemilik->nama }}|{{ $data->created_at }}</div>
			
            <div class="divider"></div>            
		</div>

	</div>
	@endforeach

</div>
{{ $hasil->render() }}
	
@else
   <div class="alert alert-danger">Oops.. Data <b>{{$query}}</b> Tidak Ditemukan</div>
@endif

</div>
@endsection