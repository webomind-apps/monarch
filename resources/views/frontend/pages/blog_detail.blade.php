@extends('frontend.layout.master')
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
