@extends('admin.layout.master')
@section('page-contents')
    <div class="d-sm-flex align-items-center justify-content-between mb-4">
        <h1 class="h3 mb-0 text-gray-800">Add Promotion plans</h1>
    </div>
    <div>
        <div class="row">
            <div class="col-lg-10 mx-auto">
                <form method="POST"
                    action=@if ($promotions) {{ route('admin.promotions.update', $promotions->id) }} @else {{ route('admin.promotions.store') }} @endif
                    enctype="multipart/form-data">
                    @if ($promotions)
                        @method('PATCH')
                    @endif
                    @csrf
                    <div class="form-group">
                        <div class="form-group">
                            <label for="Title">Title<span style="color: red">*</span></label>
                            <input type="text" class="form-control" id="title" name="title" placeholder="Title"
                                value="{{ $promotions ? $promotions->title : '' }}">
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
                        @if ($promotions)
                            <div class="form-group">
                                <div class="image-section">
                                    <div class="image"> <img src="{{ asset("storage/$promotions->banner") }}"
                                            height="50px">
                                    </div>
                                </div>
                            </div>
                        @endif
                        <div class="form-group">
                            <label for="Plans">Plans<span style="color: red">*</span></label></br>
                            @if ($promotions == '')
                                @foreach ($plans as $plan)
                                    <input type="checkbox" id="{{ $plan->name }}" name="plan_id[]"
                                        value="{{ $plan->id }}">
                                    <label for="{{ $plan->name }}">{{ $plan->name }}</label><br>
                                @endforeach
                            @endif
                            @if ($promotions)
                                {{-- @else --}}
                                @php
                                    $existing_plans = $promotions
                                        ->promotions()
                                        ->pluck('plans_id')
                                        ->toArray();
                                @endphp
                                @foreach ($plans as $plan)
                                    <input type="checkbox" id="{{ $plan->name }}" name="plan_id[]"
                                        value="{{ $plan->id }}" @if (in_array($plan->id, $existing_plans)) checked @endif>
                                    <label for="{{ $plan->name }}">{{ $plan->name }}</label><br>
                                @endforeach
                            @endif
                        </div>
                        <label for="SEO">SEO content<span style="color: red">*</span></label>
                        <div class="form-group">
                            <label for="Meta title">Meta title<span style="color: red">*</span></label>
                            <input type="text" class="form-control" id="meta_title" name="meta_title"
                                value="{{ $promotions ? $promotions->meta_title : '' }}" placeholder="Meta title">
                            @error('meta_title')
                                <span class="error">{{ $message }}</span>
                            @enderror
                        </div>
                        <div class="form-group">
                            <label for="Meta Description">Meta Description<span style="color: red">*</span></label>
                            <textarea class="form-control" rows="8" id="meta_description" name="meta_description"
                                placeholder="Meta Description">{{ $promotions ? $promotions->meta_description : '' }}</textarea>
                            @error('meta_description')
                                <span class="error">{{ $message }}</span>
                            @enderror
                        </div>
                        <div class="form-group">
                            <div class="form-group">
                                <label for="Meta Keywords">Meta Keywords<span style="color: red">*</span></label>
                                <textarea class="form-control" rows="8" id="meta_keywords" name="meta_keywords" placeholder="Meta Keywords">{{ $promotions ? $promotions->meta_keywords : '' }}</textarea>
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
