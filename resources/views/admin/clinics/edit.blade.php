@extends('admin.layout.master')

@section('page-contents')
    <div class="d-sm-flex align-items-center justify-content-between mb-4">
        <h1 class="h3 mb-0 text-gray-800">Add Clinics</h1>
        {{-- <a href="#" class="d-none d-sm-inline-block btn btn-sm btn-primary shadow-sm"><i
                        class="fas fa-download fa-sm text-white-50"></i> Generate Report</a> --}}
    </div>
    <div class="row">
        <div class="col-lg-10 mx-auto">
            <form method="POST" action="{{ route('admin.clinics.update', $clinics->id) }}" enctype="multipart/form-data">
                @method('PATCH')
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
                                        @foreach ($locations as $location)
                                            <option value="{{ $location->id }}"
                                                @if ($location->id == $clinics->location_id) selected @endif id="{{ $location->id }}">
                                                {{ $location->name }} </option>
                                        @endforeach
                                    </select>
                                    @error('location_id')
                                        <span style="color: red">{{ $message }}</span>
                                    @enderror
                                </div>
                                <div class="form-group">
                                    <label for="TitleName">Title<span style="color: red">*</span></label>
                                    <input type="text" class="form-control slug" id="title" name="title"
                                        placeholder="Title" value="{{ $clinics->name }}">
                                    @error('slug')
                                        <span style="color: red">{{ $message }}</span>
                                    @enderror
                                </div>
                                <div class="form-group">
                                    <label for="Slug">Slug<span style="color: red">*</span></label>
                                    <input type="text" class="form-control" id="slug" name="slug"
                                        placeholder="Slug" value="{{ $clinics->slug }}" readonly>
                                </div>
                                <div class="form-group">
                                    <label for="Latitude">Latitude<span style="color: red">*</span></label>
                                    <input type="text" class="form-control" id="lat" name="lat"
                                        placeholder="Latitude" value="{{ $clinics->lat }}">
                                </div>
                                <div class="form-group">
                                    <label for="Longitude">Longitude<span style="color: red">*</span></label>
                                    <input type="text" class="form-control" id="lng" name="lng"
                                        placeholder="Longitude" value="{{ $clinics->lng }}">
                                </div>
                                <div class="form-group">
                                    <label for="Priority">Priority<span style="color: red">*</span></label>
                                    <input type="number" class="form-control" id="priority" name="priority"
                                        placeholder="Priority" value="{{ $clinics->priority }}">
                                    @error('priority')
                                        <span class="error">{{ $message }}</span>
                                    @enderror
                                </div>
                                <div class="form-group">
                                    <label for="PhoneNumber">Phone Number<span style="color: red">*</span></label>
                                    <input type="tel" class="form-control" id="phone_number" name="phone_number"
                                        placeholder="Phone Number" value="{{ $clinics->phone_number }}">
                                    @error('phone_number')
                                        <span style="color: red">{{ $message }}</span>
                                    @enderror
                                </div>
                                <div class="form-group">
                                    <label for="FaxNumber">Fax Number</label>
                                    <input type="tel" class="form-control" id="fax_number" name="fax_number"
                                        placeholder="Fax Number" value="{{ $clinics->fax_number }}">
                                    @error('fax_number')
                                        <span class="error">{{ $message }}</span>
                                    @enderror
                                </div>
                                <div class="form-group">
                                    <label for="Email">Email<span style="color: red">*</span></label>
                                    <input type="email" class="form-control" id="email" name="email"
                                        placeholder="Email" value="{{ $clinics->email }}">
                                    @error('email')
                                        <span style="color: red">{{ $message }}</span>
                                    @enderror
                                </div>
                                <div class="form-group">
                                    <label for="AdminEmail">Admin Email<span style="color: red">*</span></label>
                                    <input type="text" class="form-control" id="admin_email" name="admin_email"
                                        placeholder="hello@example.com,hi@gmail.com" value="{{ $clinics->admin_email }}">
                                    @error('admin_email')
                                        <span style="color: red">{{ $message }}</span>
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
                                            placeholder="Address" value="{{ $clinics->address }}">
                                        @error('address')
                                            <span style="color: red">{{ $message }}</span>
                                        @enderror
                                    </div>
                                    <div class="form-group">
                                        <label for="OfficeHours">Office Hours<span style="color: red">*</span></label>
                                        <input type="text" class="form-control" id="office_hours" name="office_hours"
                                            placeholder="Office Hours" value="{{ $clinics->office_hours }}">
                                        @error('office_hours')
                                            <span style="color: red">{{ $message }}</span>
                                        @enderror
                                    </div>
                                    <div class="form-group">
                                        <label for="MapLink">Map Link</label>
                                        <input type="text" class="form-control" id="maplink" name="maplink"
                                            placeholder="Map Link" value="{{ $clinics->map_link }}">
                                        @error('maplink')
                                            <span style="color: red">{{ $message }}</span>
                                        @enderror
                                    </div>
                                    <div class="form-group">
                                        <label for="GoogleReview">Google Review</label>
                                        <input type="text" class="form-control" id="googlereview" name="googlereview"
                                            placeholder="Google Review" value="{{ $clinics->google_review_link }}">
                                        @error('googlereview')
                                            <span style="color: red">{{ $message }}</span>
                                        @enderror
                                    </div>
                                    <div class="form-group">
                                        <label for="About">About Us</label>
                                        <input type="text" class="form-control" id="description" name="description"
                                            value="{{ $clinics->description }}" placeholder="Description">
                                        @error('description')
                                            <span class="error">{{ $message }}</span>
                                        @enderror
                                    </div>
                                    <div class="form-group">
                                        <label for="Book an appointment note">Book an appointment note</label>
                                        <textarea class="form-control" rows="4" id="appointment_note" name="appointment_note"
                                            placeholder="Book an appointment Note">{{ $clinics->appointment_note }}</textarea>
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
                                Images
                            </button>
                        </h2>
                        <div id="collapseThree" class="accordion-collapse collapse show" aria-labelledby="headingThree">
                            <div class="accordion-body">
                                <div class="form-group">
                                    <div class="form-group">
                                        <label for="GalleryImages">Gallery Images<span style="color: red">*</span></label>
                                        <input type="file" class="form-control" name="gallery_images[]"
                                            placeholder="Gallery Images" value="{{ $clinics->gallery_images }}" multiple>
                                        @error('gallery_images')
                                            <span style="color: red">{{ $message }}</span>
                                        @enderror
                                    </div>
                                    {{-- display gallery images --}}
                                    <div class="form-group">
                                        <div class="image-section">
                                            @foreach ($clinics->images()->get() as $image)
                                                <div class="image">
                                                    <a class="deleteRecord"
                                                        href="{{ route('admin.destroyGalleryImage', $image->id) }}">
                                                        <i class="fa fa-times" aria-hidden="true"></i>
                                                    </a>
                                                    <img src="{{ asset("storage/$image->gallery_path") }}"
                                                        height="50px">
                                                </div>
                                            @endforeach
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label for="Banner">Banner<span style="color: red">*</span></label>
                                        <input type="file" class="form-control" id="banner" name="banner"
                                            placeholder="Banner" value="{{ $clinics->banner }}">
                                        @error('banner')
                                            <span style="color: red">{{ $message }}</span>
                                        @enderror
                                    </div>
                                    {{-- banner image  --}}
                                    <div class="form-group">
                                        <div class="image-section">
                                            <div class="image">
                                                <img src="{{ asset("storage/$clinics->banner") }}" height="50px">
                                            </div>
                                        </div>
                                    </div>
                                    {{-- <div class="form-group">
                                        <label for="Video">Video<span style="color: red">*</span></label>
                                        <input type="file" class="form-control" id="video" name="video"
                                            value="{{ $clinics->video_link }}" placeholder="Video">
                                        @error('video')
                                            <span class="error">{{ $message }}</span>
                                        @enderror
                                    </div>
                                    video display 
                                    <div class="form-group">
                                        <div class="image-section">
                                            <div class="image">
                                                <video width="220" height="140" controls>
                                                    <source src={{ asset("storage/$clinics->video_link") }}
                                                        type="video/mp4">
                                                </video>
                                            </div>
                                        </div>
                                    </div> --}}

                                    <div class="form-group">
                                        <label for="Video">Videos<span style="color: red">*</span></label>
                                        <input type="file" class="form-control" id="videos" name="videos[]"
                                            multiple placeholder="Videos" value="{{ $clinics->videos }}">
                                    </div>
                                    <div class="form-group">
                                        <div class="image-section">
                                            @foreach ($clinics->videos()->get() as $video)
                                                <div class="image">
                                                    <a class="deleteRecord"
                                                        href="{{ route('admin.destroyVideo', $video->id) }}">
                                                        <i class="fa fa-times" aria-hidden="true"></i>
                                                    </a>
                                                    <video width="220" height="140" controls>
                                                        <source src="{{ asset("storage/$video->video_path") }}"
                                                            type="video/mp4">
                                                    </video>
                                                </div>
                                            @endforeach
                                        </div>
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
                                    @php
                                        $existing_services = $clinics
                                            ->services()
                                            ->pluck('service_id')
                                            ->toArray();
                                            // dd( $existing_services)
                                    @endphp
                                    @foreach ($services as $service)
                                        <input type="checkbox" id="{{ $service->name }}" name="service_id[]"
                                            value="{{ $service->id }}" @if (in_array($service->id, $existing_services)) checked @endif>
                                        <label for="{{ $service->name }}">{{ $service->name }}</label><br>
                                    @endforeach
                                </div>
                                @error('service_id')
                                    <span style="color: red">{{ $message }}</span>
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
                                    @php
                                        $existing_plans = $clinics
                                            ->plans()
                                            ->pluck('plan_id')
                                            ->toArray();
                                    @endphp
                                    @foreach ($plans as $plan)
                                        <input type="checkbox" id="{{ $plan->name }}" name="plan_id[]"
                                            value="{{ $plan->id }}" @if (in_array($plan->id, $existing_plans)) checked @endif>
                                        <label for="{{ $plan->name }}">{{ $plan->name }}</label><br>
                                    @endforeach
                                </div>
                                @error('plan_id')
                                    <span style="color: red">{{ $message }}</span>
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
                                    @php
                                        $existing_advantages = $clinics
                                            ->advantages()
                                            ->pluck('advantage_id')
                                            ->toArray();
                                    @endphp
                                    @foreach ($advantages as $advantage)
                                        <input type="checkbox" id="{{ $advantage->name }}" name="advantage_id[]"
                                            value="{{ $advantage->id }}" @if (in_array($advantage->id, $existing_advantages)) checked @endif>
                                        <label for="{{ $advantage->name }}">{{ $advantage->name }}</label><br>
                                    @endforeach
                                </div>
                                @error('advantage_id')
                                    <span style="color: red">{{ $message }}</span>
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
                                    @php
                                        $existing_advantages_top_list = $clinics
                                            ->advantagesToList()
                                            ->pluck('advantage_id')
                                            ->toArray();
                                    @endphp
                                    @foreach ($advantages as $advantage)
                                        <input type="checkbox" id="{{ $advantage->name }}" name="advantage_to_list_id[]"
                                            value="{{ $advantage->id }}" @if (in_array($advantage->id, $existing_advantages_top_list)) checked @endif>
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
                                            value="{{ $clinics->covid_update }}" placeholder="Covid 19 Update">
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
                                            placeholder="Meta title" value="{{ $clinics->meta_title }}">
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
                                            placeholder="Meta Description" value="">{{ $clinics->meta_description }}</textarea>
                                        @error('meta_description')
                                            <span class="error">{{ $message }}</span>
                                        @enderror
                                    </div>
                                </div>
                                <div class="form-group">
                                    <div class="form-group">
                                        <label for="Meta Keywords">Meta Keywords<span style="color: red">*</span></label>
                                        <textarea class="form-control" rows="8" id="meta_keywords" name="meta_keywords" placeholder="Meta Keywords"
                                            value="">{{ $clinics->meta_keywords }}</textarea>
                                        @error('meta_keywords')
                                            <span class="error">{{ $message }}</span>
                                        @enderror
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div>
                </div>
                <button type="submit" class="btn btn-danger btn-sm">Submit</button>
            </form>
        </div>
    </div>
@endsection
@push('scripts')
    <script>
        $('.deleteRecord').on('click', function() {
            // var id = $(this).data('id');
            if (confirm('Are you sure you want to delete this?')) {
                return true;
                // $('#' + id + '').submit();
            }
            return false;
        })
    </script>
    <script>
        $('.slug').on('change', function() {
            var val = $(this).val();
            var slug = val.replace(/\s+/g, "-");
            $('#slug').val(slug.toLowerCase());
        });
    </script>
@endpush
