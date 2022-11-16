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
                                Banners
                            </button>
                        </h2>
                        <div id="collapseOne" class="accordion-collapse collapse show" aria-labelledby="headingOne">
                            <div class="accordion-body" id="add-form">
                                <div class="form-group">
                                    <label for="Title">Title<span style="color: red">*</span></label>
                                    <input type="text" class="form-control" id="title" name="title"
                                        placeholder="Title">
                                    @error('title')
                                        <span class="error">{{ $message }}</span>
                                    @enderror
                                </div>
                                <div class="form-group">
                                    <label for="Banners">Banners<span style="color: red">*</span></label>
                                    <input type="file" class="form-control" id="banner" name="banner"
                                        placeholder="Banner">
                                    @error('banner')
                                        <span class="error">{{ $message }}</span>
                                    @enderror
                                </div>
                                <div class="form-group">
                                    <label for="Url">Url<span style="color: red">*</span></label>
                                    <input type="text" class="form-control" id="url" name="url"
                                        placeholder="Url">
                                    @error('url')
                                        <span class="error">{{ $message }}</span>
                                    @enderror
                                </div>
                                <div class="form-group">
                                    <label for="Position">Position<span style="color: red">*</span></label>
                                    <input type="text" class="form-control" id="position" name="position"
                                        placeholder="Position">
                                    @error('position')
                                        <span class="error">{{ $message }}</span>
                                    @enderror
                                </div>
                            </div>
                            <div id="myList2"></div>
                        </div>
                    </div>
                    <div class="accordion-item">
                        <h2 class="accordion-header" id="headingOne">
                            <button class="accordion-button" type="button" data-bs-toggle="collapse"
                                data-bs-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
                                Advantages
                            </button>
                        </h2>
                        <div id="collapseOne" class="accordion-collapse collapse show" aria-labelledby="headingOne">
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
                        <h2 class="accordion-header" id="headingOne">
                            <button class="accordion-button" type="button" data-bs-toggle="collapse"
                                data-bs-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
                                Services
                            </button>
                        </h2>
                        <div id="collapseOne" class="accordion-collapse collapse show" aria-labelledby="headingOne">
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
                        <h2 class="accordion-header" id="headingOne">
                            <button class="accordion-button" type="button" data-bs-toggle="collapse"
                                data-bs-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
                                Plans
                            </button>
                        </h2>
                        <div id="collapseOne" class="accordion-collapse collapse show" aria-labelledby="headingOne">
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
                        <h2 class="accordion-header" id="headingOne">
                            <button class="accordion-button" type="button" data-bs-toggle="collapse"
                                data-bs-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
                                Our partners
                            </button>
                        </h2>
                        <div id="collapseOne" class="accordion-collapse collapse show" aria-labelledby="headingOne">
                            <div class="accordion-body">
                                <div class="form-group">
                                    <label for="Partners Logo">Partners Logo<span style="color: red">*</span></label>
                                    <input type="file" class="form-control" id="partners_logo" name="partners_logo[]"
                                        placeholder="partners_logo">
                                    @error('partners_logo')
                                        <span class="error">{{ $message }}</span>
                                    @enderror
                                </div>
                                @error('partners_logo')
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
                                Who we are<span style="color: red">*</span>
                            </button>
                        </h2>
                        <div id="collapseThree" class="accordion-collapse collapse show" aria-labelledby="headingThree">
                            <div class="accordion-body">
                                <div class="form-group">
                                    <div class="form-group">
                                        <label for="Image">Image<span style="color: red">*</span></label>
                                        <input type="file" class="form-control" id="image" name="image"
                                            placeholder="image">
                                        @error('image')
                                            <span class="error">{{ $message }}</span>
                                        @enderror
                                    </div>
                                    <div class="form-group">
                                        <input type="text" class="form-control" id="description" name="description"
                                            value="{{ old('description') }}" placeholder="Description">
                                        @error('description')
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
