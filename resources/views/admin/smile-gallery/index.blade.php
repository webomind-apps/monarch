@extends('admin.layout.master')


@section('page-contents')
    <div class="d-sm-flex align-items-center justify-content-between mb-4">
        <h1 class="h3 mb-0 text-gray-800">Add Smile Gallery Images</h1>
        {{-- <a href="#" class="d-none d-sm-inline-block btn btn-sm btn-primary shadow-sm"><i
                            class="fas fa-download fa-sm text-white-50"></i> Generate Report</a> --}}
    </div>
    <div class="row">
        <div class="col-lg-10 mx-auto">
            <form method="POST"
                action=@if ($details) {{ route('admin.smile-gallery.update', $details->id) }} @else {{ route('admin.smile-gallery.store') }} @endif
                enctype="multipart/form-data">
                @if ($details)
                    @method('PATCH')
                @endif
                @csrf
                <div class="form-group">
                    <label for="Title">Title<span style="color: red">*</span></label>
                    <input type="text" class="form-control" id="title" name="title" placeholder="Title"
                        value="{{ $details ? $details->title : '' }}">
                    @error('title')
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
                @if ($details)
                    <div class="form-group">
                        <div class="image-section">
                            <div class="image"> <img src="{{ asset("storage/$details->banner") }}" height="50px">
                            </div>
                        </div>
                    </div>
                @endif
                <div class="form-group">
                    <label for="Images">Images<span style="color: red">*</span></label>
                    <input type="file" class="form-control" id="images" name="images[]" placeholder="Images" multiple>
                    @error('images')
                        <span class="error">{{ $message }}</span>
                    @enderror
                </div>
                @if ($details)
                    <div class="form-group">
                        <div class="image-section">
                            @foreach ($images as $image)
                                <div class="image">
                                    <a class="deleteRecord" href="{{ route('admin.destroySmileImage', $image->id) }}">
                                        <i class="fa fa-times" aria-hidden="true"></i>
                                    </a>
                                    <img src="{{ asset("storage/$image->images") }}" height="50px">
                                </div>
                            @endforeach
                        </div>
                    </div>
                @endif
                <label for="SEO">SEO content<span style="color: red">*</span></label>
                <div class="form-group">
                    <label for="Meta title">Meta title<span style="color: red">*</span></label>
                    <input type="text" class="form-control" id="meta_title" name="meta_title"
                        value="{{ $details ? $details->meta_title : '' }}" placeholder="Meta title">
                    @error('meta_title')
                        <span class="error">{{ $message }}</span>
                    @enderror
                </div>
                <div class="form-group">
                    <label for="Meta Description">Meta Description<span style="color: red">*</span></label>
                    <textarea class="form-control" rows="8" id="meta_description" name="meta_description"
                        placeholder="Meta Description">{{ $details ? $details->meta_description : '' }}</textarea>
                    @error('meta_description')
                        <span class="error">{{ $message }}</span>
                    @enderror
                </div>
                <div class="form-group">
                    <div class="form-group">
                        <label for="Meta Keywords">Meta Keywords<span style="color: red">*</span></label>
                        <textarea class="form-control" rows="8" id="meta_keywords" name="meta_keywords" placeholder="Meta Keywords">{{ $details ? $details->meta_keywords : '' }}</textarea>
                        @error('meta_keywords')
                            <span class="error">{{ $message }}</span>
                        @enderror
                    </div>
                </div>
                <button type="submit" class="btn btn-danger btn-sm">Submit</button>
            </form>
        </div>
    </div>
@endsection
