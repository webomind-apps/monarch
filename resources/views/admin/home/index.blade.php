@extends('admin.layout.master')

@section('page-contents')
    <div>
        <a class="btn btn-danger btn-sm" href="{{ route('admin.home.create') }}">
            Add
        </a>
    </div>
@endsection
