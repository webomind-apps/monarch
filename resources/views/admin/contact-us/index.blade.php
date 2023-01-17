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
                <form method="POST"
                    action=@if ($contacts) {{ route('admin.contact-us.update', $contacts->id) }}  @else {{ route('admin.contact-us.store') }} @endif
                    enctype="multipart/form-data">
                    @if ($contacts)
                        @method('PATCH')
                    @endif
                    @csrf
                    <div class="form-group">
                        <div class="form-group">
                            <label for="Banner">Banner<span style="color: red">*</span></label>
                            <input type="file" class="form-control" id="banner" name="banner" placeholder="Banner">
                            @error('banner')
                                <span class="error">{{ $message }}</span>
                            @enderror
                        </div>
                        @if ($contacts)
                            <div class="form-group">
                                <div class="image-section">
                                    <div class="image"> <img src="{{ asset("storage/$contacts->banner") }}" height="50px">
                                    </div>
                                </div>
                            </div>
                        @endif
                        <div class="form-group">
                            <label for="Title">Title<span style="color: red">*</span></label>
                            <input type="text" class="form-control" id="banner_header" name="banner_header"
                                placeholder="Title" value="{{ $contacts ? $contacts->banner_header : '' }}">
                            @error('banner_header')
                                <span class="error">{{ $message }}</span>
                            @enderror
                        </div>
                        <div class="form-group">
                            <label for="Banner Header">Address<span style="color: red">*</span></label>
                            <input type="text" class="form-control" id="address" name="address" placeholder="Address"
                                value="{{ $contacts ? $contacts->address : '' }}">
                            @error('address')
                                <span class="error">{{ $message }}</span>
                            @enderror
                        </div>
                        <div class="form-group">
                            <label for="Phone Number">Phone Number<span style="color: red">*</span></label>
                            <input type="text" class="form-control" id="phone_number" name="phone_number"
                                placeholder="Phone Number" value="{{ $contacts ? $contacts->phone_number : '' }}">
                            @error('phone_number')
                                <span class="error">{{ $message }}</span>
                            @enderror
                        </div>
                        <div class="form-group">
                            <label for="Email">Email<span style="color: red">*</span></label>
                            <input type="text" class="form-control" id="email" name="email" placeholder="Email"
                                value="{{ $contacts ? $contacts->email : '' }}">
                            @error('email')
                                <span class="error">{{ $message }}</span>
                            @enderror
                        </div>
                        <div class="form-group">
                            <label for="Map Link">Map Link<span style="color: red">*</span></label>
                            <input type="text" class="form-control" id="map_link" name="map_link" placeholder="Map Link"
                                value="{{ $contacts ? $contacts->map_link : '' }}">
                            @error('map_link')
                                <span class="error">{{ $message }}</span>
                            @enderror
                        </div>

                        <div class="form-group">
                            <label for="Covid 19 update">Covid 19 update<span style="color: red">*</span></label>
                            <textarea class="form-control" rows="8" id="covid" name="covid" placeholder="Covid 19 Update"
                                value="">{{ $contacts ? $contacts->covid_update : '' }}</textarea>
                            @error('covid')
                                <span class="error">{{ $message }}</span>
                            @enderror
                        </div>
                        <label for="SEO">SEO content<span style="color: red">*</span></label>
                        <div class="form-group">
                            <label for="Meta title">Meta title<span style="color: red">*</span></label>
                            <input type="text" class="form-control" id="meta_title" name="meta_title"
                                value="{{ $contacts ? $contacts->meta_title : '' }}" placeholder="Meta title">
                            @error('meta_title')
                                <span class="error">{{ $message }}</span>
                            @enderror
                        </div>
                        <div class="form-group">
                            <label for="Meta Description">Meta Description<span style="color: red">*</span></label>
                            <textarea class="form-control" rows="8" id="meta_description" name="meta_description"
                                placeholder="Meta Description">{{ $contacts ? $contacts->meta_description : '' }}</textarea>
                            @error('meta_description')
                                <span class="error">{{ $message }}</span>
                            @enderror
                        </div>
                        <div class="form-group">
                            <div class="form-group">
                                <label for="Meta Keywords">Meta Keywords<span style="color: red">*</span></label>
                                <textarea class="form-control" rows="8" id="meta_keywords" name="meta_keywords" placeholder="Meta Keywords">{{ $contacts ? $contacts->meta_keywords : '' }}</textarea>
                                @error('meta_keywords')
                                    <span class="error">{{ $message }}</span>
                                @enderror
                            </div>
                        </div>

                        <label for="SEO">SEO content - Home page<span style="color: red">*</span></label>

                        {{-- <div class="form-group">
                            <label for="title">Title<span style="color: red">*</span></label>
                            <input type="text" class="form-control" id="home_title" name="home_title"
                                value="{{ $contacts ? $contacts->home_title : '' }}" placeholder="Title">
                            @error('home_title')
                                <span class="error">{{ $message }}</span>
                            @enderror
                        </div> --}}
                        <div class="form-group">
                            <label for="Meta title">Meta title<span style="color: red">*</span></label>
                            <input type="text" class="form-control" id="home_meta_title" name="home_meta_title"
                                value="{{ $contacts ? $contacts->home_meta_title : '' }}" placeholder="Meta title">
                            @error('home_meta_title')
                                <span class="error">{{ $message }}</span>
                            @enderror
                        </div>
                        <div class="form-group">
                            <label for="Meta Description">Meta Description<span style="color: red">*</span></label>
                            <textarea class="form-control" rows="8" id="home_meta_description" name="home_meta_description"
                                placeholder="Meta Description">{{ $contacts ? $contacts->home_meta_description : '' }}</textarea>
                            @error('home_meta_description')
                                <span class="error">{{ $message }}</span>
                            @enderror
                        </div>
                        <div class="form-group">
                            <label for="Meta Keywords">Meta Keywords<span style="color: red">*</span></label>
                            <textarea class="form-control" rows="8" id="home_meta_keywords" name="home_meta_keywords"
                                placeholder="Meta Keywords">{{ $contacts ? $contacts->home_meta_keywords : '' }}</textarea>
                            @error('home_meta_keywords')
                                <span class="error">{{ $message }}</span>
                            @enderror
                        </div>
                        <label for="SEO">SEO content - About page<span style="color: red">*</span></label>
                        {{-- <div class="form-group">
                            <label for="title">Title<span style="color: red">*</span></label>
                            <input type="text" class="form-control" id="about_title" name="about_title"
                                value="{{ $contacts ? $contacts->about_title : '' }}" placeholder="Title">
                            @error('about_title')
                                <span class="error">{{ $message }}</span>
                            @enderror
                        </div> --}}
                        <div class="form-group">
                            <label for="Meta title">Meta title<span style="color: red">*</span></label>
                            <input type="text" class="form-control" id="about_meta_title" name="about_meta_title"
                                value="{{ $contacts ? $contacts->about_meta_title : '' }}" placeholder="Meta title">
                            @error('about_meta_title')
                                <span class="error">{{ $message }}</span>
                            @enderror
                        </div>
                        <div class="form-group">
                            <label for="Meta Description">Meta Description<span style="color: red">*</span></label>
                            <textarea class="form-control" rows="8" id="about_meta_description" name="about_meta_description"
                                placeholder="Meta Description">{{ $contacts ? $contacts->about_meta_description : '' }}</textarea>
                            @error('about_meta_description')
                                <span class="error">{{ $message }}</span>
                            @enderror
                        </div>
                        <div class="form-group">
                            <div class="form-group">
                                <label for="Meta Keywords">Meta Keywords<span style="color: red">*</span></label>
                                <textarea class="form-control" rows="8" id="about_meta_keywords" name="about_meta_keywords"
                                    placeholder="Meta Keywords">{{ $contacts ? $contacts->about_meta_keywords : '' }}</textarea>
                                @error('about_meta_keywords')
                                    <span class="error">{{ $message }}</span>
                                @enderror
                            </div>
                        </div>

                        <label for="SEO">SEO content - Patients page<span style="color: red">*</span></label>
                        {{-- <div class="form-group">
                            <label for="Meta title">Title<span style="color: red">*</span></label>
                            <input type="text" class="form-control" id="patients_title" name="patients_title"
                                value="{{ $contacts ? $contacts->patients_title : '' }}" placeholder="Title">
                            @error('patients_title')
                                <span class="error">{{ $message }}</span>
                            @enderror
                        </div> --}}
                        <div class="form-group">
                            <label for="Meta title">Meta title<span style="color: red">*</span></label>
                            <input type="text" class="form-control" id="patients_meta_title"
                                name="patients_meta_title" value="{{ $contacts ? $contacts->patients_meta_title : '' }}"
                                placeholder="Meta title">
                            @error('patients_meta_title')
                                <span class="error">{{ $message }}</span>
                            @enderror
                        </div>
                        <div class="form-group">
                            <label for="Meta Description">Meta Description<span style="color: red">*</span></label>
                            <textarea class="form-control" rows="8" id="patients_meta_description" name="patients_meta_description"
                                placeholder="Meta Description">{{ $contacts ? $contacts->patients_meta_description : '' }}</textarea>
                            @error('patients_meta_description')
                                <span class="error">{{ $message }}</span>
                            @enderror
                        </div>
                        <div class="form-group">
                            <div class="form-group">
                                <label for="Meta Keywords">Meta Keywords<span style="color: red">*</span></label>
                                <textarea class="form-control" rows="8" id="patients_meta_keywords" name="patients_meta_keywords"
                                    placeholder="Meta Keywords">{{ $contacts ? $contacts->patients_meta_keywords : '' }}</textarea>
                                @error('patients_meta_keywords')
                                    <span class="error">{{ $message }}</span>
                                @enderror
                            </div>
                        </div>

                        <label for="SEO">SEO content - Services page<span style="color: red">*</span></label>
                        {{-- <div class="form-group">
                            <label for="title">Title<span style="color: red">*</span></label>
                            <input type="text" class="form-control" id="services_title" name="services_title"
                                value="{{ $contacts ? $contacts->services_title : '' }}" placeholder="Title">
                            @error('services_title')
                                <span class="error">{{ $message }}</span>
                            @enderror
                        </div> --}}
                        <div class="form-group">
                            <label for="Meta title">Meta title<span style="color: red">*</span></label>
                            <input type="text" class="form-control" id="services_meta_title"
                                name="services_meta_title" value="{{ $contacts ? $contacts->services_meta_title : '' }}"
                                placeholder="Meta title">
                            @error('services_meta_title')
                                <span class="error">{{ $message }}</span>
                            @enderror
                        </div>
                        <div class="form-group">
                            <label for="Meta Description">Meta Description<span style="color: red">*</span></label>
                            <textarea class="form-control" rows="8" id="services_meta_description" name="services_meta_description"
                                placeholder="Meta Description">{{ $contacts ? $contacts->services_meta_description : '' }}</textarea>
                            @error('services_meta_description')
                                <span class="error">{{ $message }}</span>
                            @enderror
                        </div>
                        <div class="form-group">
                            <div class="form-group">
                                <label for="Meta Keywords">Meta Keywords<span style="color: red">*</span></label>
                                <textarea class="form-control" rows="8" id="services_meta_keywords" name="services_meta_keywords"
                                    placeholder="Meta Keywords">{{ $contacts ? $contacts->services_meta_keywords : '' }}</textarea>
                                @error('services_meta_keywords')
                                    <span class="error">{{ $message }}</span>
                                @enderror
                            </div>
                        </div>

                        <label for="SEO">SEO content - Find location page<span style="color: red">*</span></label>
                        {{-- <div class="form-group">
                            <label for="Meta title">Title<span style="color: red">*</span></label>
                            <input type="text" class="form-control" id="location_title" name="location_title"
                                value="{{ $contacts ? $contacts->location_title : '' }}" placeholder="Title">
                            @error('location_title')
                                <span class="error">{{ $message }}</span>
                            @enderror
                        </div> --}}
                        <div class="form-group">
                            <label for="Meta title">Meta title<span style="color: red">*</span></label>
                            <input type="text" class="form-control" id="location_meta_title"
                                name="location_meta_title" value="{{ $contacts ? $contacts->location_meta_title : '' }}"
                                placeholder="Meta title">
                            @error('location_meta_title')
                                <span class="error">{{ $message }}</span>
                            @enderror
                        </div>
                        <div class="form-group">
                            <label for="Meta Description">Meta Description<span style="color: red">*</span></label>
                            <textarea class="form-control" rows="8" id="location_meta_description" name="location_meta_description"
                                placeholder="Meta Description">{{ $contacts ? $contacts->location_meta_description : '' }}</textarea>
                            @error('location_meta_description')
                                <span class="error">{{ $message }}</span>
                            @enderror
                        </div>
                        <div class="form-group">
                            <div class="form-group">
                                <label for="Meta Keywords">Meta Keywords<span style="color: red">*</span></label>
                                <textarea class="form-control" rows="8" id="location_meta_keywords" name="location_meta_keywords"
                                    placeholder="Meta Keywords">{{ $contacts ? $contacts->location_meta_keywords : '' }}</textarea>
                                @error('location_meta_keywords')
                                    <span class="error">{{ $message }}</span>
                                @enderror
                            </div>
                        </div>

                        <label for="SEO">SEO content - Career page<span style="color: red">*</span></label>
                        {{-- <div class="form-group">
                            <label for="Meta title">Title<span style="color: red">*</span></label>
                            <input type="text" class="form-control" id="career_title" name="career_title"
                                value="{{ $contacts ? $contacts->career_title : '' }}" placeholder="Title">
                            @error('career_title')
                                <span class="error">{{ $message }}</span>
                            @enderror
                        </div> --}}
                        <div class="form-group">
                            <label for="Meta title">Meta title<span style="color: red">*</span></label>
                            <input type="text" class="form-control" id="career_meta_title" name="career_meta_title"
                                value="{{ $contacts ? $contacts->career_meta_title : '' }}" placeholder="Meta title">
                            @error('career_meta_title')
                                <span class="error">{{ $message }}</span>
                            @enderror
                        </div>
                        <div class="form-group">
                            <label for="Meta Description">Meta Description<span style="color: red">*</span></label>
                            <textarea class="form-control" rows="8" id="career_meta_description" name="career_meta_description"
                                placeholder="Meta Description">{{ $contacts ? $contacts->career_meta_description : '' }}</textarea>
                            @error('career_meta_description')
                                <span class="error">{{ $message }}</span>
                            @enderror
                        </div>
                        <div class="form-group">
                            <div class="form-group">
                                <label for="Meta Keywords">Meta Keywords<span style="color: red">*</span></label>
                                <textarea class="form-control" rows="8" id="career_meta_keywords" name="career_meta_keywords"
                                    placeholder="Meta Keywords">{{ $contacts ? $contacts->career_meta_keywords : '' }}</textarea>
                                @error('career_meta_keywords')
                                    <span class="error">{{ $message }}</span>
                                @enderror
                            </div>
                        </div>

                        <label for="SEO">SEO content - Meet the doctors page<span style="color: red">*</span></label>
                        {{-- <div class="form-group">
                            <label for="Meta title">Title<span style="color: red">*</span></label>
                            <input type="text" class="form-control" id="doctors_title" name="doctors_title"
                                value="{{ $contacts ? $contacts->doctors_title : '' }}" placeholder="Title">
                            @error('doctors_title')
                                <span class="error">{{ $message }}</span>
                            @enderror
                        </div> --}}
                        <div class="form-group">
                            <label for="Meta title">Meta title<span style="color: red">*</span></label>
                            <input type="text" class="form-control" id="doctors_meta_title" name="doctors_meta_title"
                                value="{{ $contacts ? $contacts->doctors_meta_title : '' }}" placeholder="Meta title">
                            @error('doctors_meta_title')
                                <span class="error">{{ $message }}</span>
                            @enderror
                        </div>
                        <div class="form-group">
                            <label for="Meta Description">Meta Description<span style="color: red">*</span></label>
                            <textarea class="form-control" rows="8" id="doctors_meta_description" name="doctors_meta_description"
                                placeholder="Meta Description">{{ $contacts ? $contacts->doctors_meta_description : '' }}</textarea>
                            @error('doctors_meta_description')
                                <span class="error">{{ $message }}</span>
                            @enderror
                        </div>
                        <div class="form-group">
                            <div class="form-group">
                                <label for="Meta Keywords">Meta Keywords<span style="color: red">*</span></label>
                                <textarea class="form-control" rows="8" id="doctors_meta_keywords" name="doctors_meta_keywords"
                                    placeholder="Meta Keywords">{{ $contacts ? $contacts->doctors_meta_keywords : '' }}</textarea>
                                @error('doctors_meta_keywords')
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




