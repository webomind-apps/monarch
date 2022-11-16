@extends('admin.layout.master')

@section('page-contents')
<style>
    .password{
        position: relative;
    }
    #togglePassword{
        position: absolute;
        bottom: 27%;
        right: 6%;
    }
</style>
    <div>
        <div class="row">
            <div class="col-lg-10 mx-auto">
                <form method="POST" action="{{ route('admin.users.update', $users->id) }}"
                    enctype="multipart/form-data">
                    @method('PATCH')
                    @csrf
                    <div class="form-group">
                        <div class="form-group">
                            <label for="Title">Name<span style="color: red">*</span></label>
                            <input type="text" class="form-control" id="name" name="name" placeholder="Name"
                                value={{ $users->name }}>
                        </div>
                        <div class="form-group">
                            <label for="Title">Email<span style="color: red">*</span></label>
                            <input type="email" class="form-control" id="email" name="email" placeholder="Email"
                                value={{ $users->email }}>
                        </div>
                        {{-- <div class="form-group">
                            <label for="Password">Password<span style="color: red">*</span></label>
                            <input type="password" class="form-control password" id="password" name="password"
                                placeholder="Password" value={{ $users->password }}>
                                <i class="far fa-eye" id="togglePassword" style="cursor: pointer;"></i>
                        </div> --}}
                    </div>
                    <button type="submit" class="btn btn-danger btn-sm">Submit</button>
            </div>
        </div>
        </form>
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
