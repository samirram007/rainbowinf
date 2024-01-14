@extends('frontend.template.master')

@section('content')
<!-- ***** Main Banner Area Start ***** -->

<div id="main" class="scroll-container ">

    @include('frontend.landing.banner')
    <!-- ***** Main Banner Area End ***** -->

    @include('frontend.landing.features')


    @include('frontend.business')
    @include('frontend.landing.message_from_cmd')
    @include('frontend.landing.mission_vision')
    @include('frontend.management_team.quick')
    @include('frontend.landing.timeline')
    {{-- @include('frontend.mission') --}}
    @include('frontend.gallery.quick')
    @include('frontend.newsroom')
    @include('frontend.landing.clientele')
    @include('frontend.landing.contact')




</div>


@endsection
