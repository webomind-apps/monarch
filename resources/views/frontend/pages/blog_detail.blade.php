@extends('frontend.layout.master')

@section('title')
    <title>{{ $blogs->meta_title }}</title>
@endsection
@section('meta_description')
    <meta name="meta_description" content="{{ $blogs->meta_description }}">
@endsection
@section('meta_keywords')
    <meta name="meta_keywords" content="{{ $blogs->meta_keywords }}">
@endsection

@section('page-contents')
    <section class="blog-detail-section">
        <div class="container-fluid px-0">
            <div class="blog-banner" style="background-image: url(' {{ asset("storage/$blogs->banner") }}');">
                <img src={{ asset("storage/$blogs->banner") }} class="single-post" alt="">
            </div>
        </div>
        <div class="container">
            <div class="row">
                <div class="col-md-11 py-5 mx-auto">
                    <h2>{{ $blogs->title }}</h2>
                    <h6>{{ date('M d , Y', strtotime($blogs->date)) }}</h6>
                    {!! $blogs->long_desription !!}
                </div>
            </div>
        </div>
    </section>
    
@endsection
