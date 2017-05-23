<!-- transaksi.blade.php -->
@extends('master')
@section('container')
<div class="panel panel-warning"> 
	<div class="panel-heading">
		<strong><a href="{{url('barang/punya')}}">
			<i style="color:#8a6d3b" class="fa text-default fa-chevron-left"></i></a>Back
		</strong>
	</div>

	<table class="table table-striped table-bordered table-hover">
		<tr> 
			<td>{{$barang->created_at or 'nama barang kosong'}}</td>
		</tr>
		<tr>
			<td rowspan="10" >

				<img src="{{asset('image/'.$barang->foto)}}" class="user-image img-responsive" style="max-height:200px;max-width:200px;margin-top:10px;"/>
			</td>
			<td>	
				<b>Nama</b>
			</td>
			<td>
				{{$barang->nama_barang or 'nama barang kosong'}}
			</td>
			<td>Pemilik</td>
			<td>{{$barang->pemilik->nama or 'Pemilik Sudah Tiada'}}</td>
			<td>
				<b>Harga</b>
			</td>
			<td>
				Rp. {{$barang->harga or 'Harga kosong'}}
			</td>
			
		</tr>
		<tr>
			<td><b>Kategori</b></td>
			<td>{{$barang->kategori->nama_kategori or 'kategori kosong'}}</td>
			<td> <b>merk</b></td>
			<td>{{$barang->merk or 'merk kosong'}}</td>
			<td> <b>warna</b></td>
			<td>{{$barang->warna or 'warna kosong'}}</td>
		</tr>
		<tr>
			<td><b>Keterangan</b></td>
			<td>{{$barang->keterangan or ' Tidak Ada Keterangan dari Pemilik'}}</td>
		</tr>
		
	</table>
	<div class="panel-heading">
		<strong>
			<i style="color:#8a6d3b" class="fa text-default "></i></a>Pembeli
		</strong>
	</div>
	<table class="table ">
		@foreach ($penawarans as $penawaran) 
		<tr class="row">
			<td>Nama</td>
			<td>{{$pembeli->nama}}  </td>
		</tr>

		<tr class="row">
			<td>Harga Di Sepakati</td>
			<td>{{$penawaran->harga_penawaran}} </td>
			
		</tr> 
		<tr class="row">
			<td>No Handphone</td>
			<td><i class="fa fa-phone"> </i> {{$penawaran->pembeli->no_telp or 'Tiada No Hp penawaran'}}</td>
		</tr>

		@endforeach
	</table>

	
	<div class="form-group {{ $errors->has('lokasi') ? ' has-error' : '' }}">
		{!! Form::open([ 'url'=>'transaksi/simpan','class'=>'form-horizontal']) !!}
		<label class="col-sm-2 control-label">Lokasi Transaksi</label>
		<div class="col-sm-8">
			{!! Form::hidden('barang_id',$barang->id) !!}
			{!! Form::hidden('pembeli_id',$pembeli->id) !!}
			{!! Form::hidden('penawaran_id',$penawaran->id) !!}
			{!! Form::hidden('harga_akhir',$penawaran->harga_penawaran) !!}
			{!! Form::hidden('status_transaksi','proses') !!}
			
			{!! Form::text('lokasi',null,['class'=>'form-control','placeholder'=>"Lokasi"]) !!}

			@if ($errors->has('lokasi'))
			<span class="help-block">
				<strong>{{ $errors->first('lokasi') }}</strong>
			</span>
			@endif

		</div>
		<button class=" btn btn-primary" onclick="javascript: return confirm('Yakin Transaksi Barang Tersebut Telah selesai Atau Sukses?')">
			<i class="fa fa-money"> </i> Lakukan Transaksi
		</button>
		{!! Form::close() !!}
		
	</div>
	


</div>
@stop