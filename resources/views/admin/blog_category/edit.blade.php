@extends('admin.layout.master')

@section('page-contents')
    <div class="d-sm-flex align-items-center justify-content-between mb-4">
        <h1 class="h3 mb-0 text-gray-800">Add Blogs</h1>
        {{-- <a href="#" class="d-none d-sm-inline-block btn btn-sm btn-primary shadow-sm"><i
                            class="fas fa-download fa-sm text-white-50"></i> Generate Report</a> --}}
    </div>
    <div class="row">
        <div class="col-lg-10 mx-auto">
            <form method="POST" action="{{ route('admin.blog-category.update', $blog->id) }}" enctype="multipart/form-data">
                @method('PATCH')
                @csrf
                <div class="form-group">
                    <label for="TitleName">Title<span style="color: red">*</span></label>
                    <input type="text" class="form-control slug" id="title" name="title" placeholder="Title"
                        value="{{ $blog->blog_category }}">
                    @error('title')
                        <span class="error">{{ $message }}</span>
                    @enderror
                </div>
                <button type="submit" class="btn btn-danger btn-sm">Submit</button>
            </form>
        </div>
    </div>
@endsection
