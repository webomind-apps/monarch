@extends('admin.layout.master')

@section('page-contents')
    <div>
        <div class="row">
            <div class="col-lg-10 mx-auto">
                <form method="POST" action="{{ route('admin.plans.update', $plan->id) }}" enctype="multipart/form-data">
                    @method('PATCH')
                    @csrf
                    <div class="form-group">
                        <div class="form-group">
                            <label for="Name">Title<span style="color: red">*</span></label>
                            <input type="text" class="form-control" id="name" name="name" placeholder="Name"
                                value="{{ $plan->name }}" required>
                        </div>
                        <div class="form-group">
                            <label for="LocationName">Cost<span style="color: red">*</span></label>
                            <input type="text" class="form-control" id="cost" name="cost" placeholder="Cost"
                                value="{{ $plan->cost }}" required>
                        </div>
                        <div class="form-group">
                            <label for="Note">Note<span style="color: red">*</span></label>
                            <input type="text" class="form-control" id="note" name="note" placeholder="Note"
                                value="{{ $plan->note }}">
                        </div>
                        <div class="form-group">
                            <label for="Icon">Icon<span style="color: red">*</span></label>
                            <input type="file" class="form-control" id="icon" name="icon" placeholder="Icon"
                                value="{{ $plan->icon_path }}">
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="Icon">Icon</label>
                        <div class="image-section">
                            <div class="image">
                                <img src="{{ asset("storage/$plan->icon_path") }}" height="100px">
                            </div>
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="For home page">For home page &nbsp;</label>
                        <input type="checkbox" id="in_homepage" name="in_homepage" value="1"  @if ($plan->in_homepage) checked @endif>
                    </div>
                    <button type="submit" class="btn btn-danger btn-sm">Submit</button>
            </div>
        </div>

        </form>
        <div>

        </div>
    </div>
@endsection
