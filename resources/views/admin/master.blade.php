<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml">
<head> 
      <meta charset="utf-8" /> 
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Admin</title>
	<!-- BOOTSTRAP STYLES-->
    <link href="{{asset('assets/css/bootstrap.css')}}" rel="stylesheet" />
     <!-- FONTAWESOME STYLES-->
    <link href="{{asset('assets/css/font-awesome.css')}}" rel="stylesheet" />
     <!-- MORRIS CHART STYLES-->
    <link href="{{asset('assets/js/morris/morris-0.4.3.min.css')}}" rel="stylesheet" />
        <!-- CUSTOM STYLES-->
    <link href="{{asset('assets/css/custom.css')}}" rel="stylesheet" />
     <!-- GOOGLE FONTS-->
   <link href='http://fonts.googleapis.com/css?family=Open+Sans' rel='stylesheet' type='text/css' />
</head>
<body>
    <div id="wrapper">
        <nav class="navbar navbar-default navbar-cls-top " role="navigation" style="margin-bottom: 0">
            <div class="navbar-header">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".sidebar-collapse">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <a class="navbar-brand" href="index.html">Admin Lego</a> 
            </div>
  <div style="color: white;
padding: 15px 50px 5px 50px;
float: right;
font-size: 16px;"> {{Auth::user()->username}} &nbsp; <a href="{{url('/logout')}}" class="btn btn-danger square-btn-adjust"  onclick="javascript: return confirm('Yakin akan keluar ?')">Logout</a> </div>
        </nav>   
           <!-- /. NAV TOP  -->
            <nav class="navbar-default navbar-side" role="navigation">
            <div class="sidebar-collapse">
                <ul class="nav" id="main-menu">
				<li class="text-center">
                    <img src="{{asset('assets/img/find_user.png')}}" class="user-image img-responsive"/>
					</li>
				
					
                    <li>
                        <a class="active-menu"  href="{{url('/admin')}}"><i class="fa fa-dashboard fa-3x"></i> Dashboard</a>
                    </li>
                    <li>
                        <a href="{{url('pengguna')}}"><i class="fa fa-user fa-3x"></i><b>USER</b></a>
                    </li>

      <!--               <li>
                        <a href="{{url('postingan')}}"><i class="fa fa-qrcode fa-3x"></i> <b>POSTINGAN</b></a>
                    </li> -->
				    <li >
                        <a href="{{url('transaksi')}}"><i class="fa fa-money fa-3x"></i> <b>TRANSAKSI</b></a>
                    </li>   
                    <li >
                        <a href="{{url('kategori')}}"><i class="fa fa-table fa-3x"></i> <b>KATEGORI</b></a>
                    </li>	
						                   
                
 <!--                     <li>
                        <a  href="{{url('blank')}}"><i class="fa fa-square-o fa-3x"></i> Blank Page</a>
                    </li>	 -->
                </ul>
               
            </div>
            
        </nav>  
        <!-- /. NAV SIDE  -->
        </div>
        
        <div id="page-wrapper" >
            <div id="page-inner">
                
                <div class="row">
                    <div class="col-md-12">
                    <div class="clearfix"></div>
        <div class="container">
         @if(Session::has('informasi'))
                    <div class="alert alert-info col-md-10">
                        <strong>Informasi :</strong>
                        {{Session::get('informasi')}}
                    </div> 
         @endif
        @if(count($errors) > 0)
            <div class="alert alert-danger">
                <ul>
                    @foreach ($errors->all() as $error) 
                        <li>{{$error}}</li>
                    @endforeach
                </ul>
            </div>
        @endif
    </div>
                       @yield('container')
                    </div>
                </div>              

    <!-- SCRIPTS -AT THE BOTOM TO REDUCE THE LOAD TIME-->
    <!-- JQUERY SCRIPTS -->
    <script src="{{asset('assets/js/jquery-1.10.2.js')}}"></script>
      <!-- BOOTSTRAP SCRIPTS -->
    <script src="{{asset('assets/js/bootstrap.min.js')}}"></script>
    <!-- METISMENU SCRIPTS -->
    <script src="{{asset('assets/js/jquery.metisMenu.js')}}"></script>
     <!-- MORRIS CHART SCRIPTS -->
     <script src="{{asset('assets/js/morris/raphael-2.1.0.min.js')}}"></script>
    <script src="{{asset('assets/js/morris/morris.js')}}"></script>
      <!-- CUSTOM SCRIPTS -->
    <script src="{{asset('assets/js/custom.js')}}"></script>
    

        </body>
        </html>