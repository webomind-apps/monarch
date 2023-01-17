@extends('admin.layout.master')
@section('page-contents')
    <div class="d-sm-flex align-items-center justify-content-between mb-4">
        <h1 class="h3 mb-0 text-gray-800">Add Financials Details</h1>
        {{-- <a href="#" class="d-none d-sm-inline-block btn btn-sm btn-primary shadow-sm"><i
                        class="fas fa-download fa-sm text-white-50"></i> Generate Report</a> --}}
    </div>
    <div>
        <div class="row">
            <div class="col-lg-10 mx-auto">
                <form method="POST"
                    action=@if ($financials) {{ route('admin.financials.update', $financials->id) }} @else {{ route('admin.financials.store') }} @endif
                    enctype="multipart/form-data">
                    @if ($financials)
                        @method('PATCH')
                    @endif
                    @csrf <div class="form-group">
                        <div class="form-group">
                            <label for="Title">Title<span style="color: red">*</span></label>
                            <input type="text" class="form-control" id="title" name="title" placeholder="Title"
                                value="{{ $financials ? $financials->title : '' }}">
                            @error('title')
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
                        @if ($financials)
                            <div class="form-group">
                                <div class="image-section">
                                    <div class="image"> <img src="{{ asset("storage/$financials->banner") }}"
                                            height="50px">
                                    </div>
                                </div>
                            </div>
                        @endif
                        <div class="form-group">
                            <label for="Image">Image<span style="color: red">*</span></label>
                            <input type="file" class="form-control" id="image" name="image" placeholder="Image">
                            @error('image')
                                <span class="error">{{ $message }}</span>
                            @enderror
                        </div>
                        @if ($financials)
                            <div class="form-group">
                                <div class="image-section">
                                    <div class="image"> <img src="{{ asset("storage/$financials->image") }}"
                                            height="50px">
                                    </div>
                                </div>
                            </div>
                        @endif
                        <div class="form-group">
                            <label for="Description">Description<span style="color: red">*</span></label>
                            {{-- <input type="text" class="form-control" id="description" name="description" placeholder="Title"  value="{{$financials ? $financials->description : ''}}"> --}}
                            <textarea class="form-control" rows="8" id="description" name="description" placeholder="Description"
                                value="">{{ $financials ? $financials->description : '' }}</textarea>
                            @error('description')
                                <span class="error">{{ $message }}</span>
                            @enderror
                        </div>
                        <label for="SEO">SEO content<span style="color: red">*</span></label>
                        <div class="form-group">
                            <label for="Meta title">Meta title<span style="color: red">*</span></label>
                            <input type="text" class="form-control" id="meta_title" name="meta_title"
                                value="{{ $financials ? $financials->meta_title : '' }}" placeholder="Meta title">
                            @error('meta_title')
                                <span class="error">{{ $message }}</span>
                            @enderror
                        </div>
                        <div class="form-group">
                            <label for="Meta Description">Meta Description<span style="color: red">*</span></label>
                            <textarea class="form-control" rows="8" id="meta_description" name="meta_description"
                                placeholder="Meta Description">{{ $financials ? $financials->meta_description : '' }}</textarea>
                            @error('meta_description')
                                <span class="error">{{ $message }}</span>
                            @enderror
                        </div>
                        <div class="form-group">
                            <div class="form-group">
                                <label for="Meta Keywords">Meta Keywords<span style="color: red">*</span></label>
                                <textarea class="form-control" rows="8" id="meta_keywords" name="meta_keywords" placeholder="Meta Keywords">{{ $financials ? $financials->meta_keywords : '' }}</textarea>
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
