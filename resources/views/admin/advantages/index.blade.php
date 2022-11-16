@extends('admin.layout.master')

@section('page-contents')
    <div>
        <a class="btn btn-danger btn-sm" href="{{ route('admin.advantages.create') }}">
            Add
        </a>
    </div>

    <div class="table-detail">
        <table class="table table-hover">
            <thead>
                <tr>
                    <th scope="col">#</th>
                    <th scope="col">Icon</th>
                    <th scope="col">Advantage</th>
                    <th scope="col">Action</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($advantages as $index => $advantage)
                <tr>
                    <th scope="row">{{ $advantages->firstItem() + $index  }}</th>
                        <td id="icon-img"><img src="{{ asset("storage/$advantage->icon_path") }}" height="50px"></td>

                        <td>{{ $advantage->name }}</td>
                        <td>
                            <a href="{{ route('admin.advantages.edit', $advantage->id) }}">
                                <i class="fas fa-edit"></i>
                            </a>

                            <a class="deleteRecord" data-id="form-submit-{{ $advantage->id }}"
                                data-route="{{ route('admin.advantages.destroy', $advantage->id) }}">
                                <i class="fas fa-trash" style="color:rgb(255, 23, 23)"></i>
                            </a>

                            <form method="POST" id="form-submit-{{ $advantage->id }}"
                                action="{{ route('admin.advantages.destroy', $advantage->id) }}" hidden>
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
        {{ $advantages->links('pagination::bootstrap-4')}}
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
