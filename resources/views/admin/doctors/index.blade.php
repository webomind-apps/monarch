@extends('admin.layout.master')

@section('page-contents')
    <div>
        <a class="btn btn-danger btn-sm" href="{{ route('admin.doctors.create') }}">
            Add
        </a>
    </div>

    <div class="table-detail">
        <table class="table table-hover">
            <thead>
                <tr>
                    <th scope="col">#</th>
                    <th scope="col">Name</th>
                    <th scope="col">Image</th>
                    <th scope="col">Designation</th>
                    <th scope="col">Action</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($doctors as $index => $doctor)
                    <tr>
                        <th scope="row">{{ $doctors->firstItem() + $index }}</th>
                        <td>{{ $doctor->name }}</td>
                        <td><img src="{{ asset("storage/$doctor->image")}}" alt="image"></td>
                        <td>{{ $doctor->designation }}</td>
                        <td>
                            <a href="{{ route('admin.doctors.edit', $doctor->id) }}">
                                <i class="fas fa-edit"></i>
                            </a>

                            <a class="deleteRecord" data-id="form-submit-{{ $doctor->id }}"
                                data-route="{{ route('admin.doctors.destroy', $doctor->id) }}">
                                <i class="fas fa-trash" style="color:rgb(255, 23, 23)"></i>
                            </a>

                            <form method="POST" id="form-submit-{{ $doctor->id }}"
                                action="{{ route('admin.doctors.destroy', $doctor->id) }}" hidden>
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
        {{ $doctors->links('pagination::bootstrap-4')}}
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
