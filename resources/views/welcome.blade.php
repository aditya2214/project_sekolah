<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Fluid Gallery HTML5 CSS3 Template</title>
<!--
Fluid Gallery Template
http://www.templatemo.com/tm-500-fluid-gallery
-->
    <!-- load stylesheets -->
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Open+Sans:300,400,600">  
    <!-- Google web font "Open Sans" -->
    <link rel="stylesheet" href="{{ asset ('user/Font-Awesome-4.7/css/font-awesome.min.css')}}">                
    <!-- Font Awesome -->
    <link rel="stylesheet" href="{{ asset ('user/css/bootstrap.min.css')}}">                                      
    <!-- Bootstrap style -->
    <link rel="stylesheet" href="{{ asset ('user/css/hero-slider-style.css')}}">                              
    <!-- Hero slider style (https://codyhouse.co/gem/hero-slider/) -->
    <link rel="stylesheet" href="{{ asset ('user/css/magnific-popup.css')}}">                                 
    <!-- Magnific popup style (http://dimsemenov.com/plugins/magnific-popup/) -->
    <link rel="stylesheet" href="{{ asset ('user/css/templatemo-style.css')}}">                                   

    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
        <!--[if lt IE 9]>
          <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
          <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
          <![endif]-->

        <!-- These two JS are loaded at the top for gray scale including the loader. -->

        <script src="{{ asset ('user/js/jquery-1.11.3.min.js')}}"></script>
        <!-- jQuery (https://jquery.com/download/) -->

        <script>
		
            var tm_gray_site = false;
            
            if(tm_gray_site) {
                $('html').addClass('gray');
            }
            else {
                $('html').removeClass('gray');   
            }
        </script>
</head>

    <body>
            <!-- Navigation -->        
            <div class="cd-slider-nav">
                <nav class="navbar">
                    <div class="tm-navbar-bg">
                        <a class="navbar-brand text-uppercase" href="#"><i class="fa fa-book" aria-hidden="true"></i>&nbsp;Books</a>
                        <button class="navbar-toggler hidden-lg-up" type="button" data-toggle="collapse" data-target="#tmNavbar">
                            &#9776;
                        </button>
                        <div class="collapse navbar-toggleable-md text-xs-center text-uppercase tm-navbar" id="tmNavbar">
                            <ul class="nav navbar-nav">
                                @foreach($kategori as $k)
                                <li class="nav-item active selected">
                                    <a class="nav-link" href="{{ url ('home/'.$k->id)}}" data-no="{{$k->id}}">{{$k->nama}} <span class="sr-only">(current)</span></a>
                                </li>
                                @endforeach
                            </ul>
                        </div>                        
                    </div>
                </nav>
            </div> 
            <footer class="tm-footer">
                <div class="">
                    <a href="{{ url ('home') }}" class="btn btn-primary">Kelola</a>
                    <a href="{{ url ('kirim-tugas') }}" class="btn btn-primary">Kirim Tugas</a>
                </div>
            </footer>
        

        <!-- Preloader, https://ihatetomatoes.net/create-custom-preloading-screen/ -->
        
        <!-- load JS files -->
        
        <script src="{{ asset ('user/js/tether.min.js')}}"></script> <!-- Tether (http://tether.io/)  --> 
        <script src="{{ asset ('user/js/bootstrap.min.js')}}"></script>             <!-- Bootstrap js (v4-alpha.getbootstrap.com/) -->
        <script src="{{ asset ('user/js/hero-slider-main.js')}}"></script>          <!-- Hero slider (https://codyhouse.co/gem/hero-slider/) -->
        <script src="{{ asset ('user/js/jquery.magnific-popup.min.js')}}"></script> <!-- Magnific popup (http://dimsemenov.com/plugins/magnific-popup/) -->
                 

</body>
</html>