@extends('admin.layout.master')

@section('page-contents')
    <div>
        <div class="row">
            <div class="col-lg-10 mx-auto">
                <form method="POST" action="{{ route('admin.services.update', $services->id) }}"
                    enctype="multipart/form-data">
                    @method('PATCH')
                    @csrf
                    <div class="form-group">
                        <div class="form-group">
                            <label for="Title">Title<span style="color: red">*</span></label>
                            <input type="text" class="form-control slug" id="title" name="title"
                                value="{{ $services->name }}" placeholder="Title" required>
                        </div>
                        <div class="form-group">
                            <label for="Slug">Slug<span style="color: red">*</span></label>
                            <input type="text" class="form-control" id="slug" name="slug" placeholder="Slug"
                                value="{{ $services->slug }}" readonly>
                        </div>
                        <div class="form-group">
                            <label for="Title">Icon<span style="color: red">*</span></label>
                            <input type="file" class="form-control" id="icon" name="icon"
                                value="{{ $services->icon_path }}" placeholder="Icon">
                        </div>
                        <div class="form-group">
                            <div class="image-section">
                                <div class="image"> <img src="{{ asset("storage/$services->icon_path") }}" height="50px">
                                </div>
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="Title">Banner<span style="color: red">*</span></label>
                            <input type="file" class="form-control" id="banner" name="banner" placeholder="Banner">
                        </div>
                        <div class="form-group">
                            <div class="image-section">
                                <div class="image"> <img src="{{ asset("storage/$services->banner_path") }}"
                                        height="50px">
                                </div>
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="Images">Image<span style="color: red">*</span></label>
                            <input type="file" class="form-control" id="image" name="image" placeholder="Image"
                                multiple>
                        </div>
                        <div class="form-group">
                            <div class="image-section">
                                <div class="image"> <img src="{{ asset("storage/$services->images") }}" height="50px">
                                </div>
                            </div>
                        </div>
                        {{-- <div class="form-group">
                            <label for="URL">URL<span style="color: red">*</span></label>
                            <input type="text" class="form-control" id="url" name="url"
                                value="{{ $services->url }}" placeholder="URL">
                        </div> --}}
                        <div class="form-group">
                            <label for="Title">Short Description<span style="color: red">*</span></label>
                            <textarea class="form-control" id="description" name="description" placeholder="Description">{{ $services->description }}</textarea>
                        </div>
                        <div class="form-group">
                            <label for="Title">Long Description</label>
                            <textarea class="form-control" id="long_description" name="long_description" placeholder="Description">{{ $services->long_description }}</textarea>
                        </div>
                        <div class="form-group">
                            <label for="For home page">For home page &nbsp;</label>
                            <input type="checkbox" id="in_homepage" name="in_homepage" value="1"  @if ($services->in_homepage) checked @endif>
                        </div>
                    </div>
                    <button type="submit" class="btn btn-danger btn-sm">Submit</button>
            </div>
        </div>
        </form>
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
