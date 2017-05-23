<!-- login.blade.php -->
@extends('header')

@section('container')
<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">
                <div class="panel-heading">Login</div>
                <div class="panel-body">


                    <div class="panel panel-default">
                        <div class="panel-heading"> 
                            <strong>Masuk Aplikasi</strong>
                        </div>
                        {!! Form::open(['url'=>'login','class'=>'form-horizontal']) !!}

                        <div class="form-group"> 
                            <label class="col-sm-4 control-label"> Username </label>

                            <div class="col-sm-8">
                                {!! Form::text('username',null,['class'=>'form-control','placeholder'=>"username"]) !!} 
                                @if ($errors->has('username'))
                                <span class="help-block">
                                    <strong>{{ $errors->first('username') }}</strong>
                                </span>
                                @endif
                            </div>
                        </div>  
                        <div class="form-group"> 
                            <label class="col-sm-4 control-label"> Password </label>

                            <div class="col-sm-8">
                                {!! Form::password('password',['class'=>'form-control','placeholder'=>"password"])  !!} 
                                @if ($errors->has('password'))
                                <span class="help-block">
                                    <strong>{{ $errors->first('password') }}</strong>
                                </span>
                                @endif
                            </div>
                        </div>  
                        <div style="width: 100%;text-align: right;">
                            <button class="btn btn-primary"> <i class="fa fa-sign-in"> </i> Masuk</button>    
                            <button type="reset" class="btn btn-danger"> <i class="fa fa-undo"> </i> Ulangi</button>
                        </div>
                        {!! Form::close() !!}
                    </div>
                </div>
            </div>
        </div>
    </div>
    @endsection
