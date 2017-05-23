@extends('header')

@section('container')
<div class="container">
    <div class="row"> 
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">
                <div class="panel-heading">Register</div>
                <div class="panel-body">
                    <div class="form-group">

                    {!! Form::open(['url'=>'pembeli/simpan','class'=>'form-horizontal']) !!}

                       {{ csrf_field() }}

                       <div class="form-group {{ $errors->has('nama') ? ' has-error' : '' }}">
                        <label class="col-md-4 control-label">Nama</label>
                        <div class="col-md-6">
                            {!! Form::text('nama',null,['class'=>'form-control','placeholder'=>"Nama"]) !!}

                            @if ($errors->has('Nama'))
                            <span class="help-block">
                                <strong>{{ $errors->first('Nama') }}</strong>
                            </span>
                            @endif

                        </div>
                    </div>

                    <div class="form-group {{ $errors->has('tanggal lahir') ? ' has-error' : '' }}">
                        <label class="col-md-4 control-label">Tanggal Lahir</label>
                        <div class="col-md-6">
                            {!! Form::date('tgl_lahir',null,['class'=>'form-control']) !!}

                            @if ($errors->has('tanggal lahir'))
                            <span class="help-block">
                                <strong>{{ $errors->first('tanggal lahir') }}</strong>
                            </span>
                            @endif
                        </div>
                    </div>

                    <div class="form-group{{ $errors->has('jenis kelamin') ? ' has-error' : '' }}">
                        <label class="col-md-4 control-label">Jenis Kelamin</label>
                        <div class="col-md-6">
                            {!! Form::radio('gender','Laki-Laki',['class'=>'form-control']) !!} Laki-Laki
                            {!! Form::radio('gender','Perempuan',['class'=>'form-control']) !!} Perempuan

                            @if ($errors->has('Jenis Kelamin'))
                            <span class="help-block">
                              <strong>{{ $errors->first('Jenis Kelamin') }}</strong>
                          </span>
                          @endif
                      </div>
                  </div>
                  
                  <div class="form-group{{ $errors->has('alamat') ? ' has-error' : '' }}">
                    <label class="col-md-4 control-label">Alamat</label>
                    <div class="col-md-6">
                        {!! Form::textarea('alamat',null,['class'=>'form-control','placeholder'=>"alamat"]) !!}

                        @if ($errors->has('alamat'))
                        <span class="help-block">
                            <strong>{{ $errors->first('alamat') }}</strong>
                        </span>
                        @endif
                    </div>
                </div>
                <!-- <form class="form-horizontal" role="form" method="POST" action="{{ url('/register') }}"> -->


                        <!-- <div class="form-group{{ $errors->has('name') ? ' has-error' : '' }}">
                            <label for="name" class="col-md-4 control-label">Name</label>

                            <div class="col-md-6">
                                <input id="name" type="text" class="form-control" name="name" value="{{ old('name') }}">
                            
                                @if ($errors->has('name'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('name') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div> -->
                        <div class="form-group{{ $errors->has('no_telp') ? ' has-error' : '' }}">
                            <label for="email" class="col-md-4 control-label">NO Telepon</label>

                            <div class="col-md-6">

                                <input id="email" type="text" class="form-control" name="no_telp" placeholder="NO Telepon">

                                @if ($errors->has('no_telp'))
                                <span class="help-block">
                                    <strong>{{ $errors->first('no_telp') }}</strong>
                                </span>
                                @endif
                            </div>
                        </div>
                        <div class="form-group{{ $errors->has('name') ? ' has-error' : '' }}">
                            <label for="name" class="col-md-4 control-label">UserName</label>

                            <div class="col-md-6">
                                {!! Form::text('username',null,['class'=>'form-control','placeholder'=>"Username"]) !!}

                                @if ($errors->has('username'))
                                <span class="help-block">
                                    <strong>{{ $errors->first('username') }}</strong>
                                </span>
                                @endif
                            </div>
                        </div>            
                        <div class="form-group{{ $errors->has('email') ? ' has-error' : '' }}">
                            <label for="email" class="col-md-4 control-label">E-Mail Address</label>

                            <div class="col-md-6">
                                {!! Form::hidden('level','user') !!} 
                                <input id="email" type="email" class="form-control" name="email" value="{{ old('email') }}" placeholder="E-Mail">

                                @if ($errors->has('email'))
                                <span class="help-block">
                                    <strong>{{ $errors->first('email') }}</strong>
                                </span>
                                @endif

                            </div>
                        </div>

                        <div class="form-group{{ $errors->has('password') ? ' has-error' : '' }}">
                            <label for="password" class="col-md-4 control-label">Password</label>

                            <div class="col-md-6">
                                <input id="password" type="password" class="form-control" name="password" placeholder="Password">

                                @if ($errors->has('password'))
                                <span class="help-block">
                                    <strong>{{ $errors->first('password') }}</strong>
                                </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group{{ $errors->has('password_confirmation') ? ' has-error' : '' }}">
                            <label for="password-confirm" class="col-md-4 control-label">Confirm Password</label>
 
                            <div class="col-md-6">
                                <input id="password-confirm" type="password" class="form-control" name="password_confirmation" placeholder="password confirmation">

                                @if ($errors->has('password_confirmation'))
                                <span class="help-block">
                                    <strong>{{ $errors->first('password_confirmation') }}</strong>
                                </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group">
                            <div class="col-md-6 col-md-offset-4">
                                <button type="submit" class="btn btn-primary">
                                    <i class="fa fa-btn fa-user"></i> Register
                                </button>

                            </div>
                        </div>

                        <!-- </form> -->
                        {!! Form::close() !!}
                    </div>
                </div>
            </div>
        </div>
    </div>
    @endsection
