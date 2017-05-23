<!-- punya.blade.php -->
@extends('master')
@section('container') 
<div class="panel panel-default">
	<div class="panel-default">
		
		<div class="clearfix"></div>
	</div>


	@foreach($semuaTransaksi as $transaksi) 


	<table class="table table-striped table-bordered table-hover">
		<tr>	
			<td colspan="7" bgcolor="grey"> </td>
		</tr>
		<tr>
			<td> Di Post :</td> 
			<td>{{$transaksi->created_at or 'nama transaksi kosong'}}</td>
			<td>Pemilik</td>
			<td>{{$transaksi->pemilik->nama or 'Pemilik Sudah Tiada'}}</td>
			<td>Pembeli</td>
			<td colspan="2"	>{{$transaksi->pembeli->nama or 'pembeli Sudah Tiada'}}</td>

		</tr>
		<tr>
			<td rowspan="10" >
				<img src="{{asset('image/'.$transaksi->barang->foto)}}" class="user-image img-responsive" style="max-height:200px;max-width:200px;margin-top:10px;"/>
			</td>
			<td>

				<b>Nama	</b>
			</td>
			<td>
				{{$transaksi->barang->nama_barang or 'nama transaksi kosong'}}
			</td>
			<td>

				<b>Harga	</b>
			</td>
			<td>
				Rp. {{$transaksi->barang->harga or 'Harga kosong'}}
			</td>
			<td>

				<b>Harga Akhir</b>
			</td>
			<td>
				Rp. {{$transaksi->harga_akhir or 'belum ada penawaran'}}
			</td>
		</tr>
		<tr>

			<td><b>Lokasi</b></td>
			<td colspan="5">{{$transaksi->lokasi or ' Tidak Ada lokasi dari Pemilik'}}</td>
		</tr>
		<tr>
			<td><b>Status</b></td>

			<td colspan="4">{{$transaksi->status_transaksi or ' Tidak Ada status dari Pemilik'}}</td>
			<td>	
				
				{!! Form::open([ 'url'=>'transaksi/update/'.$transaksi->id,'class'=>'form-horizontal']) !!}
				{!! Form::hidden('status_transaksi','Sukses') !!}
				<button class=" btn btn-primary">
					<i class="fa fa-gift"> <b> Transaksi Sukses</b></i>
				</button>
				{!! Form::close() !!}
			</td>
		</tr>

	</table>

	@endforeach


</div>
@stop