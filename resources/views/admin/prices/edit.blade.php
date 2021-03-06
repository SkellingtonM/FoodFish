@extends('layouts.admin')
@section('content')

<div class="content-header">
  <div class="container-fluid">
    <div class="row mb-2">
      <div class="col-sm-6">
        <h1 class="m-0 text-dark"> Edit Price</h1>
      </div><!-- /.col -->
      <div class="col-sm-6">
        <ol class="breadcrumb float-sm-right">
          <li class="breadcrumb-item"><a href=" {{ route('home') }}">Dashboard</a></li>
          <li class="breadcrumb-item active">Edit Price</li>
        </ol>
      </div><!-- /.col -->
    </div><!-- /.row -->
  </div><!-- /.container-fluid -->
</div>
    <!-- /.content-header -->
    <section class="content">
  <div class="container-fluid">
    
  <form method="post" action="{{ route('admin.prices.store',$prices->price_id) }}">
    @csrf
    @method('POST')
    <input type="hidden" name="_token" value="{{ csrf_token() }}">
      <div class="form-group">
        <div class="row">
          <label class="col-md-3">Price ID</label>
          <select class="form-control" name="price_id">
          @foreach($users as $c)
          @if($c->id == Auth::user()->id || Auth::user()->is_admin)
          <option value="{{$c->id}}"> {{$c->id}}</option>
          @endif
          @endforeach
          </select>
          <div class="clearfix"></div>
        </div>
      </div>
	  
      <input type="hidden" name="_token" value="{{ csrf_token() }}">
      <div class="form-group">
        <div class="row">
          <label class="col-md-3">Name of Fish</label>
          <div class="col-md-6"><input type="text" id="title" name="title" class="form-control"></div>
          <div class="clearfix"></div>
        </div>
      </div>

      <input type="hidden" name="_token" value="{{ csrf_token() }}">
      <div class="form-group">
        <div class="row">
          <label class="col-md-3">Price</label>
          <div class="col-md-6"><input type="text" id="price" name="price" class="form-control"></div>
          <div class="clearfix"></div>
        </div>
      </div>

      
      <input type="hidden" name="_token" value="{{ csrf_token() }}">
      <div class="form-group">
        <div class="row">
          <label class="col-md-3">Location</label>
          <div class="col-md-6"><input type="text" id="location" name="location" class="form-control"></div>
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