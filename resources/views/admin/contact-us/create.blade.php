@extends('admin.layout.master')
@section('page-contents')
    <div class="d-sm-flex align-items-center justify-content-between mb-4">
        <h1 class="h3 mb-0 text-gray-800">Add Contact Us Details</h1>
        {{-- <a href="#" class="d-none d-sm-inline-block btn btn-sm btn-primary shadow-sm"><i
                        class="fas fa-download fa-sm text-white-50"></i> Generate Report</a> --}}
    </div>
    <div>
        <div class="row">
            <div class="col-lg-10 mx-auto">
                <form method="POST" action="{{ route('admin.contact-us.store') }}" enctype="multipart/form-data">
                    @method('POST')
                    @csrf
                    <div class="form-group">
                        <div class="form-group">
                            <label for="Banner">Banner<span style="color: red">*</span></label>
                            <input type="file" class="form-control" id="banner" name="banner" placeholder="Banner">
                            @error('banner')
                                <span class="error">{{ $message }}</span>
                            @enderror
                        </div>
                        <div class="form-group">
                            <label for="Banner Header">Banner Header<span style="color: red">*</span></label>
                            <input type="text" class="form-control" id="banner_header" name="banner_header"
                                placeholder="Banner Header">
                            @error('banner_header')
                                <span class="error">{{ $message }}</span>
                            @enderror
                        </div>
                        <div class="form-group">
                            <label for="Banner Header">Address<span style="color: red">*</span></label>
                            <input type="text" class="form-control" id="address" name="address" placeholder="Address">
                            @error('address')
                                <span class="error">{{ $message }}</span>
                            @enderror
                        </div>
                        <div class="form-group">
                            <label for="Phone Number">Phone Number<span style="color: red">*</span></label>
                            <input type="text" class="form-control" id="phone_number" name="phone_number"
                                placeholder="Phone Number">
                            @error('phone_number')
                                <span class="error">{{ $message }}</span>
                            @enderror
                        </div>
                        <div class="form-group">
                            <label for="Email">Email<span style="color: red">*</span></label>
                            <input type="text" class="form-control" id="email" name="email" placeholder="Email">
                            @error('email')
                                <span class="error">{{ $message }}</span>
                            @enderror
                        </div>
                        <div class="form-group">
                            <label for="Map Link">Map Link<span style="color: red">*</span></label>
                            <input type="text" class="form-control" id="map_link" name="map_link"
                                placeholder="Map Link">
                            @error('map_link')
                                <span class="error">{{ $message }}</span>
                            @enderror
                        </div>

                        <div class="form-group">
                            <label for="Covid 19 update">Covid 19 update<span style="color: red">*</span></label>
                            <input type="text" class="form-control" id="covid" name="covid"
                                value="{{ old('covid') }}" placeholder="Covid 19 Update">
                            @error('covid')
                                <span class="error">{{ $message }}</span>
                            @enderror
                        </div>
                        <label for="SEO">SEO content<span style="color: red">*</span></label>
                        <div class="form-group">
                            <label for="Meta title">Meta title<span style="color: red">*</span></label>
                            <input type="text" class="form-control" id="meta_title" name="meta_title"
                                value="{{ old('meta_title') }}" placeholder="Meta title">
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
                    </div>

                    <button type="submit" class="btn btn-danger btn-sm">Submit</button>
                </form>
            </div>
        </div>
    </div>
@endsection
