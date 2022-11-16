@extends('admin.layout.master')

@section('page-contents')
    <div class="d-sm-flex align-items-center justify-content-between mb-4">
        <h1 class="h3 mb-0 text-gray-800">Add Services</h1>
        {{-- <a href="#" class="d-none d-sm-inline-block btn btn-sm btn-primary shadow-sm"><i
                        class="fas fa-download fa-sm text-white-50"></i> Generate Report</a> --}}
    </div>
    <div>
        <div class="row">
            <div class="col-lg-10 mx-auto">
                <form method="POST" action="{{ route('admin.services.store') }}" enctype="multipart/form-data">
                    @method('POST')
                    @csrf
                    <div class="form-group">
                        <div class="form-group">
                            <label for="Title">Title<span style="color: red">*</span></label>
                            <input type="text" class="form-control slug" id="title" name="title" placeholder="Title">
                            @error('title')
                                <span class="error">{{ $message }}</span>
                            @enderror
                        </div>
                        <div class="form-group">
                            <label for="Slug">Slug<span style="color: red">*</span></label>
                            <input type="text" class="form-control" id="slug" name="slug"
                                placeholder="Slug" value="{{ old('slug') }}" readonly>
                        </div>
                        <div class="form-group">
                            <label for="Icon">Icon<span style="color: red">*</span></label>
                            <input type="file" class="form-control" id="icon" name="icon" placeholder="Icon">
                            @error('icon')
                                <span class="error">{{ $message }}</span>
                            @enderror
                        </div>

                        <div class="form-group">
                            <label for="Title">Banner<span style="color: red">*</span></label>
                            <input type="file" class="form-control" id="banner" name="banner" placeholder="Banner">
                            @error('banner')
                                <span class="error">{{ $message }}</span>
                            @enderror
                        </div>

                        <div class="form-group">
                            <label for="Image">Image<span style="color: red">*</span></label>
                            <input type="file" class="form-control" id="image" name="image" placeholder="Image"
                                multiple>
                            @error('image')
                                <span class="error">{{ $message }}</span>
                            @enderror
                        </div>

                        {{-- <div class="form-group">
                            <label for="Url">URL<span style="color: red">*</span></label>
                            <input class="form-control" id="url" name="url" placeholder="URL" />
                            @error('url')
                                <span class="error">{{ $message }}</span>
                            @enderror
                        </div> --}}
                        <div class="form-group">
                            <label for="Title">Short Description<span style="color: red">*</span></label>
                            <textarea class="form-control" id="description" name="description" placeholder="Description"></textarea>
                            @error('description')
                                <span class="error">{{ $message }}</span>
                            @enderror
                        </div>
                        <div class="form-group">
                            <label for="Title">Long Description</label>
                            <textarea class="form-control" id="long_description" name="long_description" placeholder="Description"></textarea>
                            @error('long_description')
                                <span class="error">{{ $message }}</span>
                            @enderror
                        </div>
                        <div class="form-group">
                            <label for="For home page">For home page &nbsp;</label>
                            <input type="checkbox" id="in_homepage" name="in_homepage" value="1">
                            @error('in_homepage')
                                <span class="error">{{ $message }}</span>
                            @enderror
                        </div>
                    </div>
                    <button type="submit" class="btn btn-danger btn-sm">Submit</button>
                </form>
            </div>
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