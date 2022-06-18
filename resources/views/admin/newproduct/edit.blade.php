@extends('layouts.admin')
@section('content')

<div class="content-header">
  <div class="container-fluid">
    <div class="row mb-2">
      <div class="col-sm-6">
        <h1 class="m-0 text-dark">Edit Profile</h1>
      </div><!-- /.col -->
      <div class="col-sm-6">
        <ol class="breadcrumb float-sm-right">
          <li class="breadcrumb-item"><a href=" {{ route('home') }}">Dashboard</a></li>
          <li class="breadcrumb-item active">Profile</li>
        </ol>
      </div><!-- /.col -->
    </div><!-- /.row -->
  </div><!-- /.container-fluid -->
</div>
    <!-- /.content-header -->
<section class="content">
  <div class="container-fluid">
  <form method="post" action="{{ route('admin.profiles.update',$profiles->profile_id) }}">
      @method('PUT')
      <input type="hidden" name="_token" value="{{ csrf_token() }}">
      <div class="form-group">
        <div class="row">
          <label class="col-md-3">Profile ID</label>
          <div class="col-md-6"><input type="text" name="profile_id" class="form-control" value="{{ $profiles->profile_id }}"></div>
          <div class="clearfix"></div>
        </div>
      </div>
      <input type="hidden" name="_token" value="{{ csrf_token() }}">
      <div class="form-group">
        <div class="row">
          <label class="col-md-3">Name</label>
          <div class="col-md-6"><input type="text" id="name" name="name" class="form-control"></div>
          <div class="clearfix"></div>
        </div>
      </div>
      <input type="hidden" name="_token" value="{{ csrf_token() }}">
      <div class="form-group">
        <div class="row">
          <label class="col-md-3">Email</label>
          <div class="col-md-6"><input type="text" id="email" name="email" class="form-control"></div>
          <div class="clearfix"></div>
        </div>
      </div>
      <input type="hidden" name="_token" value="{{ csrf_token() }}">
      <div class="form-group">
        <div class="row">
          <label class="col-md-3">No.Phone</label>
          <div class="col-md-6"><input type="text" id="phone" name="phone" class="form-control"></div>
          <div class="clearfix"></div>
        </div>
      </div>
      <input type="hidden" name="_token" value="{{ csrf_token() }}">
      <div class="form-group">
        <div class="row">
          <label class="col-md-3">Company Name</label>
          <div class="col-md-6"><input type="text" id="company_name" name="company_name" class="form-control"></div>
          <div class="clearfix"></div>
        </div>
      </div>
      <input type="hidden" name="_token" value="{{ csrf_token() }}">
      <div class="form-group">
        <div class="row">
          <label class="col-md-3">Address</label>
          <div class="col-md-6"><input type="text" id="address" name="address" class="form-control"></div>
          <div class="clearfix"></div>
        </div>
      </div>
      <input type="hidden" name="_token" value="{{ csrf_token() }}">
      <div class="form-group">
        <div class="row">
          <label class="col-md-3">Travel Fee</label>
          <div class="col-md-6"><input type="text" id="travel_price" name="travel_price" class="form-control"></div>
          <div class="clearfix"></div>
        </div>
      </div>
      <div class="form-group">
        <input type="submit" class="btn btn-info" value="Save">
      </div>
    </form>
  </div>
</section>  


@endsection