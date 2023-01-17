@extends('admin.layout.master')

@section('page-contents')
    <div>
        <div class="row">
            <div class="col-lg-10 mx-auto">
                <form>
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

                       {{-- {{ dd(Auth::user()->clinics())}} --}}
                        {{-- <label for="Title">Clinics<span style="color: red">*</span></label>
                        @foreach ($clinics as $item)
                            <div class="form-group">
                                <input type="email" class="form-control" id="email" name="email" placeholder="Email"
                                    value={{ $item->name }} readonly>
                            </div>
                        @endforeach --}}

                    </div>
                </form>
            </div>
        </div>
    </div>
@endsection
