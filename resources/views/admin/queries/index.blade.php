@extends('admin.layout.master')

@section('page-contents')
    <div class="row text-right">
        <div class="col-md-8"></div>
        <div class="col-md-4">
            <select name="location" id="location" class="form-control">
                <option value="" name="location">Select Location</option>
                @foreach ($locations as $location)
                    <option value="{{ $location->id }}" id="{{ $location->id }}"
                        {{ request('location') == $location->id ? 'selected' : '' }}>
                        {{ $location->name }} </option>
                @endforeach
            </select>
        </div>
    </div>
    <br>
    <div class="table-detail">
        <table class="table table-hover">
            <thead>
                <tr>
                    <th scope="col">#</th>
                    <th scope="col">Name</th>
                    <th scope="col">Phone Number</th>
                    <th scope="col">Clinic</th>
                    <th scope="col">Email</th>
                    <th scope="col"></th>
                </tr>
            </thead>
            <tbody>
                @foreach ($queries as $index => $query)
                    <tr>
                        <th scope="row">{{ $queries->firstItem() + $index }}</th>
                        <td>{{ $query->first_name }} {{ $query->last_name }}</td>
                        <td>{{ $query->phone_number }}</td>
                        <td>{{$query->clinic->name}}</td>                       
                        <td>{{$query->email}}</td>                       
                        <td>
                            <a href="{{ route('admin.query.show', $query->id) }}">
                                <i class="fas fa-eye"></i>
                            </a>
                            <a class="deleteRecord" data-id="form-submit-{{ $query->id }}"
                                data-route="{{ route('admin.query.destroy', $query->id) }}">
                                <i class="fas fa-trash" style="color:rgb(255, 23, 23)"></i>
                            </a>
                            <form method="POST" id="form-submit-{{ $query->id }}"
                                action="{{ route('admin.query.destroy', $query->id) }}" hidden>
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
        {{ $queries->links('pagination::bootstrap-4')}}
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

        $('#location').on('change', function() {
            var val = $(this).val();
            // alert(val);
            var route = "{{ url()->current() }}";
            var newRoute = updateQueryStringParameter(window.location.href, 'location', val);
            window.location.href = newRoute;
        })

        function updateQueryStringParameter(uri, key, value) {
            var re = new RegExp("([?&])" + key + "=.*?(&|$)", "i");
            var separator = uri.indexOf('?') !== -1 ? "&" : "?";
            if (uri.match(re)) {
                return uri.replace(re, '$1' + key + "=" + value + '$2');
            } else {
                return uri + separator + key + "=" + value;
            }
        }
    </script>
@endpush
