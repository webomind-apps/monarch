@extends('admin.layout.master')

@section('page-contents')
    <style>
        .password {
            position: relative;
        }

        #togglePassword {
            position: absolute;
            bottom: 27%;
            right: 6%;
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
                    <div class="form-group">
                        <div class="form-group">
                            <label for="Title">Name<span style="color: red">*</span></label>
                            <input type="text" class="form-control" id="name" name="name" placeholder="Name">
                            @error('name')
                                <span class="error">{{ $message }}</span>
                            @enderror
                        </div>
                        <div class="form-group">
                            <label for="Title">Email<span style="color: red">*</span></label>
                            <input type="email" class="form-control" id="email" name="email" placeholder="Email">
                            @error('email')
                                <span class="error">{{ $message }}</span>
                            @enderror
                        </div>
                        <div class="form-group">
                            <label for="Password">Password<span style="color: red">*</span>&nbsp;<span
                                    style="color: red">Minimun
                                    8 characters with alphabets and numbers </span></label>
                            <input type="password" class="form-control" id="password" name="password"
                                placeholder="Password">
                            <i class="far fa-eye" id="togglePassword" style="cursor: pointer;"></i>
                            @error('password')
                                <span class="error">{{ $message }}</span>
                            @enderror
                        </div>
                    </div>
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
@endpush
