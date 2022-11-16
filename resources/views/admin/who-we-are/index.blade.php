@extends('admin.layout.master')

@section('page-contents')
    <div class="d-sm-flex align-items-center justify-content-between mb-4">
        <h1 class="h3 mb-0 text-gray-800">Add Who We Are page details</h1>
        {{-- <a href="#" class="d-none d-sm-inline-block btn btn-sm btn-primary shadow-sm"><i
                            class="fas fa-download fa-sm text-white-50"></i> Generate Report</a> --}}
    </div>
    <div class="row">
        <div class="col-lg-10 mx-auto">
            <form method="POST"
                action=@if ($details) {{ route('admin.who-we-are.update', $details->id) }} @else {{ route('admin.who-we-are.store') }} @endif
                enctype="multipart/form-data">
                @if ($details)
                    @method('PATCH')
                @endif
                @csrf
                <div class="form-group">
                    <label for="Title">Title<span style="color: red">*</span></label>
                    <input type="text" class="form-control" id="title" name="title" placeholder="Title"
                        value="{{ $details ? $details->banner_header : '' }}">
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
                    <label for="Description">Description<span style="color: red">*</span></label>
                    <input type="text" class="form-control" id="description" name="description" placeholder="Description"
                        value="{{ $details ? $details->description : '' }}">
                    @error('description')
                        <span class="error">{{ $message }}</span>
                    @enderror
                </div>
                <div class="form-group">
                    <label for="Image">Image<span style="color: red">*</span></label>
                    <input type="file" class="form-control" id="image" name="image" placeholder="Image">
                    @error('image')
                        <span class="error">{{ $message }}</span>
                    @enderror
                </div>
                @if ($details)
                    <div class="form-group">
                        <div class="image-section">
                            <div class="image"> <img src="{{ asset("storage/$details->image") }}" height="50px">
                            </div>
                        </div>
                    </div>
                @endif
                <button type="submit" class="btn btn-danger btn-sm">Submit</button>
            </form>
        </div>
    </div>
@endsection
