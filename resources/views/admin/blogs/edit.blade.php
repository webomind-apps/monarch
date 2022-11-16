@extends('admin.layout.master')

@section('page-contents')
    <div class="d-sm-flex align-items-center justify-content-between mb-4">
        <h1 class="h3 mb-0 text-gray-800">Add location</h1>
        {{-- <a href="#" class="d-none d-sm-inline-block btn btn-sm btn-primary shadow-sm"><i
                            class="fas fa-download fa-sm text-white-50"></i> Generate Report</a> --}}
    </div>
    <div class="row">
        <div class="col-lg-10 mx-auto">
            <form method="POST" action="{{ route('admin.blogs.update', $blog->id) }}" enctype="multipart/form-data">
                @method('PATCH')
                @csrf
                <div class="form-group">
                    <label for="TitleName">Title<span style="color: red">*</span></label>
                    <input type="text" class="form-control slug" id="title" name="title"
                        placeholder="Title" value="{{ $blog->title }}">
                  
                </div>
                <div class="form-group">
                    <label for="Slug">Slug<span style="color: red">*</span></label>
                    <input type="text" class="form-control" id="slug" name="slug"
                        placeholder="Slug" value="{{ $blog->slug }}" readonly>
                </div>
                <div class="form-group">
                    <label for="Image">Image<span style="color: red">*</span></label>
                    <input type="file" class="form-control" id="image" name="image" placeholder="Image">   
                </div>
                <div class="form-group">
                    <div class="image-section">
                        <div class="image">
                            <img src="{{ asset("storage/$blog->image") }}" height="100px">
                        </div>
                    </div>
                </div>
                <div class="form-group">
                    <label for="Banner">Banner<span style="color: red">*</span></label>
                    <input type="file" class="form-control" id="banner" name="banner" placeholder="Banner">  
                </div>
                <div class="form-group">
                    <div class="image-section">
                        <div class="image">
                            <img src="{{ asset("storage/$blog->banner") }}" height="100px">
                        </div>
                    </div>
                </div>
                <div class="form-group">
                    <label for="Date">Date<span style="color: red">*</span></label>
                    <input type="date" class="form-control" id="date" name="date" placeholder="Date" value="{{$blog->date}}">  
                </div>
                <div class="form-group">
                    <label for="Short Description">Short Description<span style="color: red">*</span></label>
                    <input type="text" class="form-control" id="short_description" name="short_description" placeholder="Short Description" value="{{ $blog->short_desription}}">    
                </div>
                <div class="form-group">
                    <label for="Long Description">Long Description<span style="color: red">*</span></label>
                    <input type="text" class="form-control" id="short_description" name="long_description" placeholder="Long Description" value="{{ $blog->long_desription}}">
                </div>
                <button type="submit" class="btn btn-danger btn-sm">Submit</button>
            </form>
        </div>
    </div>
@endsection
@push('scripts')
    <script>
        $('.slug').on('change', function() {
            var val = $(this).val();
            var slug = val.replace(/\s+/g, "-");
            $('#slug').val(slug.toLowerCase());
        });
    </script>
@endpush