@include('penawaran.tambah')	
<div class="panel panel-default">
	<div class="panel-default">
	@foreach ($penawaranPada as $penawaran);
		<div class="form-group">
			<label class="col-sm-2 control-label"> {{$penawaran->pembeli->nama}}</label>
			<div class="col-sm-5">
				Rp. {{$penawaran->harga_penawaran or 'belum ada penawaran'}}
			</div>
			<div class="col-sm-5">
				<i class="fa fa-phone"> </i> {{$penawaran->pembeli->no_telp or 'Tiada No Hp penawaran'}}
			</div>
			div class="col-sm-5">
				<i class="fa fa-phone"> </i> Telpon No Bila Deal
			</div>
		</div> 
	@endforeach
</div>
