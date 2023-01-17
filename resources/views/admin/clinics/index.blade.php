@extends('admin.layout.master')

@section('page-contents')
    @if (Auth::user()->admin_type == 1)
        <div>
            <a class="btn btn-danger btn-sm" href="{{ route('admin.clinics.create') }}">
                Add
            </a>
        </div>
    @endif

    <div class="table-detail">
        <table class="table table-hover">
            <thead>
                <tr>
                    <th scope="col">#</th>
                    <th scope="col">Name</th>
                    <th scope="col">Phone Number</th>
                    <th scope="col">Email</th>
                    <th scope="col">Action</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($clinics as $index => $clinic)
                    <tr>
                        <th scope="row">{{ $clinics->firstItem() + $index }}</th>
                        <td>{{ $clinic->name }}</td>
                        <td>{{ $clinic->phone_number }}</td>
                        <td>{{ $clinic->email }}</td>
                        <td>
                            <a href="{{ route('admin.clinics.edit', $clinic->id) }}">
                                <i class="fas fa-edit"></i>
                            </a>

                            <a class="deleteRecord" data-id="form-submit-{{ $clinic->id }}"
                                data-route="{{ route('admin.clinics.destroy', $clinic->id) }}">
                                <i class="fas fa-trash" style="color:rgb(255, 23, 23)"></i>
                            </a>

                            <form method="POST" id="form-submit-{{ $clinic->id }}"
                                action="{{ route('admin.clinics.destroy', $clinic->id) }}" hidden>
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
        {{ $clinics->links('pagination::bootstrap-4') }}
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
