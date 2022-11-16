@extends('admin.layout.master')

@section('page-contents')
    <div class="d-sm-flex align-items-center justify-content-between mb-4">
        <h1 class="h3 mb-0 text-gray-800">Add advantages</h1>
        {{-- <a href="#" class="d-none d-sm-inline-block btn btn-sm btn-primary shadow-sm"><i
                            class="fas fa-download fa-sm text-white-50"></i> Generate Report</a> --}}
    </div>
    <div class="row">
        <div class="col-lg-10 mx-auto">
            <form method="POST" action="{{ route('admin.advantages.store') }}" enctype="multipart/form-data">
                @method('POST')
                @csrf
                <div class="form-group">
                    <div class="form-group">
                        <label for="Name">Title<span style="color: red">*</span></label>
                        <input type="text" class="form-control" id="name" name="name" placeholder="Name">
                        @error('name')
                            <span class="error">{{ $message }}</span>
                        @enderror
                    </div>
                    <div class="form-group">
                        <label for="Icon">Icon<span style="color: red">*</span></label>
                        <input type="file" class="form-control" id="icon" name="icon" placeholder="Icon">
                        @error('icon')
                            <span class="error">{{ $message }}</span>
                        @enderror
                    </div>
                    <div class="form-group">
                        <label for="Title">Description<span style="color: red">*</span></label>
                        <textarea class="form-control" id="description" name="description" placeholder="Description"></textarea>
                        @error('description')
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
@endsection

