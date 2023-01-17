@extends('admin.layout.master')

@section('page-contents')
    <div class="d-sm-flex align-items-center justify-content-between mb-4">
        <h1 class="h3 mb-0 text-gray-800">Add location</h1>
        {{-- <a href="#" class="d-none d-sm-inline-block btn btn-sm btn-primary shadow-sm"><i
                            class="fas fa-download fa-sm text-white-50"></i> Generate Report</a> --}}
    </div>
    <div class="row">
        <div class="col-lg-10 mx-auto">
            <form method="POST" action="{{ route('admin.blogs.store') }}" enctype="multipart/form-data">
                @method('POST')
                @csrf
                <div class="form-group">
                    <label for="LocationName">Blog Category<span style="color: red">*</span></label>
                    <select name="blog_category_id" class="form-control">
                        <option value="">Select</option>
                        @foreach ($blog_categories as $blog_category)
                            <option value="{{ $blog_category->id }}" id="{{ $blog_category->id }}"
                                {{ request('blog_category') == $blog_category->id ? 'selected' : '' }}>
                                {{ $blog_category->blog_category }} </option>
                        @endforeach
                    </select>
                    @error('blog_category_id')
                        <span class="error">{{ $message }}</span>
                    @enderror
                </div>
                <div class="form-group">
                    <label for="TitleName">Title<span style="color: red">*</span></label>
                    <input type="text" class="form-control slug" id="title" name="title" placeholder="Title"
                        value="{{ old('title') }}">
                    @error('title')
                        <span class="error">{{ $message }}</span>
                    @enderror
                </div>
                <div class="form-group">
                    <label for="Slug">Slug<span style="color: red">*</span></label>
                    <input type="text" class="form-control" id="slug" name="slug" placeholder="Slug"
                        value="{{ old('slug') }}" readonly>
                </div>
                <div class="form-group">
                    <label for="Image">Image<span style="color: red">*</span></label>
                    <input type="file" class="form-control" id="image" name="image" placeholder="Image">
                    @error('image')
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
                <div class="form-group">
                    <label for="Date">Date<span style="color: red">*</span></label>
                    <input type="date" class="form-control" id="date" name="date" placeholder="Date">
                    @error('date')
                        <span class="error">{{ $message }}</span>
                    @enderror
                </div>
                <div class="form-group">
                    <label for="Short Description">Short Description<span style="color: red">*</span></label>
                    <input type="text" class="form-control" id="short_description" name="short_description"
                        placeholder="Short Description">
                    @error('short_description')
                        <span class="error">{{ $message }}</span>
                    @enderror
                </div>
                <div class="form-group">
                    <label for="Long Description">Long Description<span style="color: red">*</span></label>
                    <input type="text" class="form-control" id="short_description" name="long_description"
                        placeholder="Long Description">
                    @error('long_description')
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
