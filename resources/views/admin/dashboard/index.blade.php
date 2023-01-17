@extends('admin.layout.master')

@section('page-contents')
    <!-- Page Heading -->
    <div class="d-sm-flex align-items-center justify-content-between mb-4">
        <h1 class="h3 mb-0 text-gray-800">Dashboard</h1>
        {{-- <a href="#" class="d-none d-sm-inline-block btn btn-sm btn-primary shadow-sm"><i
                                class="fas fa-download fa-sm text-white-50"></i> Generate Report</a> --}}
    </div>

    <!-- Content Row -->
    <div class="row">
        <div class="col-xl-3 col-md-6 mb-4">
            <a href="{{ route('admin.clinics.index') }}">
                <div class="card border-left-primary shadow h-100 py-2">
                    <div class="card-body">
                        <div class="row no-gutters align-items-center">
                            <div class="col mr-2">
                                <div class="text-xs font-weight-bold text-primary text-uppercase mb-1">
                                    Number of Clinics</div>
                                <div class="h5 mb-0 font-weight-bold text-gray-800">{{ $numberOfClinics }}</div>
                            </div>
                            <div class="col-auto">
                                <i class="fa fa-building fa-2x text-gray-300"></i>
                            </div>
                        </div>
                    </div>
                </div>
            </a>
        </div>
        @if (Auth::user()->admin_type == 1)
            <div class="col-xl-3 col-md-6 mb-4">
                <a href="{{ route('admin.location.index') }}">
                    <div class="card border-left-success shadow h-100 py-2">
                        <div class="card-body">
                            <div class="row no-gutters align-items-center">
                                <div class="col mr-2">
                                    <div class="text-xs font-weight-bold text-success text-uppercase mb-1">
                                        Number of Locations</div>
                                    <div class="h5 mb-0 font-weight-bold text-gray-800">{{ $numberOfLocations }}</div>
                                </div>
                                <div class="col-auto">
                                    <i class="fas fa fa-map-marker fa-2x text-gray-300"></i>
                                </div>
                            </div>
                        </div>
                    </div>
                </a>
            </div>
        @endif
        <div class="col-xl-3 col-md-6 mb-4">
            <a href="{{ route('admin.enquiry.index') }}">
                <div class="card border-left-success shadow h-100 py-2">
                    <div class="card-body">
                        <div class="row no-gutters align-items-center">
                            <div class="col mr-2">
                                <div class="text-xs font-weight-bold text-success text-uppercase mb-1">
                                    Appointments</div>
                                <div class="h5 mb-0 font-weight-bold text-gray-800">{{ $numberOfappointments }}</div>
                            </div>
                            <div class="col-auto">
                                <i class="fa fa-calendar fa-2x text-gray-300"></i>
                            </div>
                        </div>
                    </div>
                </div>
            </a>
        </div>
        @if (Auth::user()->admin_type == 1)
            <div class="col-xl-3 col-md-6 mb-4">
                <a href="{{ route('admin.careers.index') }}">
                    <div class="card border-left-success shadow h-100 py-2">
                        <div class="card-body">
                            <div class="row no-gutters align-items-center">
                                <div class="col mr-2">
                                    <div class="text-xs font-weight-bold text-success text-uppercase mb-1">
                                        Career forms</div>
                                    <div class="h5 mb-0 font-weight-bold text-gray-800">{{ $numberOfcareersforms }}</div>
                                </div>
                                <div class="col-auto">
                                    <i class="fa fa-user-md fa-2x text-gray-300"></i>
                                </div>
                            </div>
                        </div>
                    </div>
                </a>
            </div>
        @endif
    </div>


    {{-- @foreach ($clinics as $clinic) 
        <h5>{{ $clinic->name }}</h5>
    @endforeach --}}
@endsection
