@extends('master')
@section('container')
<div class="panel panel-warning"> 
	<div class="panel-heading">
		<strong><a href="{{url('barang')}}">
			<i style="color:#8a6d3b" class="fa text-default fa-chevron-left"></i></a>Back
		</strong>
	</div>
	
	<table class="table table-striped table-bordered table-hover">
		<tr> 
			<td>{{$barang->created_at or 'nama barang kosong'}}</td>
		</tr>
		<tr>
			<td rowspan="10" >

				<img src="{{asset('image/'.$barang->foto)}}" class="user-image img-responsive" style="max-height:200px;max-width:200px;margin-top:10px;"/>
			</td>
			<td>	
				<b>Nama</b>
			</td>
			<td>
				{{$barang->nama_barang or 'nama barang kosong'}}
			</td>
			<td>Pemilik</td>
			<td>{{$barang->pemilik->nama or 'Pemilik Sudah Tiada'}}</td>
			<td>
				<b>Harga</b>
			</td>
			<td>
				Rp. {{$barang->harga or 'Harga kosong'}}
			</td>
			
		</tr>
		<tr>
			<td><b>Kategori</b></td>
			<td>{{$barang->kategori->nama_kategori or 'kategori kosong'}}</td>
			<td> <b>merk</b></td>
			<td>{{$barang->merk or 'merk kosong'}}</td>
			<td> <b>warna</b></td>
			<td>{{$barang->warna or 'warna kosong'}}</td>
		</tr>
		<tr>

			<td colspan="6"><b>Keterangan</b></td>

		</tr>
		<tr>
			<td colspan="6">{{$barang->keterangan or ' Tidak Ada Keterangan dari Pemilik'}}</td>
		</tr>
	</table>
	<div>
		
		

<div class="form-group {{ $errors->has('harga_penawaran') ? ' has-error' : '' }}">
	{!! Form::open([ 'url'=>'penawaran/simpan','class'=>'form-horizontal']) !!}
                        <label class="col-sm-2 control-label">HARGA PENAWARAN</label>
                        <div class="col-sm-4">
                        {!! Form::hidden('barang_id',$barang->id) !!} 
						{!! Form::number('harga_penawaran',null,['class'=>'form-control','placeholder'=>"Harga Tawaran Anda"]) !!}

                            @if ($errors->has('harga_penawaran'))
                            <span class="help-block">
                                <strong>{{ $errors->first('Nama') }}</strong>
                            </span>
                            @endif

                        </div>
                        <button class=" btn btn-primary">
				<i class="fa fa-money"> </i> Pasang Harga
			</button>
    {!! Form::close() !!}
                    </div>


		<div class="panel-heading">
			<strong>
				<i style="color:#8a6d3b" class="fa text-default "></i></a>Penawar Tertinggi Saat Ini
			</strong>
		</div>
		<table class="table ">
			<tr class="row">
				<td>Nama</td>
				<td>Harga Penawaran </td>
				<td>No Telpon</td>


			</tr>
			@foreach ($penawaranTertinggi as $penawaran) 
			<tr class="row">
				<td>{{$penawaran->pembeli->nama}} </td>
				<td>{{$penawaran->harga_penawaran}} </td>
				<td><i class="fa fa-phone"> </i> {{$penawaran->pembeli->no_telp or 'Tiada No Hp penawaran'}}</td>

			</tr>
			@endforeach
		</table>
		<div class="panel-heading">
			<strong>
				<i style="color:#8a6d3b" class="fa text-default "></i>Orang Yang Menawar Barang Anda
			</strong>
		</div>
		<div class="col-md-8 col-md-offset-2">
			<table class="table">
				<tr class="row">
					<td>Nama </td>
					<td>Harga Penawaran </td>


				</tr>
				@foreach ($penawaranPada as $penawaran) 
				<tr class="row">

					<td class="cell">{{$penawaran->pembeli->nama}} </td>
					<td>{{$penawaran->harga_penawaran}} </td>


				</tr>
				@endforeach
			</table>
		</div>


	</div>
	@stop