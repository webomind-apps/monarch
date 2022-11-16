@extends('frontend.layout.master')
@section('page-contents')
    <section class="blog-section py-5">
        <div class="container">
            <div class="row g-4">

                @foreach ($blogs as $blog)
                    <div class="card col-lg-4 col-md-6 col-sm-12">
                        <a href="{{ route('blog_detail', $blog->slug) }}">
                            <div class="card-banner">
                                <p class="category-tag popular">{{ date('M d , Y', strtotime($blog->date)) }}</p>
                                {{-- <img src="assets/image/blog/blog1.jpg" class="banner-img" alt=""> --}}
                                <img src={{ asset("storage/$blog->image") }} class="banner-img" alt="">
                            </div>
                            <div class="card-body">
                                <h2>{{ $blog->title }}</h2>
                                {!! $blog->short_desription !!}
                                <a href="{{ route('blog_detail', $blog->slug) }}" class="blog-btn">Read More</a>
                            </div>
                        </a>
                    </div>
                @endforeach
                <div class="col-lg-12 d-flex justify-content-center mt-5">
                    {{ $blogs->links('pagination::bootstrap-4') }}
                </div>
            </div>
        </div>
    </section>

@endsection
