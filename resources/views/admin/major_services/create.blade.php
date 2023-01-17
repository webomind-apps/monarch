@extends('admin.layout.master')
@section('page-contents')
    <div class="d-sm-flex align-items-center justify-content-between mb-4">
        <h1 class="h3 mb-0 text-gray-800">Add Major Services</h1>
        {{-- <a href="#" class="d-none d-sm-inline-block btn btn-sm btn-primary shadow-sm"><i
                        class="fas fa-download fa-sm text-white-50"></i> Generate Report</a> --}}
    </div>
    <div>
        <div class="row">
            <div class="col-lg-10 mx-auto">
                <form method="POST" action="{{ route('admin.major-services.store') }}" enctype="multipart/form-data">
                    @method('POST')
                    @csrf
                    <div class="form-group">
                        <div class="form-group">
                            <label for="Title">Title<span style="color: red">*</span></label>
                            <input type="text" class="form-control slug" id="title" name="title"
                                placeholder="Title" value="{{ old('title') }}">
                            @error('title')
                                <span class="error">{{ $message }}</span>
                            @enderror
                        </div>
                        <div class="form-group">
                            <label for="Slug">Slug<span style="color: red">*</span></label>
                            <input type="text" class="form-control" id="slug" name="slug" placeholder="Slug"
                                value="{{ old('slug') }}" readonly>
                        </div>
                        <div class="form-group">
                            <label for="Icon">Icon<span style="color: red">*</span></label>
                            <input type="file" class="form-control" id="icon" name="icon" placeholder="Icon">
                            @error('icon')
                                <span class="error">{{ $message }}</span>
                            @enderror
                        </div>
                        <div class="form-group">
                            <label for="Banner">Banner<span style="color: red">*</span></label>
                            <input type="file" class="form-control" id="banner" name="banner" placeholder="Banner">
                            @error('banner')
                                <span class="error">{{ $message }}</span>
                            @enderror
                        </div>
                        <div class="form-group">
                            <label for="Minor Services">Minor Services<span style="color: red">*</span></label></br>
                            @foreach ($services as $service)
                                <input type="checkbox" id="{{ $service->name }}" name="service_id[]"
                                    value="{{ $service->id }}">
                                <label for="{{ $service->name }}">{{ $service->name }}</label><br>
                            @endforeach
                        </div>
                        
                     
                        <div class="form-group">
                            <label for="Meta Description">Meta Title<span style="color: red">*</span></label>
                            <textarea class="form-control" rows="8" id="meta_title" name="meta_title"
                                placeholder="Meta Title">{{ old('meta_title') }}</textarea>
                            @error('meta_title')
                                <span class="error">{{ $message }}</span>
                            @enderror
                        </div>
                        <div class="form-group">
                            <label for="Meta Description">Meta Description<span style="color: red">*</span></label>
                            <textarea class="form-control" rows="8" id="meta_description" name="meta_description"
                                placeholder="Meta Description">{{ old('meta_desription') }}</textarea>
                            @error('meta_description')
                                <span class="error">{{ $message }}</span>
                            @enderror
                        </div>
                        <div class="form-group">
                            <div class="form-group">
                                <label for="Meta Keywords">Meta Keywords<span style="color: red">*</span></label>
                                <textarea class="form-control" rows="8" id="meta_keywords" name="meta_keywords" placeholder="Meta Keywords">{{ old('meta_keywords') }}</textarea>
                                @error('meta_keywords')
                                    <span class="error">{{ $message }}</span>
                                @enderror
                            </div>
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
