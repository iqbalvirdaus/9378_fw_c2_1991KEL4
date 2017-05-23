@extends('master') 
@section('container')
<div class="panel panel-info">
	<div class="panel-heading">
		<strong> <a href="{{url('pembeli')}}">
		<i class="fa text-default fa-chevron-left"></i>
		</a>Perbarui data pembeli</strong>
	</div>
	{!! Form::model($pembeli,['url'=>'pembeli/edit/'.$pembeli->id,'class'=>'form-horizontal']) !!}
	@include('pembeli.form')
		<div style="width:100%;text-align: right;">
			<button class="btn btn-info">
				<i class="fa fa-save"></i>Perbarui
			</button>
			<button type="reset" class="btn btn-danger">
				<i class="fa fa-undo"></i>ulangi
			</button>
		</div>
		{!! Form::close() !!}
</div>
@stop