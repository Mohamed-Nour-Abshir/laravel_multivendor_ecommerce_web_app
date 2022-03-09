@extends('admin.layout.layout')
@section('content')

<div class="main-panel">
    <div class="content-wrapper">
      <div class="row">
        <div class="col-md-12 grid-margin">
          <div class="row">
            <div class="col-12 col-xl-8 mb-4 mb-xl-0">
              <h3 class="font-weight-bold">Settings</h3>
            </div>
          </div>
        </div>
      </div>

      {{-- form  --}}
      <div class="row">
        <div class="col-md-6 grid-margin stretch-card">
          <div class="card">
            <div class="card-body">
              <h4 class="card-title">Update Admin Password</h4>
              <form class="forms-sample">
                <div class="form-group">
                  <label for="exampleInputUsername1">Username/Email</label>
                  <input type="text" class="form-control" name="name" value="{{$adminDetails['email']}}">
                </div>
                <div class="form-group">
                  <label for="exampleInputUsername1">Admin Type</label>
                  <input type="text" class="form-control" name="name" value="{{$adminDetails['type']}}">
                </div>
                <div class="form-group">
                  <label for="exampleInputPassword1">Current Password</label>
                  <input type="password" class="form-control" id="exampleInputPassword1" placeholder="Current Password" required>
                </div>
                <div class="form-group">
                  <label for="exampleInputConfirmPassword1">New Password</label>
                  <input type="password" class="form-control" id="exampleInputConfirmPassword1" placeholder="New Password" required>
                </div>
                <div class="form-group">
                  <label for="exampleInputConfirmPassword1">Confirm New Password</label>
                  <input type="password" class="form-control" id="exampleInputConfirmPassword1" placeholder="Confirm New Password" required>
                </div>
                <div class="form-check form-check-flat form-check-primary">
                  <label class="form-check-label">
                    <input type="checkbox" class="form-check-input">
                    Remember me
                  </label>
                </div>
                <button type="submit" class="btn btn-primary mr-2">Submit</button>
                <button class="btn btn-light">Cancel</button>
              </form>
            </div>
          </div>
        </div>
    </div>
</div>
@endsection
