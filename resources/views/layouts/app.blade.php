<!doctype html>
<html class="no-js" lang="zxx">

<head>
    <meta charset="utf-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <title>Blog</title>
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- <link rel="manifest" href="site.webmanifest"> -->
    <link rel="shortcut icon" type="image/x-icon" href="/img/favicon.png">
    <!-- Place favicon.ico in the root directory -->

     <!-- CSS here -->
     <link rel="stylesheet" href="/css/bootstrap.min.css">
    <link rel="stylesheet" href="/css/owl.carousel.min.css">
    <link rel="stylesheet" href="/css/magnific-popup.css">
    <link rel="stylesheet" href="/css/font-awesome.min.css">
    <link rel="stylesheet" href="/css/themify-icons.css">
    <link rel="stylesheet" href="/css/nice-select.css">
    <link rel="stylesheet" href="/css/flaticon.css">
    <link rel="stylesheet" href="/css/gijgo.css">
    <link rel="stylesheet" href="/css/animate.css">
    <link rel="stylesheet" href="/css/slicknav.css">
    <link rel="stylesheet" href="/css/style.css">

</head>

<body>

    <!-- header-start -->
    <header>
        <div class="header-area ">

            <div id="sticky-header" class="main-header-area">
                <div class="container">
                    <div class="row ">

                        <div class="col-xl-12 col-lg-12">
                            <div class="main-menu  d-none d-lg-block">
                                <nav>
                                    <ul id="navigation" class="ml-auto text-right">
                                        <li><a class="{{ request()->is('/') ? 'text-primary' : ''}}" href="{{route('index')}}">Home</a></li>
                                        <li><a class="{{ request()->is('articles*') ? 'text-primary' : ''}}" href="{{route('articles')}}">Articles</a></li>

                                    </ul>
                                </nav>
                            </div>
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </header>
    <!-- header-end -->

    @yield('content')

    <!-- footer start -->
    <footer class="footer">

        <div class="copy-right_text">
            <div class="container">
                <div class="footer_border"></div>
                <div class="row">
                    <div class="col-xl-12">
                        <p class="copy_right text-center">
                            <!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
                            Copyright &copy;<script>
                                document.write(new Date().getFullYear());
                            </script> by <a href="#">Murodjon Shomuratov</a>
                            <!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </footer>
    <!-- footer end  -->
    <!-- link that opens popup -->


     <!-- JS here -->
    <script type="text/javascript" src="{{asset('js/vendor/modernizr-3.5.0.min.js')}}"></script>
    <script type="text/javascript" src="{{asset('js/vendor/jquery-1.12.4.min.js')}}"></script>

    <script type="text/javascript" src="{{asset('js/popper.min.js')}}"></script>
    <script type="text/javascript" src="{{asset('js/bootstrap.min.js')}}"></script>
    <script type="text/javascript" src="{{asset('js/owl.carousel.min.js')}}"></script>
    <script type="text/javascript" src="{{asset('js/isotope.pkgd.min.js')}}"></script>
    <script type="text/javascript" src="{{asset('js/ajax-form.js')}}"></script>
    <script type="text/javascript" src="{{asset('js/waypoints.min.js')}}"></script>
    <script type="text/javascript" src="{{asset('js/jquery.counterup.min.js')}}"></script>
    <script type="text/javascript" src="{{asset('js/imagesloaded.pkgd.min.js')}}"></script>
    <script type="text/javascript" src="{{asset('js/scrollIt.js')}}"></script>
    <script type="text/javascript" src="{{asset('js/jquery.scrollUp.min.js')}}"></script>
    <script type="text/javascript" src="{{asset('js/wow.min.js')}}"></script>
    <script type="text/javascript" src="{{asset('js/nice-select.min.js')}}"></script>
    <script type="text/javascript" src="{{asset('js/jquery.slicknav.min.js')}}"></script>
    <script type="text/javascript" src="{{asset('js/jquery.magnific-popup.min.js')}}"></script>
    <script type="text/javascript" src="{{asset('js/plugins.js')}}"></script>
    <script type="text/javascript" src="{{asset('js/gijgo.min.js')}}"></script>

    <!--contact js-->
    <script type="text/javascript" src="{{asset('js/contact.js')}}"></script>
    <script type="text/javascript" src="{{asset('js/jquery.ajaxchimp.min.js')}}"></script>
    <script type="text/javascript" src="{{asset('js/jquery.form.js')}}"></script>
    <script type="text/javascript" src="{{asset('js/jquery.validate.min.js')}}"></script>
    <script type="text/javascript" src="{{asset('js/mail-script.js')}}"></script>

    <script type="text/javascript" src="{{asset('js/main.js')}}"></script>'

    <script>
        $('#datepicker').datepicker({
            iconsLibrary: 'fontawesome',
            icons: {
             rightIcon: '<span class="fa fa-caret-down"></span>'
         }
        });
        $('#datepicker2').datepicker({
            iconsLibrary: 'fontawesome',
            icons: {
             rightIcon: '<span class="fa fa-caret-down"></span>'
         }

        });
    </script>

    @stack('scripts')

</body>

</html>
