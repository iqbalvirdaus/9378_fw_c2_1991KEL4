<div class="form-group">
	<label class="col-sm-2 control-label"> Lokasi</label>
	<div class="col-sm-10">
		{!! Form::hidden('barang_id','') !!}
		{!! Form::hidden('pembeli_id','') !!}
		{!! Form::hidden('pemilik_id','') !!}
		{!! Form::textarea('lokasi',null,['class'=>'form-control','placeholder'=>"Nama Kategori"]) !!}
	</div>
</div> 

