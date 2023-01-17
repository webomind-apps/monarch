@extends('admin.layout.master')

@section('page-contents')
    <div>
        <div class="row">
            <div class="col-lg-10 mx-auto">
                <form method="POST" action="{{ route('admin.location.update', $location->id) }}">
                    @method('PATCH')
                    @csrf
                    <div class="form-group">
                        <label for="LocationName">Location<span style="color: red">*</span></label>
                        <input type="text" class="form-control" id="name" name="name" value="{{ $location->name }}"
                            placeholder="Location" required>
                    </div>
                    <button type="submit" class="btn btn-danger btn-sm">Submit</button>
            </div>
        </div>
        </form>
    </div>
@endsection
