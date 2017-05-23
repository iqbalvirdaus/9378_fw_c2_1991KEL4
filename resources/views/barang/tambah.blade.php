@extends('master')
@section('container')
	<div class="panel panel-body" id="page-inner">
	<div class="clearfix"> </div>
		<div class="panel-heading">
			<strong>
				<a href="{{url('barang')}}">
					<i style="color:white" class="fa text-default fa-chevron-left"></i>
				</a>
				FORM PENJUALAN BARANG
			</strong>
		</div>
		{!! Form::open([ 'url'=>'barang/simpan','class'=>'form-horizontal','encytype'=>'multipart/form-data']) !!}
		{!! csrf_field() !!}
		@include('barang.form')
		<div style="width: 100%; text-align: right; ">
		<button class="btn btn-primary">
			<i class="fa fa-save"></i>Simpan
		</button>
		<button type="reset" class="btn btn-danger">
			<i class="fa fa-undo"></i>Ulangi
		</button>
		</div>
		{!! Form::close() !!}
	</div>
@stop