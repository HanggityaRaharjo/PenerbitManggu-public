<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>Penerbit Manggu - @yield('title')</title>
    <!-- favicons Icons -->
    <link rel="apple-touch-icon" sizes="180x180" href="{{asset('assets')}}/images/favicons/apple-touch-icon.png" />
    <link rel="icon" type="image/png" sizes="32x32" href="{{asset('assets')}}/images/favicons/favicon-32x32.png" />
    <link rel="icon" type="image/png" sizes="16x16" href="{{asset('assets')}}/images/favicons/favicon-16x16.png" />
    <link rel="manifest" href="{{asset('assets')}}/images/favicons/site.webmanifest" />
    <meta name="description" content="Agrikon HTML Template For Agriculture Farm & Farmers" />
    <!-- fonts -->
    <link rel="preconnect" href="https://fonts.gstatic.com" />
    <link href="https://fonts.googleapis.com/css2?family=Homemade+Apple&family=Abril+Fatface&family=Rubik:ital,wght@0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap" rel="stylesheet" />


    <link rel="stylesheet" href="{{asset('assets')}}/vendors/bootstrap/bootstrap.min.css" />
    <link rel="stylesheet" href="{{asset('assets')}}/vendors/bootstrap-select/bootstrap-select.min.css" />
    <link rel="stylesheet" href="{{asset('assets')}}/vendors/animate/animate.min.css" />
    <link rel="stylesheet" href="{{asset('assets')}}/vendors/fontawesome/css/all.min.css" />
    <link rel="stylesheet" href="{{asset('assets')}}/vendors/jarallax/jarallax.css" />
    <link rel="stylesheet" href="{{asset('assets')}}/vendors/organik-icon/organik-icons.css" />
    <link rel="stylesheet" href="{{asset('assets')}}/vendors/jquery-magnific-popup/jquery.magnific-popup.css" />
    <link rel="stylesheet" href="{{asset('assets')}}/vendors/nouislider/nouislider.min.css" />
    <link rel="stylesheet" href="{{asset('assets')}}/vendors/nouislider/nouislider.pips.css" />
    <link rel="stylesheet" href="{{asset('assets')}}/vendors/odometer/odometer.min.css" />
    <link rel="stylesheet" href="{{asset('assets')}}/vendors/swiper/swiper.min.css" />
    <link rel="stylesheet" href="{{asset('assets')}}/vendors/tiny-slider/tiny-slider.min.css" />
    <!-- template styles -->
    <link rel="stylesheet" href="{{asset('assets')}}/css/organik.css" />
    <link rel="stylesheet" href="{{asset('assets')}}/css/responsive.css" />
</head>


<body>
    <div class="preloader">
        <img class="preloader__image" width="55" src="{{asset('assets')}}/images/loader2.png" alt="" />
    </div>

    <div class="page-wrapper">

        @include('layouts.header')

        @yield('content')

        @include('layouts.footer')

    </div>
    <div class="mobile-nav__wrapper">
        <div class="mobile-nav__overlay mobile-nav__toggler"></div>
        <!-- /.mobile-nav__overlay -->
        <div class="mobile-nav__content">
            <span class="mobile-nav__close mobile-nav__toggler"><i class="organik-icon-close"></i></span>

            <div class="logo-box">
                <a href="index.html" aria-label="logo image"><img src="{{asset('assets')}}/images/manggulogo1.png" width="250" alt=""></a>
            </div>
            <!-- /.logo-box -->
            <div class="mobile-nav__container"></div>
            <!-- /.mobile-nav__container -->

            <ul class="mobile-nav__contact list-unstyled">
                <li>
                    <i class="organik-icon-calling"></i>
                    <a href="https://wa.me/082214136659">0822-1413-6659</a>
                </li>
                <li>
                    <i class="organik-icon-email"></i>
                    <a href="mailto:info@organik.com">penerbitmanggu@gmail.com</a>
                </li>
            </ul><!-- /.mobile-nav__contact -->
            <div class="mobile-nav__top">
                <a href="https://www.linkedin.com/in/penerbit-manggu-532888122" class="fab fa-linkedin" style="color: #ffff;"></a>
                <a href="https://twitter.com/penerbit_manggu" class="fab fa-twitter" style="color: #ffff;"></a>   
                <a href="https://www.facebook.com/penerbitmanggu" class="fab fa-facebook-square" style="color: #ffff;"></a>
                <a href="https://www.youtube.com/c/PenerbitManggu/" class="fab fa-youtube" style="color: #ffff;"></a>
                <a href="https://www.instagram.com/penerbit_manggu/" class="fab fa-instagram" style="color: #ffff;"></a>
                <a href="/login" class="organik-icon-user" style="color: #ffff;"></a>
                
            </div><!-- /.mobile-nav__top -->
        </div>
        <!-- /.mobile-nav__content -->
    </div>

    </script> 
    <script src="{{asset('assets')}}/vendors/jquery/jquery-3.5.1.min.js"></script>
    <script src="{{asset('assets')}}/vendors/bootstrap/bootstrap.bundle.min.js"></script>
    <script src="{{asset('assets')}}/vendors/bootstrap-select/bootstrap-select.min.js"></script>
    <script src="{{asset('assets')}}/vendors/jarallax/jarallax.min.js"></script>
    <script src="{{asset('assets')}}/vendors/jquery-ajaxchimp/jquery.ajaxchimp.min.js"></script>
    <script src="{{asset('assets')}}/vendors/jquery-appear/jquery.appear.min.js"></script>
    <script src="{{asset('assets')}}/vendors/jquery-circle-progress/jquery.circle-progress.min.js"></script>
    <script src="{{asset('assets')}}/vendors/jquery-magnific-popup/jquery.magnific-popup.min.js"></script>
    <script src="{{asset('assets')}}/vendors/jquery-validate/jquery.validate.min.js"></script>
    <script src="{{asset('assets')}}/vendors/nouislider/nouislider.min.js"></script>
    <script src="{{asset('assets')}}/vendors/odometer/odometer.min.js"></script>
    <script src="{{asset('assets')}}/vendors/swiper/swiper.min.js"></script>
    <script src="{{asset('assets')}}/vendors/tiny-slider/tiny-slider.min.js"></script>
    <script src="{{asset('assets')}}/vendors/wnumb/wNumb.min.js"></script>
    <script src="{{asset('assets')}}/vendors/wow/wow.js"></script>
    <script src="{{asset('assets')}}/vendors/isotope/isotope.js"></script>
    <script src="{{asset('assets')}}/vendors/countdown/countdown.min.js"></script>
    <!-- template js -->
    <script src="{{asset('assets')}}/js/organik.js"></script>
    <!-- Start of HubSpot Embed Code -->
    <script type="text/javascript" id="hs-script-loader" async defer src="//js-na1.hs-scripts.com/22156259.js"></script>

    <script>
        /**
        *  RECOMMENDED CONFIGURATION VARIABLES: EDIT AND UNCOMMENT THE SECTION BELOW TO INSERT DYNAMIC VALUES FROM YOUR PLATFORM OR CMS.
        *  LEARN WHY DEFINING THESE VARIABLES IS IMPORTANT: https://disqus.com/admin/universalcode/#configuration-variables    */
        /*
        var disqus_config = function () {
        this.page.url = PAGE_URL;  // Replace PAGE_URL with your page's canonical URL variable
        this.page.identifier = PAGE_IDENTIFIER; // Replace PAGE_IDENTIFIER with your page's unique identifier variable
        };
        */
        (function() { // DON'T EDIT BELOW THIS LINE
        var d = document, s = d.createElement('script');
        s.src = 'https://penerbitmanggu-co-id.disqus.com/embed.js';
        s.setAttribute('data-timestamp', +new Date());
        (d.head || d.body).appendChild(s);
        })();
    </script>
    
<noscript>Please enable JavaScript to view the <a href="https://disqus.com/?ref_noscript">comments powered by Disqus.</a></noscript>


<!-- End of HubSpot Embed Code -->
</body>

</html>