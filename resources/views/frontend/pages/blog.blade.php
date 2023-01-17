@extends('frontend.layout.master')
@section('page-contents')
    <style>
        select {
            /* Reset Select */
            appearance: none;
            outline: 0;
            border: 0;
            box-shadow: none;
            /* Personalize */
            flex: 1;
            padding: 0 1em;
            color: #fff;
            background-color: #043d72;
            background-image: none;
            cursor: pointer;
            border-radius: .25em;
        }

        /* Remove IE arrow */
        select::-ms-expand {
            display: none;
        }

        /* Custom Select wrapper */
        .select {
            position: relative;
            display: flex;
            width: 20em;
            height: 3em;
            border-radius: .25em;
            overflow: hidden;
        }

        /* Arrow */
        .select::after {
            content: '\25BC';
            position: absolute;
            top: 0;
            right: 0;
            padding: 1em;
            color: #fff;
            background-color: #043d72;
            transition: .25s all ease;
            pointer-events: none;
        }

        /* Transition */
        .select:hover::after {
            color: #ffffff;
        }
    </style>
    <section class="blog-section py-5">
        <div class="container">
            <div class="row text-right">

                <div class="col-md-4 select mx-auto mb-5">
                    <select name="blog_category" id="blog_category">
                        <option value="" name="blog_category">Select Category</option>
                        @foreach ($blog_categories as $blog_category)
                            <option value="{{ $blog_category->id }}" id="{{ $blog_category->id }}"
                                {{ request('blog_category') == $blog_category->id ? 'selected' : '' }}>
                                {{ $blog_category->blog_category }} </option>
                        @endforeach
                    </select>
                </div>

            </div>
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
@push('scripts')
    <script>
        $('#blog_category').on('change', function() {
            var val = $(this).val();
            var route = "{{ url()->current() }}";
            var newRoute = updateQueryStringParameter(window.location.href, 'blogs', val);
            window.location.href = newRoute;
        })

        function updateQueryStringParameter(uri, key, value) {
            var re = new RegExp("([?&])" + key + "=.*?(&|$)", "i");
            var separator = uri.indexOf('?') !== -1 ? "&" : "?";
            if (uri.match(re)) {
                return uri.replace(re, '$1' + key + "=" + value + '$2');
            } else {
                return uri + separator + key + "=" + value;
            }
        }
    </script>
@endpush
