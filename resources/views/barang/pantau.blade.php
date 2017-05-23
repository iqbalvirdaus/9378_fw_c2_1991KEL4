<!-- pantau.blade.php -->
@extends('master')
@section('container')
<div class="panel panel-warning"> 
	<div class="panel-heading">
		<strong><a href="{{url('barang')}}">
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
		<tr>
		</tr>
	</table>
	<div class="panel-heading">
		<strong>
			<i style="color:#8a6d3b" class="fa text-default "></i></a>Penawar Tertinggi Saat Ini
		</strong>
	</div>
	<table class="table">
	
		@foreach ($penawaranTertinggi as $penawaran) 
		<tr>
			<td>{{$penawaran->pembeli->nama}} </td>
			<td>{{$penawaran->harga_penawaran}} </td>
			<td><i class="fa fa-phone"> </i> {{$penawaran->pembeli->no_telp or 'Tiada No Hp penawaran'}}</td>
			<td><i class="fa fa-phone"> </i> Telpon Bila Deal</td>
			<td>
				<a href="{{url('transaksi/deal/'.$penawaran->barang->id.'/'.$penawaran->id.'/'.$penawaran->pembeli->id)}}" >
					<button class=" btn btn-danger">
						<i class="fa fa-hand-o-left"> <b> Deal</b></i>
					</button>
				</a>
			</td>
		</tr>
		@endforeach
	</table>

<div class="panel-heading" style="align s: center;">
		<strong>
			<i style="color:#8a6d3b; " class="fa text-default " ></i></a>Orang Yang Menawar Barang Anda
		</strong>
	</div>
	<table class="table">
		<tr class="row">
			<td>Nama </td>
			<td>Harga Penawaran </td>
		</tr>
		@foreach ($penawaranPada as $penawaran) 
		<tr class="row">

			<td>{{$penawaran->pembeli->nama}} </td>
			<td>{{$penawaran->harga_penawaran}} </td>

		</tr>
		@endforeach
	</table>



</div>
@stop