@extends('admin.layout.master')

@section('page-contents')
    <div>
        <a class="btn btn-danger btn-sm" href="{{ route('admin.blogs.create') }}">
            Add
        </a>
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
    <script src="https://gitcdn.github.io/bootstrap-toggle/2.2.2/js/bootstrap-toggle.min.js"></script>
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
    </script>
@endpush
