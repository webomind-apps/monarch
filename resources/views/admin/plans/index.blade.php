@extends('admin.layout.master')

@section('page-contents')
    <div>
        <a class="btn btn-danger btn-sm" href="{{ route('admin.plans.create') }}">
            Add
        </a>
    </div>

    <div class="table-detail">
        <table class="table table-hover">
            <thead>
                <tr>
                    <th scope="col">#</th>
                    <th scope="col">Icon</th>
                    <th scope="col">Plans</th>
                    <th scope="col">Cost</th>
                    <th scope="col">Action</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($plans as $index => $plan)
                    <tr>
                        <th scope="row">{{ $plans->firstItem() + $index }}</th>
                        <td id="icon-img"><img src="{{ asset("storage/$plan->icon_path") }}" height="50px"></td>
                        <td>{{ $plan->name }}</td>
                        <td>{{ $plan->cost }}</td>
                        <td>
                            <a href="{{ route('admin.plans.edit', $plan->id) }}">
                                <i class="fas fa-edit"></i>
                            </a>

                            <a class="deleteRecord" data-id="form-submit-{{ $plan->id }}"
                                data-route="{{ route('admin.plans.destroy', $plan->id) }}">
                                <i class="fas fa-trash" style="color:rgb(255, 23, 23)"></i>
                            </a>

                            <form method="POST" id="form-submit-{{ $plan->id }}"
                                action="{{ route('admin.plans.destroy', $plan->id) }}" hidden>
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
        {{$plans->links('pagination::bootstrap-4')}}
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
