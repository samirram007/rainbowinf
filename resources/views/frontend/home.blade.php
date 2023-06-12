@extends('frontend.template.master')

@section('content')
<!-- ***** Main Banner Area Start ***** -->

<div id="main" class="scroll-container ">
    <section class="section main-banner" id="section1" data-section="section1">
        <video autoplay muted loop id="bg-video">
            <source src="{{ asset('frontend/assets/images/bg.mp4') }}" type="video/mp4" />
        </video>

        <div class="video-overlay header-text">
            <div class="caption">
                {{-- <h6>Executive Summary</h6> --}}
                <h2><em>Trade where we Trade </em>
                    <h4 class="text-white font-weight-bold" style="text-shadow: 1px 3px 5px #0d173e;">Founded in the year 2005-2006</h4>
                </h2>
                <div class="main-button my-5">
                    <div class="scroll-to-section"><a href="#section2">Discover more</a></div>
                </div>
            </div>
        </div>
    </section>
    <!-- ***** Main Banner Area End ***** -->


    <div class="features">
        <div class="container-fluid">
            <div class="row">
                <div class="col-sm-6 col-lg-2   px-1">
                    <div class="features-post third-features">
                        <div class="features-content">
                            <div class="content-show">
                                <h4><i class="fa fa-book"></i>Industrial</h4>
                            </div>
                            <div class="content-hide">
                                <div class="rbn-image">
                                    <img src="{{ asset('frontend/assets/images/rbw_img/industrial.jpeg') }}" alt="industrial">
                                    <div class="scroll-to-section">
                                        <!--a href="{{ route('industrial') }}"--><button type="button"
                                            class="btn  btn-link text-light"
                                            onclick="location.href = '{{ url(route('industrial')) }}'">Read More
                                        </button></a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-sm-6 col-lg-2   px-1">
                    <div class="features-post third-features">
                        <div class="features-content">
                            <div class="content-show">
                                <h4><i class="fa fa-book"></i>Structural</h4>
                            </div>
                            <div class="content-hide">
                                <div class="rbn-image">
                                    <img src="{{ asset('frontend/assets/images/rbw_img/structural.jpeg') }}" alt="structural">
                                    <div class="scroll-to-section">
                                        <!--a href="{{route('structural_project')}}"-->
                                        <button type="button" class="btn btn-link text-light"
                                            onclick="location.href = '{{ url(route('structural_project')) }}'">Read
                                            More
                                        </button></a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-sm-6 col-lg-2   px-1">
                    <div class="features-post second-features">
                        <div class="features-content">
                            <div class="content-show">
                                <h4><i class="fa fa-graduation-cap"></i>Electrical</h4>
                            </div>
                            <div class="content-hide">
                                <div class="rbn-image">
                                    <img src="{{ asset('frontend/assets/images/electrical_tab.jpg') }}" alt="electrical">
                                    <div class="scroll-to-section">
                                        <!--a href="{{route('electrical_project')}}"--><button type="button"
                                            class=" btn btn-link text-light"
                                            onclick="location.href = '{{ url(route('electrical_project')) }}'">Read More
                                        </button></a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-sm-6 col-lg-2   px-1">
                    <div class="features-post third-features">
                        <div class="features-content">
                            <div class="content-show">
                                <h4><i class="fa fa-book"></i>Building</h4>
                            </div>
                            <div class="content-hide">
                                <div class="rbn-image">
                                    <img src="{{ asset('frontend/assets/images/rbw_img/building.jpg') }}" alt="building">
                                    <div class="scroll-to-section">
                                        <!--a href="{{route('building')}}">Read More</a-->
                                        <button type="button" class="btn  btn-link text-light"
                                            onclick="location.href = '{{ url(route('building')) }}'">Read More
                                        </button>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="col-sm-6 col-lg-2  px-0">
                    <div class="features-post">
                        <div class="features-content">
                            <div class="content-show">
                                <h4><i class="fa fa-pencil"></i>Architectural</h4>
                            </div>
                            <div class="content-hide">
                                <div class="rbn-image">
                                    <img src="{{ asset('frontend/assets/images/rbw_img/civil.jpg') }}" alt="civil">
                                    <div class="scroll-to-section">
                                        <!--a href="{{route('civil_executive')}}" -->
                                        <button type="button" class=" btn btn-link text-light"
                                            onclick="location.href = '{{ url(route('architectural')) }}'">Read More
                                        </button></a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-sm-6 col-lg-2   px-1">
                    <div class="features-post">
                        <div class="features-content">
                            <div class="content-show">
                                <h4><i class="fa fa-pencil"></i>Consultancy</h4>
                            </div>
                            <div class="content-hide">
                                <div class="rbn-image">
                                    <img src="{{ asset('frontend/assets/images/consultant.png') }}" alt="civil">
                                    <div class="scroll-to-section">
                                        <!--a href="{{route('civil_executive')}}" -->
                                        <button type="button" class="btn btn-link text-light"
                                            onclick="location.href = '{{ url(route('civil_executive')) }}'">Read More
                                        </button></a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>





            </div>
        </div>
    </div>

    @include('frontend.business')




    <section class="section cmd container-fluid" data-section="cmd" id="cmd">

            <div class="container caption">
                <div class=" head1 strong mx-auto mb-4" style="padding-top: 30px; ">
                    <div class="blockquote text-center">
                     <h3>Message From CMD</h3>
                            <hr class="bg-light col-md-8 ">

                    </div>
                </div>
                <div class="col-md-12  text-center mt-4 ">

                    {{-- <iframe class="col-md-9 rounded bg-dark border  border-4 border-primary" height="375" 
                        src="https://www.youtube.com/watch?v=gVjc6xHLqmI"
                        title="YouTube video player" frameborder="0"
                        allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture"
                        allowfullscreen></iframe> --}}

                        <iframe  class="col-md-7 rounded " height="360" src="https://www.youtube.com/embed/gVjc6xHLqmI" 
                        title="YouTube video player" frameborder="0" 
                        allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" 
                        allowfullscreen></iframe>

                </div>
            </div>

    </section>
    @include('frontend.management_team.quick')
    @include('frontend.mission')
    @include('frontend.gallery.quick')
    @include('frontend.newsroom')

    <section class="section contact " data-section="section6" id="contact">
        
           <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="section-heading text-light">
                        <h2>Let’s Keep In Touch</h2>
                    </div>
                </div>
                <div class="col-md-6">

                    <!-- Do you need a working HTML contact-form script?

                  Please visit https://templatemo.com/contact page -->

                    <form id="contact" action="{{ route('send.email')}}" method="POST">
                        @csrf
                        <div class="row">
                            <div class="col-md-6">
                                <fieldset>
                                    <input name="name" type="text" class="form-control" id="name"
                                        placeholder="Your Name" required="">
                                </fieldset>
                            </div>
                            <div class="col-md-6">
                                <fieldset>
                                    <input name="email" type="text" class="form-control" id="email"
                                        placeholder="Your Email" required="">
                                </fieldset>
                            </div>
                            <input name="subject" type="hidden" class="form-control" id="subject"
                                        value="contact us" >
                            <div class="col-md-12">
                                <fieldset>
                                    <textarea name="message" rows="6" class="form-control" id="message"
                                        placeholder="Your message..." required=""></textarea>
                                </fieldset>
                            </div>
                            <div class="col-md-12">
                                <fieldset>
                                    <button type="submit" id="form-submit" class="button">Send Message Now</button>
                                </fieldset>
                            </div>
                        </div>
                    </form>
                </div>
                <div class="col-md-6">
                    <div id="map">
                        <!--iframe src="https://maps.google.com/maps?q=Av.+L%C3%BAcio+Costa,+Rio+de+Janeiro+-+RJ,+Brazil&t=&z=13&ie=UTF8&iwloc=&output=embed" width="100%" height="422px" frameborder="0" style="border:0" allowfullscreen></iframe-->
                        <iframe
                            src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3683.9825707994623!2d88.47782861540152!3d22.579755188397495!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3a027532a9e1b693%3A0x4f4a9306586abe3f!2sRainbow%20Infrastructure%20Pvt.%20Ltd.!5e0!3m2!1sen!2sus!4v1637198194840!5m2!1sen!2sus"
                            width="100%" height="422px" style="border:0;" allowfullscreen="" loading="lazy"></iframe>
                    </div>
                </div>
            </div>
        </div>  
        
       
    </section>


</div>


@endsection
