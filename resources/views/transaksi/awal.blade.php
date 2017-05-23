@extends('admin.master')
@section('container')  
<div class="panel panel-default">
	<div class="panel-default">
			<strong> SELURUH DATA TRANSAKSI </strong>
			<a href="{{url('kategori/tambah')}}" class="btn btn-xs btn-primary pull-right"> <i class="fa fa-plus" >KATEGORI</i> </a>
		<div class="clearfix"></div>
	</div>
	<table class="table table-striped table-bordered table-hover" align="right">
			<thead> 
					<tr>
						<th>No.</th>
						<th>Barang</th>
						<th>Pemilik</th>
						<th>Pembeli</th>
						<th>Lokasi</th>
						<th>Status</th>
						<th>Aksi</th> 
					</tr>
			</thead>
			<tbody>
				<?php $x=1; ?>
				@foreach ($data as $transaksi)
					<tr>
						<td> {{$x++}}</td>
						<td> {{$transaksi->barang->nama_barang or 'nama barang kosong'}}</td>
						<td> {{$transaksi->pemilik->nama or 'nama pemilik kosong'}}</td>
						<td> {{$transaksi->pembeli->nama or 'nama pembeli kosong'}}</td>
						<td> {{$transaksi->lokasi or 'lokasi kosong'}}</td>
						<td> {{$transaksi->status_transaksi or 'status kosong'}}</td>
						<td>
							<div class="btn-group" role="group"></div>
							<!-- <a href="{{url('transaksi/edit/'.$transaksi->id)}}" class="btn btn-warning btn-xs" data-toggle="tooltip" data-placement="top" title="ubah">
								<i class="fa fa-pencil"></i>
							</a> -->

							<!-- <a href="{{url('transaksi/lihat/'.$transaksi->id)}}" class="btn btn-info btn-xs" data-toggle="tooltip" data-placement="top" title="lihat">
								<i class="fa fa-eye"></i>
							</a> -->

							<a href="{{url('transaksi/hapus/'.$transaksi->id)}}" class="btn btn-danger btn-xs" data-toggle="tooltip" data-placement="top" title="hapus" onclick="javascript: return confirm('Yakin akan hapus data ini?')"> 
								<i class="fa fa-trash-o"> </i>
							</a>
						</td>
					</tr>
				@endforeach
			</tbody>
	</table>
</div>
@stop