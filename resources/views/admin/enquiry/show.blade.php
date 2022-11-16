@extends('admin.layout.master')

@section('page-contents')
    <div>
        <div class="row">
            <div class="col-lg-10 mx-auto">
                <form method="POST" action="{{ route('admin.enquiry.index') }}">
                    @csrf
                    <div class="form-group">
                        <div class="form-group">
                            <label for="Title">Name</label>
                            <input type="text" class="form-control" value="{{ $enquiry->full_name }}" readonly>
                        </div>
                        <div class="form-group">
                            <label for="Patient Type">Patient Type</label>
                            <input type="text" class="form-control" value="{{ $enquiry->patient_type }}" readonly>
                        </div>
                        <div class="form-group">
                            <label for="Title">Phone Number</label>
                            <input type="text" class="form-control" value="{{ $enquiry->phone_number }}" readonly>
                        </div>
                        <div class="form-group">
                            <label for="Preferred Time">Preferred Time</label>
                            <input type="text" class="form-control" value="{{ $enquiry->preferred_time }}" readonly>
                        </div>
                        <div class="form-group">
                            <label for="Preferred Date">Preferred Date</label>
                            <input type="text" class="form-control" value="{{ $enquiry->preferred_date }}" readonly>
                        </div>
                        <div class="form-group">
                            <label for="Title">Email</label>
                            <input type="text" class="form-control" value="{{ $enquiry->email }}" readonly>
                        </div>
                        <div class="form-group">
                            <label for="Title">Message</label>
                            <textarea class="form-control" rows="8" readonly>{{ $enquiry->message }}</textarea>
                        </div>
                    </div>
                </form>
                <a href="{{ route('admin.enquiry.index') }}">
                    <button class="btn btn-sm btn-info">
                        <i class="fa fa-arrow-left"></i>
                    </button>
                </a>
            </div>
        </div>
    </div>
@endsection
