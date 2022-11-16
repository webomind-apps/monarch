@extends('admin.layout.master')

@section('page-contents')
    <div>
        <a class="btn btn-danger btn-sm" href="{{ route('admin.partners.create') }}">
            Add
        </a>
    </div>
    <div class="table-detail">
        <table class="table table-hover">
            <thead>
                <tr>
                    <th scope="col">#</th>
                    <th scope="col">Title</th>
                    <th scope="col">Logo</th>
                    <th scope="col">Position</th>
                    <th scope="col">Action</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($partners as $index => $partner)
                    <tr>
                        <th scope="row">{{ $partners->firstItem() + $index }}</th>
                        <td>{{ $partner->title }}</td>
                        <td><img src="{{ asset("storage/$partner->image")}}" ></td>
                        <td>{{ $partner->position }}</td>
                        <td>
                            <a href="{{ route('admin.partners.edit', $partner->id) }}">
                                <i class="fas fa-edit"></i>
                            </a>
                            <a class="deleteRecord" data-id="form-submit-{{ $partner->id }}"
                                data-route="{{ route('admin.partners.destroy', $partner->id) }}">
                                <i class="fas fa-trash" style="color:rgb(255, 23, 23)"></i>
                            </a>
                            <form method="POST" id="form-submit-{{ $partner->id }}"
                                action="{{ route('admin.partners.destroy', $partner->id) }}" hidden>
                                @method('DELETE')
                                @csrf
                                <button type="submit"><i class="fas fa-trash"></i></button>
                            </form>
                        </td>
                    </tr>
                @endforeach
                @if (session()->has('message'))
                    <div class="alert alert-success">
                        {{ session()->get('message') }}
                    </div>
                @endif
            </tbody>
        </table>
        {{ $partners->links('pagination::bootstrap-4')}}
    </div>
@endsection
@push('scripts')
    <script>
        $('.deleteRecord').on('click', function() {
            var id = $(this).data('id');
            if (confirm('Are you sure you want to delete this?')) {
                $('#' + id + '').submit();
            }
        })
        $(document).ready(function() {
            $(".alert").fadeTo(2000, 500).slideUp(500, function() {
                $(".alert").slideUp(400);
            });
        })
    </script>
@endpush
