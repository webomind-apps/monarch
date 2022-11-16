@extends('admin.layout.master')

@section('page-contents')
    <div>
        <div class="row">
            <div class="col-lg-10 mx-auto">
                <form method="POST" action="{{ route('admin.query.index') }}">
                    @csrf
                    <div class="form-group">
                        <div class="form-group">
                            <label for="Title">Name</label>
                            <input type="text" class="form-control" value="{{ $query->first_name }} {{ $query->first_name }}" readonly>
                        </div>
                        <div class="form-group">
                            <label for="Clinic">Clinic</label>
                            <input type="text" class="form-control" value="{{ $query->clinic->name }}" readonly>
                        </div>
                        <div class="form-group">
                            <label for="phone number">Phone Number</label>
                            <input type="text" class="form-control" value="{{ $query->phone_number }}" readonly>
                        </div>
                        <div class="form-group">
                            <label for="email">Email</label>
                            <input type="text" class="form-control" value="{{ $query->email }}" readonly>
                        </div>
                        <div class="form-group">
                            <label for="message">Message</label>
                            <textarea class="form-control" rows="8" readonly>{{ $query->message }}</textarea>
                        </div>
                    </div>
                </form>
                <a href="{{ route('admin.query.index') }}">
                    <button class="btn btn-sm btn-info">
                        <i class="fa fa-arrow-left"></i>
                    </button>
                </a>
            </div>
        </div>
    </div>
@endsection
