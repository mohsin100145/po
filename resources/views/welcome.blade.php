<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Police</title>
        <link href="{{ asset('assets/css/bootstrap.min.css') }}" rel="stylesheet" media="all">
        <link href="{{ asset('assets/css/font-awesome.min.css') }}" rel="stylesheet" media="all">
        <link href="{{ asset('assets/css/animate.min.css') }}" rel="stylesheet" media="all">
        <link href="{{ asset('assets/css/touch-slider.css') }}" rel="stylesheet" media="all">
    </head>

    <body>
        <div id="bootstrap-touch-slider" class="carousel bs-slider fade  control-round indicators-line" data-ride="carousel" data-pause="hover" data-interval="5000" >
            <ol class="carousel-indicators">
                <li data-target="#bootstrap-touch-slider" data-slide-to="0" class="active"></li>
                <li data-target="#bootstrap-touch-slider" data-slide-to="1"></li>
                <li data-target="#bootstrap-touch-slider" data-slide-to="2"></li>
            </ol>

            <div class="carousel-inner" role="listbox">
                <div class="item active">
                    <img src="{{ asset('assets/img/slide1.jpeg') }}" alt="Bootstrap Touch Slider"  class="slide-image"/>
                    <div class="bs-slider-overlay"></div>

                    <div class="container">
                        <div class="row">
                            
                            <div class="slide-text slide_style_left">
                                <h1 data-animation="animated zoomInRight">999 National Emergency Service</h1>
                                <p data-animation="animated fadeInLeft">Police hsdjfnch uhnfcuhd khfcdsui iyngcf</p>
                                @if (Auth::guest())
                                    <a href="{!! url('/login') !!}" class="btn btn-default" data-animation="animated fadeInLeft">Click Here To Thana Login</a>
                                    <a href="{!! url('/login') !!}" class="btn btn-primary" data-animation="animated fadeInRight">Click Here To Dashboard Login</a>    
                                @else
                                    <a href="{!! url('/home') !!}" class="btn btn-default" data-animation="animated fadeInLeft">Call Counter Dashboard</a>
                                    <a href="{!! url('/phone') !!}" class="btn btn-primary" data-animation="animated fadeInRight">Phone Extension</a>  
                                @endif
                            </div>
                        </div>
                    </div>
                </div>
                
                <div class="item">
                    <img src="{{ asset('assets/img/slide2.jpeg') }}" alt="Bootstrap Touch Slider"  class="slide-image"/>
                    <div class="bs-slider-overlay"></div>
                    <div class="slide-text slide_style_center">
                        <h1 data-animation="animated flipInX">Hamba Intenational</h1>
                        <p data-animation="animated lightSpeedIn"> Tjkdfsg isdfhnuuh iufhcuh iuhufvh ijfgv</p>
                        @if (Auth::guest())
                            <a href="{!! url('/login') !!}" class="btn btn-default" data-animation="animated fadeInUp">Click Here To Thana Login</a>
                            <a href="#" class="btn btn-primary" data-animation="animated fadeInDown">Click Here To Dashboard Login</a>    
                        @else
                            <a href="{!! url('/dashboard2') !!}" class="btn btn-default" data-animation="animated fadeInUp">Call Disposition Dashboard</a>
                            <a href="{!! url('/carrier') !!}" class="btn btn-primary" data-animation="animated fadeInDown">Carrier</a>  
                        @endif                      
                    </div>
                </div>

                <div class="item">
                    <img src="{{ asset('assets/img/slide3.jpeg') }}" alt="Bootstrap Touch Slider"  class="slide-image"/>
                    <div class="bs-slider-overlay"></div>
                    <div class="slide-text slide_style_right">
                        <h1 data-animation="animated zoomInLeft">fgyhfohkfg uioiutrbvu  rtyiu uytf</h1>
                        <p data-animation="animated fadeInRight">dfgjljkljit hkuhghdhu rthff dgj</p>
                        @if (Auth::guest())
                            <a href="{!! url('/login') !!}" class="btn btn-default" data-animation="animated fadeInLeft">Click Here To Thana Login</a>
                            <a href="{!! url('/login') !!}" class="btn btn-primary" data-animation="animated fadeInRight">Click Here To Dashboard Login</a>    
                        @else
                            <a href="{!! url('/dashboard3') !!}" class="btn btn-default" data-animation="animated fadeInLeft">Call Summary Dashboard</a>
                                <a href="{!! url('/cdr') !!}" class="btn btn-primary" data-animation="animated fadeInRight">Call Detail Records</a>  
                        @endif
                    </div>
                </div>
            </div>

            <a class="left carousel-control" href="#bootstrap-touch-slider" role="button" data-slide="prev">
                <span class="fa fa-angle-left" aria-hidden="true"></span>
                <span class="sr-only">Previous</span>
            </a>
            <a class="right carousel-control" href="#bootstrap-touch-slider" role="button" data-slide="next">
                <span class="fa fa-angle-right" aria-hidden="true"></span>
                <span class="sr-only">Next</span>
            </a>

        </div> 

        <script src="{{ asset('assets/js/jquery.min.js') }}"></script>
        <script src="{{ asset('assets/js/bootstrap.min.js') }}"></script>
        <script src="{{ asset('assets/js/touch.min.js') }}"></script>
        <script src="{{ asset('assets/js/touch-slider.js') }}"></script>
        
        <script type="text/javascript">
            $('#bootstrap-touch-slider').bsTouchSlider();
        </script>
    </body>
</html>