@extends('admin.layout.master')

@section('page-contents')
    <div class="d-sm-flex align-items-center justify-content-between mb-4">
        <h1 class="h3 mb-0 text-gray-800">Add location</h1>
        {{-- <a href="#" class="d-none d-sm-inline-block btn btn-sm btn-primary shadow-sm"><i
                            class="fas fa-download fa-sm text-white-50"></i> Generate Report</a> --}}
    </div>
    <div class="row">
        <div class="col-lg-10 mx-auto">
            <form method="POST" action="{{ route('admin.who-we-are.update', $details->id) }}" enctype="multipart/form-data">
                @method('PATCH')
                @csrf
                <div class="form-group">
                    <label for="Title">Title<span style="color: red">*</span></label>
                    <input type="text" class="form-control" id="title" name="title" placeholder="Title"
                        value="{{ $details->banner_header }}">
                </div>
                <div class="form-group">
                    <label for="Banner">Banner<span style="color: red">*</span></label>
                    <input type="file" class="form-control" id="banner" name="banner" placeholder="Banner">
                </div>
                <div class="form-group">
                    <div class="image-section">
                        <div class="image"> <img src="{{ asset("storage/$details->banner") }}" height="50px">
                        </div>
                    </div>
                </div>
                <div class="form-group">
                    <label for="Description">Description<span style="color: red">*</span></label>
                    <input type="text" class="form-control" id="description" name="description" placeholder="Description"
                        value="{{ $details->description }}">
                </div>
                <div class="form-group">
                    <label for="Image">Image<span style="color: red">*</span></label>
                    <input type="file" class="form-control" id="image" name="image" placeholder="Image">
                </div>
                <div class="form-group">
                    <div class="image-section">
                        <div class="image"> <img src="{{ asset("storage/$details->image") }}" height="50px">
                        </div>
                    </div>
                </div>
                <button type="submit" class="btn btn-danger btn-sm">Submit</button>
            </form>
        </div>
    </div>
@endsection
