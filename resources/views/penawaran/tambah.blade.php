	<div class="panel panel-body">
		{!! Form::open([ 'url'=>'penawaran/simpan','class'=>'form-horizontal']) !!}
		@include('kategori.form')
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
