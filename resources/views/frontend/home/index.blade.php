@extends('frontend.layouts.master')
@section('content')
<!--=============================
        BANNER START
    ==============================-->
    @include('frontend.home.components.banner')
    <!--=============================
        BANNER END
    ==============================-->


    <!--=============================
        WHY CHOOSE START
    ==============================-->
    @include('frontend.home.components.choose')
    <!--=============================
        WHY CHOOSE END
    ==============================-->


    <!--=============================
        OFFER ITEM START
    ==============================-->
    @include('frontend.home.components.offer')
    <!--=============================
        OFFER ITEM END
    ==============================-->


    <!--=============================
        MENU ITEM START
    ==============================-->
    @include('frontend.home.components.menu_item')
    <!--=============================
        MENU ITEM END
    ==============================-->


    <!--=============================
        ADD SLIDER START
    ==============================-->
    @include('frontend.home.components.slider')
    <!--=============================
        ADD SLIDER END
    ==============================-->


    <!--=============================
        TEAM START
    ==============================-->
    @include('frontend.home.components.team')
    <!--=============================
        TEAM END
    ==============================-->


    <!--=============================
        DOWNLOAD APP START
    ==============================-->
    @include('frontend.home.components.download')
    <!--=============================
        DOWNLOAD APP END
    ==============================-->


    <!--=============================
       TESTIMONIAL  START
    ==============================-->
    @include('frontend.home.components.testimonial')
    <!--=============================
        TESTIMONIAL END
    ==============================-->


    <!--=============================
        COUNTER START
    ==============================-->
    @include('frontend.home.components.counter')
    <!--=============================
        COUNTER END
    ==============================-->


    <!--=============================
        BLOG 2 START
    ==============================-->
    @include('frontend.home.components.bloge')
    <!--=============================
        BLOG 2 END
    ==============================-->
@endsection