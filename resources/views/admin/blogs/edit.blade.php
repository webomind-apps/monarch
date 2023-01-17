@extends('admin.layout.master')

@section('page-contents')
    <div class="d-sm-flex align-items-center justify-content-between mb-4">
        <h1 class="h3 mb-0 text-gray-800">Add Blogs</h1>
        {{-- <a href="#" class="d-none d-sm-inline-block btn btn-sm btn-primary shadow-sm"><i
                            class="fas fa-download fa-sm text-white-50"></i> Generate Report</a> --}}
    </div>
    <div class="row">
        <div class="col-lg-10 mx-auto">
            <form method="POST" action="{{ route('admin.blogs.update', $blog->id) }}" enctype="multipart/form-data">
                @method('PATCH')
                @csrf
                <div class="form-group">
                    <label for="LocationName">Blog Category<span style="color: red">*</span></label>
                    <select name="blog_category_id" class="form-control">
                        <option value="">Select</option>
                        @foreach ($blog_categories as $blog_category)
                            <option value="{{ $blog_category->id }}" id="{{ $blog_category->id }}"
                                @if ($blog_category->id == $blog->blog_category_id) selected @endif>
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
                        value="{{ $blog->title }}" required>
                </div>

                <div class="form-group">
                    <label for="Slug">Slug<span style="color: red">*</span></label>
                    <input type="text" class="form-control" id="slug" name="slug" placeholder="Slug"
                        value="{{ $blog->slug }}" readonly>
                </div>

                <div class="form-group">
                    <label for="Image">Image<span style="color: red">*</span></label>
                    <input type="file" class="form-control" id="image" name="image" placeholder="Image">
                </div>

                <div class="form-group">
                    <div class="image-section">
                        <div class="image">
                            <img src="{{ asset("storage/$blog->image") }}" height="100px">
                        </div>
                    </div>
                </div>

                <div class="form-group">
                    <label for="Banner">Banner<span style="color: red">*</span></label>
                    <input type="file" class="form-control" id="banner" name="banner" placeholder="Banner">
                </div>

                <div class="form-group">
                    <div class="image-section">
                        <div class="image">
                            <img src="{{ asset("storage/$blog->banner") }}" height="100px">
                        </div>
                    </div>
                </div>

                <div class="form-group">
                    <label for="Date">Date<span style="color: red">*</span></label>
                    <input type="date" class="form-control" id="date" name="date" placeholder="Date"
                        value="{{ $blog->date }}">
                </div>

                <div class="form-group">
                    <label for="Short Description">Short Description<span style="color: red">*</span></label>
                    <input type="text" class="form-control" id="short_description" name="short_description"
                        placeholder="Short Description" value="{{ $blog->short_desription }}" required>
                </div>

                <div class="form-group">
                    <label for="Long Description">Long Description<span style="color: red">*</span></label>
                    <input type="text" class="form-control" id="short_description" name="long_description"
                        placeholder="Long Description" value="{{ $blog->long_desription }}" required>
                </div>

                <label for="SEO">SEO content<span style="color: red">*</span></label>
                <div class="form-group">
                    <label for="Meta title">Meta title<span style="color: red">*</span></label>
                    <input type="text" class="form-control" id="meta_title" name="meta_title"
                        value="{{ $blog->meta_title }}" placeholder="Meta title" required>
                </div>

                <div class="form-group">
                    <label for="Meta Description">Meta Description<span style="color: red">*</span></label>
                    <textarea class="form-control" rows="8" id="meta_description" name="meta_description"
                        placeholder="Meta Description" required>{{ $blog->meta_description }}</textarea>
                </div>

                <div class="form-group">
                    <div class="form-group">
                        <label for="Meta Keywords">Meta Keywords<span style="color: red">*</span></label>
                        <textarea class="form-control" rows="8" id="meta_keywords" name="meta_keywords" placeholder="Meta Keywords" required>{{ $blog->meta_keywords }}</textarea>
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
