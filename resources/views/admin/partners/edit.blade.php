@extends('admin.layout.master')

@section('page-contents')
    <div>
        <div class="row">
            <div class="col-lg-10 mx-auto">
                <form method="POST" action="{{ route('admin.partners.update', $partner->id) }}" enctype="multipart/form-data">
                    @method('PATCH')
                    @csrf
                    <div class="form-group">
                        <div class="form-group">
                            <label for="Title">Title<span style="color: red">*</span></label>
                            <input type="text" class="form-control" id="title" name="title" placeholder="Title"
                                value="{{ $partner->title }}" required>
                        </div>
                        <div class="form-group">
                            <label for="partner">partner<span style="color: red">*</span></label>
                            <input type="file" class="form-control" id="image" name="image" placeholder="image">
                        </div>
                        <div class="form-group">
                            <div class="image-section">
                                <div class="image">
                                    <img src="{{ asset("storage/$partner->image") }}" height="100px">
                                </div>
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="Position">Position<span style="color: red">*</span></label>
                            <input type="text" class="form-control" id="position" name="position" placeholder="Position"
                                value="{{ $partner->position }}">
                        </div>
                        <div class="form-group">
                            <label for="Url">Url<span style="color: red">*</span></label>
                            <input type="text" class="form-control" id="url" name="url" placeholder="Url"
                                value="{{ $partner->url }}">
                        </div>
                    </div>
                    <button type="submit" class="btn btn-danger btn-sm">Submit</button>
            </div>
        </div>
        </form>
    </div>
@endsection
