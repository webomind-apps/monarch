@extends('admin.layout.master')

@section('page-contents')
    <div>
        <a class="btn btn-danger btn-sm" href="{{ route('admin.blogs.create') }}">
            Add
        </a>
    </div>

    <div class="row text-right">
        <div class="col-md-8"></div>
        <div class="col-md-4">
            <select name="blog_category" id="blog_category" class="form-control">
                <option value="" name="blog_category">Select Category</option>
                @foreach ($blog_categories as $blog_category)
                    <option value="{{ $blog_category->id }}" id="{{ $blog_category->id }}"
                        {{ request('blog_category') == $blog_category->id ? 'selected' : '' }}>
                        {{ $blog_category->blog_category }} </option>
                @endforeach
            </select>
        </div>
    </div>

    <div class="table-detail">
        <table class="table table-hover">
            <thead>
                <tr>
                    <th scope="col">#</th>
                    <th scope="col">Title</th>
                    <th scope="col">Banner</th>
                    <th scope="col">Date</th>
                    <th scope="col">Action</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($blogs as $index => $blog)
                    <tr>
                        <th scope="row">{{ $blogs->firstItem() + $index }}</th>
                        <td>{{ $blog->title }}</td>
                        <td><img src="{{ asset("storage/$blog->banner") }}" alt="banner"></td>
                        <td>{{ date('M d , Y', strtotime($blog->date)) }}</td>
                        <td>
                            <a href="{{ route('admin.blogs.edit', $blog->id) }}">
                                <i class="fas fa-edit"></i>
                            </a>
                            <a class="deleteRecord" data-id="form-submit-{{ $blog->id }}"
                                data-route="{{ route('admin.blogs.destroy', $blog->id) }}">
                                <i class="fas fa-trash" style="color:rgb(255, 23, 23)"></i>
                            </a>
                            <form method="POST" id="form-submit-{{ $blog->id }}"
                                action="{{ route('admin.blogs.destroy', $blog->id) }}" hidden>
                                @method('DELETE')
                                @csrf
                                <button type="submit"><i class="fas fa-trash"></i></button>
                            </form>
                        </td>
                    </tr>
                @endforeach

                @if (session()->has('message'))
                    <div class="alert alert-success">
                        {{ session()->get('message') }}
                    </div>
                @endif
            </tbody>

        </table>
        {{ $blogs->links('pagination::bootstrap-4') }}
    </div>
@endsection

@push('scripts')
    <script>
        $('.deleteRecord').on('click', function() {
            var id = $(this).data('id');
            if (confirm('Are you sure you want to delete this?')) {
                $('#' + id + '').submit();
            }
        })
        $(document).ready(function() {
            $(".alert").fadeTo(2000, 500).slideUp(500, function() {
                $(".alert").slideUp(400);
            });
        })

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
