@extends('admin.layout.master')

@section('page-contents')
    <style>
        .password1 {
            position: relative;
        }

        #togglePassword {
            position: absolute;
            bottom: 95px;
            right: 60px;
        }
    </style>
    <div class="d-sm-flex align-items-center justify-content-between mb-4">
        <h1 class="h3 mb-0 text-gray-800">Add Users</h1>
    </div>
    <div>
        <div class="row">
            <div class="col-lg-10 mx-auto">
                <form method="POST" action="{{ route('admin.users.store') }}" enctype="multipart/form-data">
                    @method('POST')
                    @csrf
                    {{-- <div class="form-group"> --}}
                        <div class="form-group">
                            <label for="Admin Type">Admin type</label>
                            <select name="admin_type" class="form-control" id="admin_type" required>
                                <option value="">Select</option>
                                <option value="1">Super admin</option>
                                <option value="0">Admin</option>
                            </select>
                        </div>
                        <div class="form-group" id="admin_clinics">
                            <label for="Clinics">Clinics</label><br>
                            {{-- <input type="checkbox" name="clinics" id="clinics"> --}}
                        </div>
                        <div class="form-group">
                            <label for="Title">Name<span style="color: red">*</span></label>
                            <input type="text" class="form-control" id="name" name="name" placeholder="Name"
                                value="{{ old('name') }}">
                            @error('name')
                                <span class="error">{{ $message }}</span>
                            @enderror
                        </div>
                        <div class="form-group">
                            <label for="Title">Email<span style="color: red">*</span></label>
                            <input type="email" class="form-control" id="email" name="email" placeholder="Email"
                                value="{{ old('email') }}">
                            @error('email')
                                <span class="error">{{ $message }}</span>
                            @enderror
                        </div>
                        <div class="form-group" id="password1">
                            <label for="Password" >Password<span style="color: red" >*</span>&nbsp;<span
                                    style="color: red">Minimun
                                    8 characters with alphabets and numbers </span></label>
                            <input type="password" class="form-control" id="password" name="password"
                                placeholder="Password" value="{{ old('password') }}">
                            <i class="far fa-eye" id="togglePassword"
                                style="margin-left: -30px; 
                            cursor: pointer"></i>
                            @error('password')
                                <span class="error">{{ $message }}</span>
                            @enderror
                        </div>   
                    {{-- </div> --}}
                    <button type="submit" class="btn btn-danger btn-sm">Add</button>
                </form>
            </div>
        </div>
    </div>
@endsection


@push('scripts')
    <script>
        const togglePassword = document.querySelector('#togglePassword');
        const password = document.querySelector('#password');

        togglePassword.addEventListener('click', function(e) {
            // toggle the type attribute
            const type = password.getAttribute('type') === 'password' ? 'text' : 'password';
            password.setAttribute('type', type);
            // toggle the eye slash icon
            this.classList.toggle('fa-eye-slash');
        });
    </script>

    <script>
        $(document).ready(function() {
            $("#admin_clinics").hide();
            $("#admin_type").change(function() {
                if ($(this).val() == '0') {
                    $("#admin_clinics").show();
                    $.ajax({
                        url: '{{ route('admin.clinics_admin') }}',
                        method: "GET",
                        dataType: 'json',
                        success: function(data) {
                            console.log(data);
                            for (var i = 0; i < data.length; i++) {
                                var htm = "<input type='checkbox' value='" + data[i].id +
                                    "'name= clinics[]>" +
                                    '<label for=' + data[i].name + '>&nbsp &nbsp' + data[i]
                                    .name + '</label><br>';
                                $('#admin_clinics').append(htm);
                            }
                        },
                    });
                }
            });
        });
    </script>
@endpush
