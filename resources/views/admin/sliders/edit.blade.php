@extends('admin.layout.master')

@section('page-contents')
    <div>
        <div class="row">
            <div class="col-lg-10 mx-auto">
                <form method="POST" action="{{ route('admin.sliders.update', $slider->id) }}" enctype="multipart/form-data">
                    @method('PATCH')
                    @csrf
                    <div class="form-group">
                        <div class="form-group">
                            <label for="Title">Title<span style="color: red">*</span></label>
                            <input type="text" class="form-control" id="title" name="title" placeholder="Title"
                                value="{{ $slider->title }}" required>
                        </div>
                        <div class="form-group">
                            <label for="Note">Note<span style="color: red">*</span></label>
                            <input type="text" class="form-control" id="note" name="note" placeholder="Note"
                                value="{{ $slider->note }}">
                        </div>
                        <div class="form-group">
                            <label for="Slider">Slider<span style="color: red">*</span></label>
                            <input type="file" class="form-control" id="slider" name="slider" placeholder="Slider">
                        </div>
                        <div class="form-group">
                            <div class="image-section">
                                <div class="image">
                                    <img src="{{ asset("storage/$slider->slider") }}" height="100px">
                                </div>
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="Position">Position<span style="color: red">*</span></label>
                            <input type="text" class="form-control" id="position" name="position" placeholder="Position"
                                value="{{ $slider->position }}">
                        </div>
                        <div class="form-group">
                            <label for="Url">Url<span style="color: red">*</span></label>
                            <input type="text" class="form-control" id="url" name="url" placeholder="Url"
                                value="{{ $slider->url }}">
                        </div>
                    </div>
                    <button type="submit" class="btn btn-danger btn-sm">Submit</button>
            </div>
        </div>
        </form>
    </div>
@endsection
