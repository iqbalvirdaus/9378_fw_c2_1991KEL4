@extends('admin.master')
@section('container') 
<div class="panel panel-warning"> 
	<div class="panel-heading">
		<strong><a href="{{url('pengguna')}}">
			<i style="color:#8a6d3b" class="fa text-default fa-chevron-left"></i></a>Back
		</strong>
	</div>
	<table class="table">
		<tr>
			<td>Username</td>
			<td>:</td>
			<td>{{ $transaksi->username }}</td>
		</tr>
		<tr>
			<td>Password</td>
			<td>:</td>
			<td>{{ $transaksi->password }}</td>
		</tr>
		<!-- <tr>
			<td class="col-xs-4">Dibuat Tanggal</td>
			<td class="col-xs-4">:</td>
			<td class="col-xs-4">{{$pengguna->created_at}}</td>
		</tr>
		<tr>
			<td class="col-xs-4">Diperbarui Tanggal</td>
			<td class="col-xs-4">:</td>
			<td class="col-xs-4">{{$pengguna->updated_at}}</td>
		</tr> -->
		
	</table>
</div>
@stop