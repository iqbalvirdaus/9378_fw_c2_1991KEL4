<div class="form-group">
	
	<label class="col-sm-2 control-label">Nama Barang </label>
	<div class="col-sm-10">
		{!! Form::text('nama_barang',null,['class'=>'form-control','placeholder'=>"Apa Yang Anda Jual ?"]) !!}
	</div>
	<label class="col-sm-2 control-label">Merk </label>
	<div class="col-sm-10">

		<select name="merk" class="form-control">
			<option value="Samsung">SAMSUNG</option>
			<option value="Apple">APPLE</option>
			<option value="Acer">ACER</option>
			<option value="Asus">ASUS</option>
			<option value="Lenovo">LENOVO</option>
			<option value="Xiao mi">Xiao Mi</option>
			<option value="Vivo">Vivo</option>
			<option value="Oppo">Oppo</option>

		</select>
	</div>
	<label class="col-sm-2 control-label">WARNA</label>
	<div class="col-sm-10">

		<select name="warna" class="form-control">
			<option value="Hitam">HITAM</option>
			<option value="Putih">PUTIH</option>
			<option value="Silver">SILVER</option>
			<option value="Gold">GOLD</option>
			<option value="Merah">MERAH</option>

		</select>

	</div>
	
	
	<label class="col-sm-2 control-label">JUMLAH</label>
	<div class="col-sm-10">
		{!! Form::number('jumlah',null,['class'=>'form-control','placeholder'=>"Jumlah"]) !!}
	</div>
	
	<label class="col-sm-2 control-label">HARGA</label>
	<div class="col-sm-10">
		{!! Form::number('harga',null,['class'=>'form-control','placeholder'=>"harga"]) !!}
	</div>
	</div>
	
	<label class="col-sm-2 control-label">KETERANGAN</label>
	<div class="col-sm-10">
		{!! Form::textarea('keterangan',null,['class'=>'form-control','placeholder'=>"Keterangan"]) !!}
	</div>
	
	
	<label class="col-sm-2 control-label">KATEGORI </label>
	<div class="col-sm-10">
		{!! Form::select('kategori_id',$kategori->lists('nama_kategori','id'),null,['class'=>'form-control','id'=>'kategori_id','placeholder'=>"Kategori"]) !!}		
	</div>
	<div class="row-sm-2"> </div>
	<label class="col-sm-2 control-label">FOTO</label>
	<div class="col-sm-10">
		{!! Form::file('foto')!!}
	</div>

	


