@extends('admin.master')
@section('container')  
<div class="panel panel-default">
	<div class="panel-default">
			<strong> SELURUH DATA KATEGORI </strong>
			<a href="{{url('kategori/tambah')}}" class="btn btn-xs btn-primary pull-right"> <i class="fa fa-plus" >KATEGORI</i> </a>
		<div class="clearfix"></div>
	</div>
	<table class="table table-striped table-bordered table-hover" align="right">
			<thead> 
					<tr>
						<th>No.</th>
						<th>NAMA KATEGORI</th>
						<th>Aksi</th> 
					</tr>
			</thead>
			<tbody>
				<?php $x=1; ?>
				@foreach ($data as $kategori)
					<tr>
						<td> {{$x++}}</td>
						<td> {{$kategori->nama_kategori or 'nama kategori kosong'}}</td>
						<td>
							<div class="btn-group" role="group"></div>
							<a href="{{url('kategori/edit/'.$kategori->id)}}" class="btn btn-warning btn-xs" data-toggle="tooltip" data-placement="top" title="ubah">
								<i class="fa fa-pencil"></i>
							</a>

							<!-- <a href="{{url('kategori/lihat/'.$kategori->id)}}" class="btn btn-info btn-xs" data-toggle="tooltip" data-placement="top" title="lihat">
								<i class="fa fa-eye"></i>
							</a> -->

							<a href="{{url('kategori/hapus/'.$kategori->id)}}" class="btn btn-danger btn-xs" data-toggle="tooltip" data-placement="top" title="hapus" onclick="javascript: return confirm('Yakin akan hapus data ini?')"> 
								<i class="fa fa-trash-o"> </i>
							</a>
						</td>
					</tr>
				@endforeach
			</tbody>
	</table>
</div>
@stop