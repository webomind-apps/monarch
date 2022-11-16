@extends('admin.layout.master')

@section('page-contents')
    <div class="d-sm-flex align-items-center justify-content-between mb-4">
        <h1 class="h3 mb-0 text-gray-800">Add Photo Gallery Images</h1>
    </div>
    <div class="row">
        <div class="col-lg-10 mx-auto">
            <form method="POST"
                action=@if ($details) {{ route('admin.photo-gallery.update', $details->id) }}@else {{ route('admin.photo-gallery.store') }} @endif
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
                                    <a class="deleteRecord" href="{{ route('admin.destroyPhotoImage', $image->id) }}">
                                        <i class="fa fa-times" aria-hidden="true"></i>
                                    </a>
                                    <img src="{{ asset("storage/$image->images") }}" height="50px">
                                </div>
                            @endforeach
                        </div>
                    </div>
                @endif
                <button type="submit" class="btn btn-danger btn-sm">Submit</button>
            </form>
        </div>
    </div>
@endsection
