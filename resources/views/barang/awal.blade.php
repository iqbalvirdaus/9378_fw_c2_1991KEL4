@extends('master')
@section('container') 
<div class="panel panel-default">
	<div class="panel-default">
		<!-- <strong> SELURUH DATA KATEGORI </strong> -->
		<!-- <a href="{{url('kategori/tambah')}}" class="btn btn-xs btn-primary pull-right"> <i class="fa fa-plus" >KATEGORI</i> </a> -->
		<div class="clearfix"></div>
	</div>


@foreach($semuaBarang as $barang) 

		
<table class="table table-striped table-bordered table-hover">
	<tr>
		<td> Di Post :</td> 
		<td>{{$barang->created_at or 'nama barang kosong'}}</td>
		<td >Pemilik</td>
		<td colspan="4">{{$barang->pemilik->nama or 'Pemilik Sudah Tiada'}}</td>
	</tr>
	<tr>
		<td rowspan="10" >
			foto
			<img src="{{asset('image/'.$barang->foto)}}" class="user-image img-responsive" style="max-height:200px;max-width:200px;margin-top:10px;"/>
		</td>
		<td>

			<b>Nama	</b>
		</td>
		<td>
			{{$barang->nama_barang or 'nama barang kosong'}}
		</td>
		<td>

			<b>Harga	</b>
		</td>
		<td>
			Rp. {{$barang->harga or 'Harga kosong'}}
		</td>
		
	</tr>
	<tr>
		<td> <b>Kategori	</b></td>
		<td>{{$barang->kategori->nama_kategori or 'kategori kosong'}}</td>
		<td> <b>merk</b></td>
		<td>{{$barang->merk or 'merk kosong'}}</td>
		<td> <b>warna</b></td>
		<td>{{$barang->warna or 'warna kosong'}}</td>
	</tr>
	<tr>

		<td colspan="6"><b>Keterangan</b></td>
		
	</tr>
	<tr>
		<td colspan="6">{{$barang->keterangan or ' Tidak Ada Keterangan dari Pemilik'}}</td>
	</tr>

</table>

<div class="col-md-6">
	<a href="{{url('barang/lihat/'.$barang->id)}}">
		<button class=" btn btn-primary">
			<i class="fa fa-comments-o"> <b> Ikut Lelang</b></i>
		</button>
	</a>
</div>	
@endforeach


</div>
@stop