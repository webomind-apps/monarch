@extends('admin.layout.master')

@section('page-contents')
    <div>
        <div class="row">
            <div class="col-lg-10 mx-auto">
                <form method="POST" action="{{ route('admin.careers.index') }}">
                    @csrf
                    <div class="form-group">
                        <div class="form-group">
                            <label for="Position">Position</label>
                            <input type="text" class="form-control" value="{{ $careers->position }}" placeholder="Title"
                                readonly>
                        </div>
                        <div class="form-group">
                            <label for="Title">Name</label>
                            <input type="text" class="form-control"
                                value="{{ $careers->first_name }} {{ $careers->last_name }}" placeholder="Title" readonly>
                        </div>
                        <div class="form-group">
                            <label for="Title">Phone Number</label>
                            <input type="text" class="form-control" value="{{ $careers->phone_number }}"
                                placeholder="Title" readonly>
                        </div>
                        <div class="form-group">
                            <label for="Title">Email</label>
                            <input type="text" class="form-control" value="{{ $careers->email }}" placeholder="Title"
                                readonly>
                        </div>
                        <div class="form-group">
                            <label for="Title">Resume</label>
                            <embed src={{ asset("storage/$careers->file_path") }} type="application/pdf" height="300px"
                                width="100%">
                        </div>
                    </div>
                </form>
                <button class="btn btn-sm btn-info">
                    <a href="{{ route('admin.careers.index') }}">
                        <i class="fa fa-arrow-left"></i>
                    </a>
                </button>
            </div>
        </div>
    </div>
@endsection
