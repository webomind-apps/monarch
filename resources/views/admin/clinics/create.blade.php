@extends('admin.layout.master')

@section('page-contents')
    <div class="d-sm-flex align-items-center justify-content-between mb-4">
        <h1 class="h3 mb-0 text-gray-800">Add Clinics</h1>
        {{-- <a href="#" class="d-none d-sm-inline-block btn btn-sm btn-primary shadow-sm"><i
                        class="fas fa-download fa-sm text-white-50"></i> Generate Report</a> --}}
    </div>
    <div class="row">
        <div class="col-lg-10 mx-auto">
            <form method="POST" action="{{ route('admin.clinics.store') }}" enctype="multipart/form-data">
                @method('POST')
                @csrf
                <div class="accordion" id="accordionExample">
                    <div class="accordion-item">
                        <h2 class="accordion-header" id="headingOne">
                            <button class="accordion-button" type="button" data-bs-toggle="collapse"
                                data-bs-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
                                Basic Details
                            </button>
                        </h2>
                        <div id="collapseOne" class="accordion-collapse collapse show" aria-labelledby="headingOne">
                            <div class="accordion-body">
                                <div class="form-group">
                                    <label for="LocationName">Location<span style="color: red">*</span></label>
                                    <select name="location_id" class="form-control">
                                        <option value="">Select</option>
                                        @foreach ($locations as $location)
                                            <option value="{{ $location->id }}" id="{{ $location->id }}">
                                                {{ $location->name }} </option>
                                        @endforeach
                                    </select>
                                    @error('location_id')
                                        <span class="error">{{ $message }}</span>
                                    @enderror
                                </div>
                                <div class="form-group">
                                    <label for="Status">Status<span style="color: red">*</span></label>
                                    <select name="status" class="form-control">
                                        <option value="1">Select</option>
                                        <option value="0" id="inactive">
                                            Inactive </option>
                                        <option value="1" id="active">
                                            Active </option>
                                    </select>
                                    @error('status')
                                        <span class="error">{{ $message }}</span>
                                    @enderror
                                </div>
                                <div class="form-group">
                                    <label for="TitleName">Title<span style="color: red">*</span></label>
                                    <input type="text" class="form-control slug" id="title" name="title"
                                        placeholder="Title" value="{{ old('title') }}">
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
                                    <label for="Latitude">Latitude<span style="color: red">*</span></label>
                                    <input type="text" class="form-control" id="lat" name="lat"
                                        placeholder="Latitude" value="{{ old('lat') }}">
                                    @error('lat')
                                        <span class="error">{{ $message }}</span>
                                    @enderror
                                </div>
                                <div class="form-group">
                                    <label for="Longitude">Longitude<span style="color: red">*</span></label>
                                    <input type="text" class="form-control" id="lng" name="lng"
                                        placeholder="Longitude" value="{{ old('lng') }}">
                                    @error('lng')
                                        <span class="error">{{ $message }}</span>
                                    @enderror
                                </div>
                                <div class="form-group">
                                    <label for="Priority">Priority<span style="color: red">*</span></label>
                                    <input type="number" class="form-control" id="priority" name="priority"
                                        placeholder="Priority" value="{{ old('priority') }}">
                                    @error('priority')
                                        <span class="error">{{ $message }}</span>
                                    @enderror
                                </div>
                                <div class="form-group">
                                    <label for="PhoneNumber">Phone Number<span style="color: red">*</span></label>
                                    <input type="tel" class="form-control" id="phone_number" name="phone_number"
                                        value="{{ old('phone_number') }}" placeholder="Phone Number">
                                    @error('phone_number')
                                        <span class="error">{{ $message }}</span>
                                    @enderror
                                </div>
                                <div class="form-group">
                                    <label for="FaxNumber">Fax Number</label>
                                    <input type="tel" class="form-control" id="fax_number" name="fax_number"
                                        value="{{ old('fax_number') }}" placeholder="Fax Number">
                                    @error('fax_number')
                                        <span class="error">{{ $message }}</span>
                                    @enderror
                                </div>
                                <div class="form-group">
                                    <label for="Email">Email<span style="color: red">*</span></label>
                                    <input type="email" class="form-control" id="email" name="email"
                                        value="{{ old('email') }}" placeholder="Email">
                                    @error('email')
                                        <span class="error">{{ $message }}</span>
                                    @enderror
                                </div>
                                <div class="form-group">
                                    <label for="AdminEmail">Admin Email<span style="color: red">*</span></label>
                                    <input type="text" class="form-control" id="admin_email" name="admin_email"
                                        value="{{ old('admin_email') }}" placeholder="hello@example.com,hi@gmail.com">
                                    @error('admin_email')
                                        <span class="error">{{ $message }}</span>
                                    @enderror
                                </div>

                            </div>
                        </div>
                    </div>
                    <div class="accordion-item">
                        <h2 class="accordion-header" id="headingTwo">
                            <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                                data-bs-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
                                Address Details
                            </button>
                        </h2>
                        <div id="collapseTwo" class="accordion-collapse collapse show" aria-labelledby="headingTwo">
                            <div class="accordion-body">
                                <div class="form-group">
                                    <div class="form-group">
                                        <label for="Address">Address<span style="color: red">*</span></label>
                                        <input type="text" class="form-control" id="address" name="address"
                                            value="{{ old('address') }}" placeholder="Address">
                                        @error('address')
                                            <span class="error">{{ $message }}</span>
                                        @enderror
                                    </div>
                                    <div class="form-group">
                                        <label for="OfficeHours">Office Hours<span style="color: red">*</span></label>
                                        <input type="text" class="form-control" id="office_hours" name="office_hours"
                                            value="{{ old('office_hours') }}" placeholder="Office Hours">
                                        @error('office_hours')
                                            <span class="error">{{ $message }}</span>
                                        @enderror
                                    </div>
                                    <div class="form-group">
                                        <label for="MapLink">Map Link</label>
                                        <input type="text" class="form-control" id="maplink" name="maplink"
                                            value="{{ old('maplink') }}" placeholder="Map Link">
                                        @error('maplink')
                                            <span class="error">{{ $message }}</span>
                                        @enderror
                                    </div>
                                    <div class="form-group">
                                        <label for="GoogleReview">Google Review</label>
                                        <input type="text" class="form-control" id="googlereview" name="googlereview"
                                            value="{{ old('googlereview') }}" placeholder="Google Review">
                                        @error('googlereview')
                                            <span class="error">{{ $message }}</span>
                                        @enderror
                                    </div>
                                    <div class="form-group">
                                        <label for="About">About Us</label>
                                        <input type="text" class="form-control" id="description" name="description"
                                            value="{{ old('description') }}" placeholder="Description">
                                        @error('description')
                                            <span class="error">{{ $message }}</span>
                                        @enderror
                                    </div>
                                    <div class="form-group">
                                        <label for="Book an appointment note">Book an appointment note</label>
                                        <textarea class="form-control" rows="4" id="appointment_note" name="appointment_note"
                                            placeholder="Book an appointment Note"></textarea>
                                        @error('appointment_note')
                                            <span class="error">{{ $message }}</span>
                                        @enderror
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="accordion-item">
                        <h2 class="accordion-header" id="headingThree">
                            <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                                data-bs-target="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
                                Images/Video
                            </button>
                        </h2>
                        <div id="collapseThree" class="accordion-collapse collapse show" aria-labelledby="headingThree">
                            <div class="accordion-body">
                                <div class="form-group">
                                    <div class="form-group">
                                        <label for="GalleryImages">Gallery Images<span style="color: red">*</span></label>
                                        <input type="file" class="form-control" id="gallery_images"
                                            name="gallery_images[]" placeholder="Gallery Images" multiple>
                                        @error('gallery_images')
                                            <span class="error">{{ $message }}</span>
                                        @enderror
                                    </div>
                                    <div class="form-group">
                                        <label for="Banner">Banner<span style="color: red">*</span></label>
                                        <input type="file" class="form-control" id="banner" name="banner"
                                            placeholder="Banner">
                                        @error('banner')
                                            <span class="error">{{ $message }}</span>
                                        @enderror
                                    </div>
                                    {{-- <div class="form-group">
                                        <label for="Video">Video<span style="color: red">*</span></label>
                                        <input type="file" class="form-control" id="video" name="video"
                                            placeholder="Video">
                                        @error('video')
                                            <span class="error">{{ $message }}</span>
                                        @enderror
                                    </div> --}}
                                    <div class="form-group">
                                        <label for="Video">Videos<span style="color: red">*</span></label>
                                        <input type="file" class="form-control" id="videos" name="videos[]"
                                            multiple placeholder="Videos" accept="video/mp4,video/x-m4v,video/*">
                                        @error('videos')
                                            <span class="error">{{ $message }}</span>
                                        @enderror
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="accordion-item">
                        <h2 class="accordion-header" id="headingFour">
                            <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                                data-bs-target="#collapseFour" aria-expanded="false" aria-controls="collapseFour">
                                Services
                            </button>
                        </h2>
                        <div id="collapseFour" class="accordion-collapse collapse show" aria-labelledby="headingFour">
                            <div class="accordion-body">
                                <div class="form-group">
                                    @foreach ($services as $service)
                                        <input type="checkbox" id="{{ $service->name }}" name="service_id[]"
                                            value="{{ $service->id }}">
                                        <label for="{{ $service->name }}">{{ $service->name }}</label><br>
                                    @endforeach
                                </div>
                                @error('service_id')
                                    <span class="error">{{ $message }}</span>
                                @enderror
                            </div>
                        </div>
                    </div>
                    <div class="accordion-item">
                        <h2 class="accordion-header" id="headingFive">
                            <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                                data-bs-target="#collapseFive" aria-expanded="false" aria-controls="collapseFive">
                                Plans
                            </button>
                        </h2>
                        <div id="collapseFive" class="accordion-collapse collapse show" aria-labelledby="headingFive">
                            <div class="accordion-body">
                                <div class="form-group">
                                    @foreach ($plans as $plan)
                                        <input type="checkbox" id="{{ $plan->name }}" name="plan_id[]"
                                            value="{{ $plan->id }}">
                                        <label for="{{ $plan->name }}">{{ $plan->name }}</label><br>
                                    @endforeach
                                </div>
                                @error('plan_id')
                                    <span class="error">{{ $message }}</span>
                                @enderror
                            </div>
                        </div>
                    </div>
                    <div class="accordion-item">
                        <h2 class="accordion-header" id="headingSix">
                            <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                                data-bs-target="#collapseSix" aria-expanded="false" aria-controls="collapseSix">
                                Advantages
                            </button>
                        </h2>
                        <div id="collapseSix" class="accordion-collapse collapse show" aria-labelledby="headingSix">
                            <div class="accordion-body">
                                <div class="form-group">
                                    @foreach ($advantages as $advantage)
                                        <input type="checkbox" id="{{ $advantage->name }}" name="advantage_id[]"
                                            value="{{ $advantage->id }}">
                                        <label for="{{ $advantage->name }}">{{ $advantage->name }}</label><br>
                                    @endforeach
                                </div>
                                @error('advantage_id')
                                    <span class="error">{{ $message }}</span>
                                @enderror
                            </div>
                        </div>
                    </div>
                    <div class="accordion-item">
                        <h2 class="accordion-header" id="headingSix">
                            <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                                data-bs-target="#collapseSix" aria-expanded="false" aria-controls="collapseSix">
                                Advantages for top list
                            </button>
                        </h2>
                        <div id="collapseSix" class="accordion-collapse collapse show" aria-labelledby="headingSix">
                            <div class="accordion-body">
                                <div class="form-group">
                                    @foreach ($advantages as $advantage)
                                        <input type="checkbox" id="{{ $advantage->name }}" name="advantage_to_list_id[]"
                                            value="{{ $advantage->id }}">
                                        <label for="{{ $advantage->name }}">{{ $advantage->name }}</label><br>
                                    @endforeach
                                </div>
                                @error('advantage_to_list_id')
                                    <span class="error">{{ $message }}</span>
                                @enderror
                            </div>
                        </div>
                    </div>
                    <div class="accordion-item">
                        <h2 class="accordion-header" id="headingThree">
                            <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                                data-bs-target="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
                                Covid 19 Update<span style="color: red">*</span>
                            </button>
                        </h2>
                        <div id="collapseThree" class="accordion-collapse collapse show" aria-labelledby="headingThree">
                            <div class="accordion-body">
                                <div class="form-group">
                                    <div class="form-group">
                                        <input type="text" class="form-control" id="covid" name="covid"
                                            value="{{ old('covid') }}" placeholder="Covid 19 Update">
                                        @error('covid')
                                            <span class="error">{{ $message }}</span>
                                        @enderror
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="accordion-item">
                        <h2 class="accordion-header" id="headingThree">
                            <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                                data-bs-target="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
                                SEO Content<span style="color: red">*</span>
                            </button>
                        </h2>
                        <div id="collapseThree" class="accordion-collapse collapse show" aria-labelledby="headingThree">
                            <div class="accordion-body">
                                <div class="form-group">
                                    <div class="form-group">
                                        <label for="Meta title">Meta title<span style="color: red">*</span></label>
                                        <input type="text" class="form-control" id="meta_title" name="meta_title"
                                            value="{{ old('meta_title') }}" placeholder="Meta title">
                                        @error('meta_title')
                                            <span class="error">{{ $message }}</span>
                                        @enderror
                                    </div>
                                </div>
                                <div class="form-group">
                                    <div class="form-group">
                                        <label for="Meta Description">Meta Description<span
                                                style="color: red">*</span></label>
                                        <textarea class="form-control" rows="8" id="meta_description" name="meta_description"
                                            placeholder="Meta Description"></textarea>
                                        @error('meta_description')
                                            <span class="error">{{ $message }}</span>
                                        @enderror
                                    </div>
                                </div>
                                <div class="form-group">
                                    <div class="form-group">
                                        <label for="Meta Keywords">Meta Keywords<span style="color: red">*</span></label>
                                        <textarea class="form-control" rows="8" id="meta_keywords" name="meta_keywords" placeholder="Meta Keywords"></textarea>
                                        @error('meta_keywords')
                                            <span class="error">{{ $message }}</span>
                                        @enderror
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
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
