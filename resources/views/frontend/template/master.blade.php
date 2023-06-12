<!DOCTYPE html>
<html lang="en">

<head>
    <link rel="shortcut icon" type="image/png" href="{{ asset('frontend/assets/images/logo.png') }}">
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">
    <link href="https://fonts.googleapis.com/css?family=Montserrat:100,200,300,400,500,600,700,800,900"
        rel="stylesheet">

    <title>Rainbow Infrastructure Pvt. Ltd.</title>

    <!-- Bootstrap core CSS -->
    {{-- <link href="{{ asset('assets/vendor_components/bootstrap/css/bootstrap.min.css') }}" rel="stylesheet"> --}}
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/css/bootstrap.min.css"
        crossorigin="anonymous">
    <!-- Additional CSS Files -->
    <link rel="stylesheet" href="{{ asset('frontend/assets/css/fontawesome.css') }}">
    <link rel="stylesheet" href="{{ asset('frontend/assets/css/template.css') }}">
    <link rel="stylesheet" href="{{ asset('frontend/assets/css/owl.css') }}">
    <link rel="stylesheet" href="{{ asset('frontend/assets/css/lightbox.css') }}">
    <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">
    {{-- <link  rel="stylesheet"   href="{{ asset('frontend/assets/css/full-page-scroll.css') }}" > --}}
    <style>
        .bg-dots-light{
            background-image: url({{ asset('frontend/assets/images/dotted-bg-dark.png') }});

        }
    </style>
</head>

<body class="bg-dots-light">

    <div class="page-wrapper chiller-theme ">
        <!--header-->
        <header class="main-header clearfix" role="header">
            <a id="show-sidebar" class="menu-link" href="#">
                <i class="fa fa-bars"></i>
            </a>
            <div class="logo">
                <a href="/"><em>RAINBOW</em>
                    <div>Infrastructure Pvt. Ltd.</div>

                </a>
            </div>

            <img id="company-logo" class="mx-2 my-2 pull-right" src="{{ asset('frontend/assets/images/logo.png') }}"
                alt="">
            <div class="flex items-right min-h-screen bg-gray-100 dark:bg-gray-900 sm:items-right py-2 sm:pt-0"
                style="text-align:right">
                @if (Route::has('login'))
                    <div class="hidden fixed top-0 right-0 px-6 py-4 sm:block">
                        @auth
                            <a href="{{ route('dashboard') }}" class="text-lg text-gray-700 dark:text-gray-500 underline"><i
                                    class="fa fa-user fa-lg"></i></a>
                        @else
                            <a href="{{ route('login') }}" class="text-sm text-gray-700 dark:text-gray-500 underline"><i
                                    class="fa fa-sign-in fa-lg"></i></a>


                        @endauth
                    </div>
                @endif
            </div>
            @include('frontend.template.menu')


            @include('frontend.template.newsHeadline')


        </header>
        @include('frontend.template.social')

        @yield('content')

        @include('frontend.template.footer')

        <div class="modal fade" id="exampleModalCenter" tabindex="-1" role="dialog"
            aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
            <div class="modal-dialog modal-dialog-centered modal-lg" role="document">
                <div class="modal-content">
                    <div class="modal-header  bg-primary">
                        {{-- <h5 class="modal-title" id="exampleModalLongTitle"></h5> --}}
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                    <div class="modal-body mx-auto bg-secondary">
                        <img id="ModalImage" style="max-width:100%;" src="" alt="image content here.">

                    </div>
                    <div class="modal-footer bg-primary">
                        <button type="button" class="btn btn-light" data-dismiss="modal">Close</button>
                        <!-- <button type="button" class="btn btn-primary">Save changes</button> -->
                    </div>
                </div>
            </div>
        </div>
        <!-- Scripts -->
        <!-- Bootstrap core JavaScript -->
        {{-- <script src="{{ asset('assets/vendor_components/jquery-3.3.1/jquery-3.3.1.min.js') }}"></script> --}}
        <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js" crossorigin="anonymous"
            referrerpolicy="no-referrer"></script>
        {{-- <script src="{{ asset('assets/vendor_components/bootstrap/dist/js/bootstrap.bundle.min.js') }}"></script> --}}
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/js/bootstrap.bundle.min.js" crossorigin="anonymous">
        </script>
        <script src="{{ asset('frontend/assets/js/isotope.min.js') }}"></script>
        <script src="{{ asset('frontend/assets/js/owl-carousel.js') }}"></script>
        <script src="{{ asset('frontend/assets/js/lightbox.js') }}"></script>
        <script src="{{ asset('frontend/assets/js/tabs.js') }}"></script>
        <script src="{{ asset('frontend/assets/js/video.js') }}"></script>
        <script src="{{ asset('frontend/assets/js/slick-slider.js') }}"></script>
        <script src="{{ asset('frontend/assets/js/custom.js') }}"></script>
        {{-- <script src="{{ asset('assets/js/full-page-scroll.js') }}"></script> --}}
        {{-- <script type="text/javascript">
        new fullScroll({
          mainElement: "main",
          displayDots: true,
          dotsPosition: "right",
          animateTime: 0.1,
          animateFunction: "ease-in",
        });
      </script> --}}

        <script>
            jQuery(function($) {
                window.scrollTo({
                    top: 0,
                    behavior: 'smooth'
                });
                $(".sidebar-dropdown > a").click(function() {
                    $(".sidebar-submenu").slideUp(200);
                    if ($(this)
                        .parent()
                        .hasClass("active")
                    ) {
                        $(".sidebar-dropdown").removeClass("active");
                        $(this)
                            .parent()
                            .removeClass("active");
                    } else {
                        $(".sidebar-dropdown").removeClass("active");
                        $(this)
                            .next(".sidebar-submenu")
                            .slideDown(200);
                        $(this)
                            .parent()
                            .addClass("active");
                    }
                });

                $("#close-sidebar").click(function() {
                    $(".page-wrapper").removeClass("toggled");
                });
                $("#show-sidebar").click(function() {
                    $(".page-wrapper").addClass("toggled");
                });




            });


            //according to loftblog tut
            $('.nav li:first').addClass('active');

            var showSection = function showSection(section, isAnimate) {
                var
                    direction = section.replace(/#/, ''),
                    reqSection = $('.section').filter('[data-section="' + direction + '"]'),
                    reqSectionPos = reqSection.offset().top - 0;

                if (isAnimate) {
                    $('body, html').animate({
                            scrollTop: reqSectionPos
                        },
                        800);
                } else {
                    $('body, html').scrollTop(reqSectionPos);
                }

            };

            var checkSection = function checkSection() {
                $('.section').each(function() {
                    var
                        $this = $(this),
                        topEdge = $this.offset().top - 80,
                        bottomEdge = topEdge + $this.height(),
                        wScroll = $(window).scrollTop();
                    if (topEdge < wScroll && bottomEdge > wScroll) {
                        var
                            currentId = $this.data('section'),
                            reqLink = $('a').filter('[href*=\\#' + currentId + ']');
                        reqLink.closest('li').addClass('active').
                        siblings().removeClass('active');
                    }
                });
            };

            $('.main-menu, .scroll-to-section').on('click', 'a', function(e) {
                if ($(e.target).hasClass('external')) {
                    return;
                }
                e.preventDefault();
                $('#menu').removeClass('active');
                showSection($(this).attr('href'), true);
            });

            $(window).scroll(function() {
                checkSection();
            });
        </script>
        <script>
            $(document).ready(function() {
                $("img").click(function(e) {

                    var thisImgKey = $(this).attr('data-key');
                    var all = $.parseJSON($(this).attr('data-all'));

                    var url = "{{ asset('upload/gallery_images') }}";
                    // console.log(url);
                    var imgsrc = all[thisImgKey].image;
                    url = url + '/' + imgsrc;

                    $("#ModalImage").attr('src', url);
                    // $("#ModalImage").attr('data-key', thisImgKey);

                    $("#previous").attr('data-key', thisImgKey - 1);
                    $("#previous").attr('data-all', $(this).attr('data-all'));
                    $("#next").attr('data-key', parseInt(thisImgKey) + 1);
                    $("#next").attr('data-all', $(this).attr('data-all'));
                    if (thisImgKey == 0) {
                        if($("#previous").hasClass('active')){
                            $("#previous").removeClass('active');
                        }
                       // $("#previous").hide();
                    } else {
                        if(!$("#previous").hasClass('active')){
                            $("#previous").addClass('active');
                        }
                    }
                    if (thisImgKey == all.length - 1) {
                        if($("#next").hasClass('active')){
                            $("#next").removeClass('active');
                        }
                    } else {
                        if(!$("#next").hasClass('active')){
                            $("#next").addClass('active');
                        }
                    }
                    $("#imageModalCenter").show();
                });
                $("#previous").click(function(e) {
                    var thisImgKey = $(this).attr('data-key');
                    var all = $.parseJSON($(this).attr('data-all'));
                    var imgsrc = all[thisImgKey].image;
                    var url = "{{ asset('upload/gallery_images') }}";

                    var imgsrc = all[thisImgKey].image;
                    url = url + '/' + imgsrc;

                    $("#ModalImage").attr('src', url);
                    $("#previous").attr('data-key', thisImgKey - 1);
                    $("#next").attr('data-key', parseInt(thisImgKey) + 1);
                    $("#previous").addClass('feedback');
                    if($("#ModalImage").hasClass('from_right')){
                        $("#ModalImage").removeClass('from_right');
                    } 
                    $("#ModalImage").addClass('from_right');
                    setTimeout(() => {
                        $("#previous").removeClass('feedback');
                        $("#ModalImage").removeClass('from_right');
                    }, 500);
                    if (thisImgKey == 0) {
                        if($("#previous").hasClass('active')){
                            $("#previous").removeClass('active');
                        }
                    } else {
                        if(!$("#previous").hasClass('active')){
                            $("#previous").addClass('active');
                        }
                    }
                    if (thisImgKey == all.length - 1) {
                        if($("#next").hasClass('active')){
                            $("#next").removeClass('active');
                        }
                    } else {
                        if(!$("#next").hasClass('active')){
                            $("#next").addClass('active');
                        }
                    }
                });
                $("#next").click(function(e) {
                    var thisImgKey = $(this).attr('data-key');
                    var all = $.parseJSON($(this).attr('data-all'));
                    var imgsrc = all[thisImgKey].image;
                    var url = "{{ asset('upload/gallery_images') }}";

                    var imgsrc = all[thisImgKey].image;
                    url = url + '/' + imgsrc;

                    $("#ModalImage").attr('src', url);
                    $("#previous").attr('data-key', thisImgKey - 1);
                    $("#next").attr('data-key', parseInt(thisImgKey) + 1);
                    $("#next").addClass('feedback');
                    if($("#ModalImage").hasClass('from_left')){
                        $("#ModalImage").removeClass('from_left');
                    } 
                    $("#ModalImage").addClass('from_left');
                    
                    setTimeout(() => {
                        $("#next").removeClass('feedback');
                        $("#ModalImage").removeClass('from_left');
                    }, 500);
                    if (thisImgKey == 0) {
                        if($("#previous").hasClass('active')){
                            $("#previous").removeClass('active');
                        }
                    } else {
                        if(!$("#previous").hasClass('active')){
                            $("#previous").addClass('active');
                        }
                    }
                    if (thisImgKey == all.length - 1) {
                        if($("#next").hasClass('active')){
                            $("#next").removeClass('active');
                        }
                    } else {
                        if(!$("#next").hasClass('active')){
                            $("#next").addClass('active');
                        }
                    }
                });
            });
        </script>
        <script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>
        <script>
            AOS.init();
        </script>
</body>

</html>
