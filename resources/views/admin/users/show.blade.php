@extends('admin.layout.master')

@section('page-contents')
<div>
    <div class="row">
        <div class="col-lg-10 mx-auto">
            <form method="POST" action="{{ route('admin.users.store') }}" enctype="multipart/form-data">
                @method('POST')
                @csrf
                <div class="form-group">
                    <div class="form-group">
                        <label for="Title">Name<span style="color: red">*</span></label>
                        <input type="text" class="form-control" id="name" name="name" placeholder="Name"
                            value={{ $users->name }} readonly>
                    </div>
                    <div class="form-group">
                        <label for="Title">Email<span style="color: red">*</span></label>
                        <input type="email" class="form-control" id="email" name="email" placeholder="Email"
                            value={{ $users->email }} readonly>
                    </div>
                    {{-- <div class="form-group">
                        <label for="Password">Password<span style="color: red">*</span></label>
                        <input type="password" class="form-control" id="password" name="password"
                            placeholder="Password">
                    </div> --}}
                </div>
            </form>
        </div>
    </div>
</div>

@endsection