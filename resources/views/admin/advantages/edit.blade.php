@extends('admin.layout.master')

@section('page-contents')
    <div>
        <div class="row">
            <div class="col-lg-10 mx-auto">
                <form method="POST" action="{{ route('admin.advantages.update', $advantage->id) }}"
                    enctype="multipart/form-data">
                    @method('PATCH')
                    @csrf
                    <div class="form-group">
                        <div class="form-group">
                            <label for="Title">Title<span style="color: red">*</span></label>
                            <input type="text" class="form-control" id="name" name="name"
                                value="{{ $advantage->name }}" placeholder="Title" required>
                        </div>
                        <div class="form-group">
                            <label for="Title">Icon<span style="color: red">*</span></label>
                            <input type="file" class="form-control" id="icon" name="icon"
                                value="{{ $advantage->icon_path }}" placeholder="Icon">
                        </div>
                        <div class="form-group">
                            <label for="Title">Description<span style="color: red">*</span></label>
                            <textarea class="form-control" id="description" name="description" placeholder="Description">{{ $advantage->description }}</textarea>
                        </div>
                        <div class="form-group">
                            <label for="For home page">For home page &nbsp;</label>
                            <input type="checkbox" id="in_homepage" name="in_homepage" value="1"
                                @if ($advantage->in_homepage) checked @endif>
                        </div>
                    </div>
                    <div>
                        <img src="{{ asset("storage/$advantage->icon_path") }}" height="100px">
                    </div>
                    <button type="submit" class="btn btn-danger btn-sm">Submit</button>
            </div>
        </div>
        </form>
    </div>
@endsection
